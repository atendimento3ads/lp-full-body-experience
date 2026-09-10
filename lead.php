<?php

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store, max-age=0');

function respond($status, $payload)
{
    http_response_code($status);
    echo json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    header('Allow: POST');
    respond(405, ['ok' => false, 'message' => 'Método não permitido.']);
}

$contentLength = (int) ($_SERVER['CONTENT_LENGTH'] ?? 0);
if ($contentLength > 20000) {
    respond(413, ['ok' => false, 'message' => 'Requisição muito grande.']);
}

$origin = $_SERVER['HTTP_ORIGIN'] ?? '';
if ($origin !== '') {
    $originHost = strtolower((string) parse_url($origin, PHP_URL_HOST));
    $allowedHosts = ['fullbodyexperience.com.br', 'www.fullbodyexperience.com.br', 'localhost', '127.0.0.1'];
    if (!in_array($originHost, $allowedHosts, true)) {
        respond(403, ['ok' => false, 'message' => 'Origem não autorizada.']);
    }
}

$raw = file_get_contents('php://input');
$data = json_decode($raw ?: '', true);
if (!is_array($data)) {
    respond(400, ['ok' => false, 'message' => 'Dados inválidos.']);
}

// Campo invisível: bots costumam preenchê-lo.
if (trim((string) ($data['website'] ?? '')) !== '') {
    respond(200, ['ok' => true, 'suppressed' => true]);
}

function clean($value, $maxLength = 160)
{
    $text = trim((string) $value);
    $text = preg_replace('/[\x00-\x1F\x7F]+/u', ' ', $text) ?? '';
    return function_exists('mb_substr') ? mb_substr($text, 0, $maxLength) : substr($text, 0, $maxLength);
}

function allowed($value, $values)
{
    return array_key_exists($value, $values);
}

function csvSafe($value)
{
    return preg_match('/^[=+\-@]/', $value) === 1 ? "'" . $value : $value;
}

$medico = clean($data['medico'] ?? '', 8);
$especialidade = clean($data['especialidade'] ?? '');
$atuacao = clean($data['atuacao_estetica'] ?? '');
$modalidade = clean($data['modalidade_interesse'] ?? '');
$disponibilidade = clean($data['disponibilidade'] ?? '');
$decisao = clean($data['prazo_decisao'] ?? '');
$nome = clean($data['nome'] ?? '', 120);
$telefone = clean($data['telefone'] ?? '', 30);
$email = strtolower(clean($data['email'] ?? '', 160));
$consentimento = clean($data['consentimento'] ?? '', 8);

$especialidades = [
    'dermatologia' => 'Dermatologia',
    'cirurgia_plastica' => 'Cirurgia Plástica',
    'clinica_medica' => 'Clínica Médica / Clínica Geral',
    'endocrinologia' => 'Endocrinologia',
    'ginecologia' => 'Ginecologia',
    'medicina_esporte' => 'Medicina do Esporte',
    'medicina_estetica' => 'Atuo com Medicina Estética',
    'outra' => 'Outra especialidade'
];
$atuacoes = [
    'facial_corporal' => 'Já atua com estética facial e corporal',
    'facial_expandir' => 'Atua com estética facial e quer expandir para corporal',
    'iniciando' => 'Está iniciando a atuação em estética',
    'medico_sem_estetica' => 'Médico(a), mas atualmente não atua com estética'
];
$modalidades = [
    'hands_on' => 'Hands On',
    'observador' => 'Observador',
    'duvida' => 'Ainda está em dúvida'
];
$disponibilidades = [
    'disponivel' => 'Já tem disponibilidade',
    'consigo_organizar' => 'Consegue se organizar',
    'confirmar_agenda' => 'Ainda precisa confirmar a agenda'
];
$decisoes = [
    'proximos_dias' => 'Quer falar com a equipe e decidir nos próximos dias',
    'esta_semana' => 'Pretende decidir ainda esta semana',
    'proximas_semanas' => 'Está avaliando para as próximas semanas',
    'buscando_informacoes' => 'Neste momento está apenas buscando informações'
];

if (
    $medico !== 'sim' ||
    !allowed($especialidade, $especialidades) ||
    !allowed($atuacao, $atuacoes) ||
    !allowed($modalidade, $modalidades) ||
    !allowed($disponibilidade, $disponibilidades) ||
    !allowed($decisao, $decisoes) ||
    $consentimento !== 'sim'
) {
    respond(422, ['ok' => false, 'message' => 'Perfil não qualificado ou respostas incompletas.']);
}

$phoneDigits = preg_replace('/\D+/', '', $telefone) ?? '';
$nameLength = function_exists('mb_strlen') ? mb_strlen($nome) : strlen($nome);
if ($nameLength < 3 || strlen($phoneDigits) < 10 || strlen($phoneDigits) > 13 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    respond(422, ['ok' => false, 'message' => 'Confira seu nome, telefone e e-mail.']);
}

$trackingKeys = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term', 'gclid', 'fbclid'];
$tracking = [];
foreach ($trackingKeys as $key) {
    $tracking[$key] = clean($data[$key] ?? '', 150);
}

$storageDir = getenv('FULLBODY_LEADS_DIR') ?: dirname(__DIR__) . '/fullbodyexperience-leads';
if (!is_dir($storageDir) && !mkdir($storageDir, 0700, true) && !is_dir($storageDir)) {
    respond(500, ['ok' => false, 'message' => 'Não foi possível registrar o contato.']);
}
@chmod($storageDir, 0700);

$csvPath = $storageDir . '/leads.csv';
$handle = fopen($csvPath, 'c+');
if ($handle === false || !flock($handle, LOCK_EX)) {
    if (is_resource($handle)) {
        fclose($handle);
    }
    respond(500, ['ok' => false, 'message' => 'Não foi possível registrar o contato.']);
}

fseek($handle, 0, SEEK_END);
if (ftell($handle) === 0) {
    fwrite($handle, "\xEF\xBB\xBF");
    fputcsv($handle, [
        'criado_em', 'nome', 'whatsapp', 'email', 'especialidade', 'atuacao_estetica',
        'modalidade_interesse', 'disponibilidade', 'prazo_decisao',
        'utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term', 'gclid', 'fbclid'
    ], ';', '"', '');
}

$row = array_map('csvSafe', [
    (new DateTimeImmutable('now', new DateTimeZone('America/Sao_Paulo')))->format('Y-m-d H:i:s'),
    $nome, $phoneDigits, $email, $especialidades[$especialidade], $atuacoes[$atuacao],
    $modalidades[$modalidade], $disponibilidades[$disponibilidade], $decisoes[$decisao],
    $tracking['utm_source'], $tracking['utm_medium'], $tracking['utm_campaign'],
    $tracking['utm_content'], $tracking['utm_term'], $tracking['gclid'], $tracking['fbclid']
]);

$written = fputcsv($handle, $row, ';', '"', '');
fflush($handle);
flock($handle, LOCK_UN);
fclose($handle);
@chmod($csvPath, 0600);

if ($written === false) {
    respond(500, ['ok' => false, 'message' => 'Não foi possível registrar o contato.']);
}

respond(200, ['ok' => true]);
