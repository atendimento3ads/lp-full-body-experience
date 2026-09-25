# LP — Supreme Full Body Experience

Landing page de venda da imersão presencial **Supreme Full Body Experience**, dias
**19 e 20 de outubro de 2026**, na Clínica Supreme — Goiânia/GO.

- **Cliente:** Clínica Supreme (Dra. Maria Lígia Mendonça) — ponto focal: Monique Mendonça
- **Público:** médicos (dermatologista, vascular, nutrólogo) + gestores/sócios de clínica
- **Ticket:** R$ 1.499 a R$ 16.899 — high ticket, ciclo curto
- **Domínio novo:** `fullbodyexperience.com.br` (registro em andamento — Atendimento 3ADS)
- **LP atual, que será substituída:** <https://supremeclinica.sprinthub.site/full-body>
- **Preview no ar:** <https://atendimento3ads.github.io/lp-full-body-experience/>
- **Repositório:** <https://github.com/atendimento3ads/lp-full-body-experience>

> ⚠️ **O GitHub Pages é público.** Qualquer pessoa com o link vê a página e as fotos de
> pacientes da seção de resultados. Enquanto a autorização de uso de imagem não estiver
> confirmada (pendência 6), tratar este link como **interno**: usar para aprovação do
> cliente e revisão da equipe, não divulgar e não apontar campanha para ele. O endereço de
> campanha é o `fullbodyexperience.com.br`, no cPanel.

A interface fica em `index.html` — HTML + CSS + JS em arquivo único, sem framework. O envio
dos leads usa o endpoint PHP pequeno e independente `lead.php`.

### Duas versões no repositório

| Arquivo | O que é |
|---|---|
| **`index.html`** | **Versão atual.** Diagramação refeita sobre a referência aprovada em 18/08 |
| `index-versaoantiga.html` | Primeira versão, editorial de canto reto. Mantida para comparação |

`index-versaoantiga.html` é mantido apenas como histórico. Novas implementações, incluindo
o formulário de qualificação, ficam somente em `index.html`.

---

## Situação em 18/08/2026

**A página está construída e navegável.** Copy e layout foram feitos juntos, a partir do
briefing. O que falta para publicar são dados do cliente e as composições de imagem —
ver *Bloqueios* e *Composições a produzir*.

### A conta do prazo

| Marco | Data | Dias a partir de hoje |
|---|---|---|
| Go live da LP | 28/08 | 10 |
| Fim da janela de campanha | 18/10 | 40 |
| Imersão | 28 e 20/10 | 41 |

A campanha tem **30 dias de veiculação** entre o go live e o dia 18/10. Se a página atrasar,
a verba perde janela — a data não muda.

---

## Bloqueios de publicação

Os itens abaixo ainda precisam de confirmação antes da publicação definitiva.

1. **O número de WhatsApp comercial** — `CONFIG.whatsapp`. Está preenchido com
   `55 62 99843-2153`, que é o que a LP atual usa. **Confirmar se é esse mesmo** e se ele
   aguenta o volume do lançamento. *(Monique)*
2. **Os IDs de rastreamento** — `CONFIG.metaPixelId` e `CONFIG.ga4Id`. Enquanto vazios, o
   Pixel e o GA4 não carregam diretamente pelo HTML. O container **GTM-MS8VK2NT** está
   instalado e recebe os eventos personalizados da LP pelo `dataLayer`; Pixel e GA4 podem
   ser configurados dentro dele. Evitar configurar a mesma tag no GTM e diretamente no HTML,
   para não duplicar eventos.
   A verificação de domínio da Meta já está configurada pelo arquivo
   `rjyjo827kvy6idt3f86dxno0txx412.html`; ela não substitui o ID do Pixel.
   *(Dayana)*
3. **Quantas vagas, afinal.** A página inteira usa **10 Hands On + 10 Observador + 30
   Gestão**, conforme o onboarding e o briefing. A LP atual anuncia "até 15 médicos". São
   números diferentes — confirmar antes do go live, porque aparece em 6 lugares na página.
   *(Monique)*
4. **Política de troca e reembolso.** O FAQ tem a pergunta, mas a resposta remete ao contrato
   sem detalhar prazo. Há um comentário `PENDÊNCIA 4` no HTML marcando o ponto exato.
   *(Cliente/jurídico)*
5. **Autorização de uso de imagem** dos pacientes da galeria — ver *Publicidade médica*.

---

## O que a página faz

A regra que o briefing definiu como central foi implementada literalmente:

> **Primeiro o lead entende os dois dias. Só depois ele escolhe a modalidade.**

Nenhum valor aparece antes da seção 03. O R$ 1.999 nunca aparece sozinho — sempre dentro da
composição do pacote e sempre ao lado do "avulso custa R$ 3.790". E as modalidades estão em
**duas faixas**, não em três cards concorrentes.

| # | Seção | O que resolve |
|---|---|---|
| — | Barra fixa superior | Escassez + contador real para 19/10 às 9h + CTA para qualificação |
| — | Hero | Promessa em uma frase que já ensina os dois dias · 4 provas · vídeo do convite |
| — | Faixa diagonal | Marquee de marca entre os blocos, três vezes na página |
| — | O convite | Vídeo de 58s da Dra. Maria Lígia e da Dra. Ana Machado, em modal |
| 01 | O cenário | Por que o facial saturou e o corporal não, em 3 blocos |
| 02 | **Como funciona** | Os dois dias, com quem participa e quem não participa de cada um, + os 6 módulos em cartões com ícone |
| 03 | O conceito Supreme | Tratar, modelar, sustentar, ajustar, ao lado da figura das quatro etapas |
| 04 | **Somente de gestão** | O dia 20 explicado à parte, com Silvane Castro como autoridade do módulo |
| 05 | **Modalidades** | Dois caminhos: médico (Hands On / Observador) e gestão avulsa · fecha com "em uma frase", 3 linhas de autosseleção |
| — | **Qualificação** | Fluxo em 7 etapas para candidatos médicos, com encerramento condicional e coleta de contato somente no final |
| 06 | O retorno | A conta do ROI, rotulada como cenário ilustrativo |
| 07 | Quem conduz | Os 4 professores |
| 08 | Antes de decidir | Para quem é / para quem não é |
| 09 | Resultados | Galeria de antes e depois + disclaimer com a marcação de conteúdo técnico-científico |
| 10 | FAQ | 12 perguntas, **5 dedicadas a modalidade** |
| 11 | Inscrições | CTA final + quadro de informações práticas |
| — | Rodapé | Responsável técnica, aviso de conteúdo técnico-científico |
| — | Barra fixa inferior (mobile) | Dois acessos ao formulário de qualificação |

**Oferta confirmada em 19/08:** o pacote Observador custa **R$ 12.899**, composto pela
imersão Observador de **R$ 10.900** + Módulo de Gestão de **R$ 1.999**. Assim como no Hands
On, o módulo já está incluso no pacote. Avulso, o Módulo de Gestão custa **R$ 3.790** para
médicos ou **R$ 1.499** para o gestor acompanhante.

**Pendência de link:** o crédito no rodapé aponta para `https://3ads.com.br`, que é um palpite.
Confirmar o domínio oficial da agência antes de publicar em campanha (há um comentário
`PENDÊNCIA` no HTML marcando o ponto).

**Regra de escrita:** a copy não usa travessão (—). Onde havia, a frase foi reescrita com
dois pontos, vírgula ou ponto final. Vale para qualquer edição futura.

**Do que o briefing pediu para não fazer, um item foi revertido pelo cliente.** Não há
contador falso, nem promessa de resultado financeiro, nem três cards iguais lado a lado, nem
preço antes da explicação dos dois dias, e o nome da Dra. Ana Machado está grafado de uma
forma só.

A exceção é o item *"não escrever vagas limitadas sem dizer o número"*: em 19/08 o cliente
pediu para trocar todas as contagens por **turmas reduzidas**, e a arte nova do hero já veio
com "VAGAS LIMITADAS". Decisão registrada; o argumento do briefing era que dizer 10 é mais
forte que dizer limitadas.

---

## Direção visual

A diagramação segue a **referência enviada pelo JP em 18/08**
(`_material-cliente/referencias/ref-layout-e-diagramacao.png`), com a identidade Supreme no
lugar da paleta da referência.

O que veio da referência:

- **Sans geométrica dominante**, com título em dois pesos — primeira linha fina, segunda
  linha grossa. É a assinatura tipográfica da peça
- **Faixa diagonal com marquee** entre os blocos: duas fitas cruzadas em ângulos diferentes,
  rolando em sentidos opostos
- **Monograma gigante ao fundo**, em contorno dourado, atravessando as seções
- **CTA em pílula com degradê bronze** e seta diagonal, repetido ao longo da página
- **Alternância clara/escura** entre seções, com cartões de canto arredondado
- **Barra fixa superior em dourado escuro**, com o CTA em pílula clara para saltar do fundo
- **Hero de seção inteira**, com recorte, cartões flutuantes e monograma na própria arte.
  A arte acompanha a **altura** da seção (`background-size:auto 95%`), ancorada em `51% bottom`,
  que é onde o recorte começa: assim a figura cresce junto com o texto em vez de encolher em
  telas menores. Abaixo de 1000px o hero empilha e passa a usar a arte vertical
- **Composições em perspectiva** nas seções de conteúdo
- **FAQ em pílulas escuras** sobre fundo claro

O que se manteve da Supreme: o dourado, o itálico serifado como acento das palavras de
destaque, e o tom clínico-empresarial da copy.

> **Duas coisas contrariam o briefing e precisam de "ok" registrado.** O briefing (item 5)
> pede tema escuro, e a página é clara — decisão do JP em 18/08. E pede "raio de canto quase
> zero, nada de cartão arredondado"; a referência é toda arredondada, e a referência
> prevaleceu. Nenhuma das duas muda a copy nem as regras de conteúdo.

### Paleta

O dourado da marca (#C9A96A) **não tem contraste para texto sobre fundo claro** — 2,04:1.
Ele ficou como contorno, fita e ornamento; o texto usa uma variação escurecida.

| Papel | Variável | Hex | Contraste |
|---|---|---|---|
| Fundo base | `--papel` | `#F8F5F0` | — |
| Fundo alternado | `--papel-2` | `#F1ECE3` | — |
| Tinta principal | `--tinta` | `#17130F` | 16,8:1 |
| Tinta secundária | `--tinta-2` | `#5C5348` | 6,8:1 |
| **Dourado de texto** | `--ouro-txt` | `#806024` | 5,3:1 |
| Dourado de marca | `--ouro` | `#C9A96A` | decorativo — nunca texto |
| Bloco escuro | `--breu` | `#16130F` | — |
| Off-white sobre escuro | `--claro` | `#F6F3EE` | 17,0:1 |
| Dourado sobre escuro | `--ouro-luz` | `#EBD9AE` | 13,6:1 |
| Degradê do CTA | `--grad-cta` | `#6B4F1E → #B08D45 → #7E5F24` | texto claro passa AA |

Todas as variáveis estão no topo do `index.html` — mexer lá muda a página inteira.

### Tipografia

- **Poppins** — títulos, corpo e interface. Geométrica, como a referência, e já é a fonte
  da LP atual do SprintHub, então mantém continuidade de marca.
- **Playfair Display itálico** — só nas palavras de acento (*Experience*, *ajustar*, *não*,
  *turmas são reduzidas*). É o que sobra da serifada de alto contraste que o briefing pedia.

Ambas via Google Fonts, licença SIL OFL. Ver `fonts/LEIA-ME.txt`.

---

## Composições a produzir

A referência apoia boa parte da comunicação em **composições de imagem trabalhadas** —
recortes, pilhas em perspectiva, cartazes.

### Entregue

O **hero já é arte final**: uma imagem de seção inteira com o recorte da Dra. Maria Lígia,
os cartões flutuantes e o monograma embutidos, em duas versões — `images/hero-desktop.webp`
(1920×874, área de texto na metade esquerda) e `images/hero-mobile.webp` (809×1641, área de
texto na metade de cima).

O fundo das duas é `#EBE0C9` chapado, então a seção usa essa cor como `background-color` e
ancora a arte embaixo: quando o texto pede mais altura do que a arte tem, a sobra vira creme
liso e a emenda não aparece. No mobile, um espaçador com altura em `100vw × 797/809` reserva
exatamente a área da figura, para o texto nunca cair por cima dela.

Os 6 módulos, que na referência eram uma fileira de cartazes, foram resolvidos em **cartões
com ícone e texto**, por decisão do cliente em 18/08. Os ícones são SVG de traço desenhados
para esta página e vivem no sprite no topo do `<body>` (`#m-gluteo`, `#m-abdomen`,
`#m-lipedema`, `#m-pernas`, `#m-fullbody`, `#m-gestao`).

### Fotos dos módulos: 6 de 6

O cliente enviou as fotos em duas levas, em 21/08. Os cinco módulos clínicos usam imagens
em `images/modulos/`, recortadas em 4:3 a 760×570 e exportadas em WebP. O Módulo de Gestão
usa uma composição com os retratos dos três professores.

| Módulo | Arquivo | Pasta de origem |
|---|---|---|
| Glúteo Supreme | `gluteo.webp` | Bumbum Supreme |
| Abdômen Supreme | `abdomen.webp` | Abdomen Sculpt |
| Lipedema Protocol | `lipedema.webp` | Lipedema |
| Pernas e Embelezamento | `pernas.webp` | Embelezamento Pernas |
| Full Body Supreme | `fullbody.webp` | geral |
| Do Full Face ao Full Body | `maria-ligia.webp`, `arthur-rocha.webp`, `silvane-castro.webp` | professores |

As cinco imagens clínicas são registros de antes e depois, não de aplicação. No cartão do Full Body foi usada a
peça composta da pasta "geral", recortada no miolo para que apareça mais de uma área e o
cartão comunique "protocolo integrado".

**Isso soma cinco fotos de paciente à página, além das seis da galeria de resultados.** Todas
entram na mesma pendência de autorização de uso de imagem.

---

## Assets

Tudo veio da LP atual — as imagens e o vídeo estavam em base64 dentro do HTML, não havia URL
de arquivo. Os originais estão em `_material-cliente/lp-atual/`; o que entra no ar está em
`images/`, já em WebP.

### O vídeo: o que foi decidido e por quê

O briefing pedia um loop de 20s, mudo, vertical e horizontal. **O vídeo que existe não serve
para isso**: é um convite falado de 58s, com legenda queimada na imagem do começo ao fim e
apenas dois cortes curtos de b-roll. Como loop mudo, ficaria legenda piscando sem áudio.

A decisão foi tratá-lo pelo que ele é: um **convite**, com som, atrás de um botão "Ver o
convite · 58s" no hero, que abre em modal. Está com `preload="none"` — os 2,5 MB só baixam se
alguém clicar, então não entram no peso da página.

**Para ter o hero com movimento, precisamos de b-roll de verdade** — sala de procedimento,
aplicação, bastidor da turma anterior. Sem isso, o hero fica como está: composição
tipográfica com o retrato da Dra. Maria Lígia.

### O que falta

- **B-roll** para o hero (acima)
- **Logo Supreme em vetor** — hoje o hero usa um monograma provisório em CSS, e o favicon é
  um "S" desenhado à mão em `images/brand/favicon.svg`
- **`images/og-cover.jpg`** — a prévia de compartilhamento está referenciada mas não existe
- **Retratos com direção de arte única.** Os quatro atuais têm fundos diferentes (escuro,
  branco, cinza, cinza). Foi aplicada uma tinta quente uniforme via CSS para amarrar, mas
  fotos novas no mesmo padrão resolveriam de verdade
- Fotos da clínica e da sala de procedimento, foto de turma anterior, vídeos da Silvane

---

## Publicidade médica — ler antes de publicar

A página é pública, tem foto de resultado de paciente e vai receber verba de tráfego. Das três
medidas do briefing (item 7), duas estão implementadas e uma foi dispensada pelo cliente:

1. Marcação de **conteúdo técnico-científico dirigido a médicos** — está no rodapé e na
   primeira frase do aviso logo abaixo da galeria
2. ~~Galeria atrás de confirmação de "sou profissional da área médica"~~ — **retirada a pedido
   do JP em 18/08.** A galeria abre direto. O briefing trazia isso como "avaliar com o
   cliente", não como obrigação; a decisão é do cliente e está registrada aqui
3. Disclaimer de variação de resultado logo abaixo das imagens

**Nenhuma das fotos tem autorização de imagem confirmada.** O disclaimer afirma que as
imagens são publicadas mediante autorização — isso precisa ser verdade antes do go live.

Uma das fotos originais (`antes-depois-01-gluteo-celulite`) tem marca d'água **"ANNA CLARA
MACHADO"**. Ela é material de outra profissional e exigiria autorização dela também, então
**foi deixada fora da galeria** — está no `_material-cliente`, não em `images/`. Note que a
marca d'água grafa "Anna Clara" enquanto a página usa "Dra. Ana Machado": confirmar a grafia
oficial com ela.

---

## Técnico

### Rastreamento

O container `GTM-MS8VK2NT` está instalado nas duas páginas. Todos os eventos personalizados
abaixo entram no `dataLayer` e podem ser usados como gatilhos no GTM. Os campos
`CONFIG.metaPixelId` e `CONFIG.ga4Id` são uma alternativa de carregamento direto; devem
permanecer vazios quando Pixel e GA4 forem configurados no GTM, para evitar duplicidade.
O Microsoft Clarity também está instalado diretamente nas duas páginas com o projeto
`y93eyiurs9`.

Eventos separados por modalidade, como pede o briefing:
`clique_hands_on` · `clique_observador` · `clique_gestao_gestor` · `clique_gestao_medico` ·
`clique_whatsapp`, mais `ViewContent` ao entrar na seção de modalidades,
`InitiateCheckout` no clique com link de checkout, `scroll_depth` em 25/50/75/100%, e
`abriu_convite` / `liberou_galeria`.

O formulário atual também envia `formulario_qualificacao_iniciado` e
`formulario_desqualificado`. O evento padrão `Lead` é enviado **somente depois** de uma
resposta `ok` do servidor para um cadastro qualificado. Ele leva especialidade, atuação,
modalidade, disponibilidade e prazo de decisão, mas não leva nome, telefone ou e-mail para
o `dataLayer`. Os caminhos "Não sou médico(a)" e "Não consigo participar nessa data" não
solicitam contato, não abrem WhatsApp e não disparam `Lead`.

**UTMs são preservadas** na passagem para o checkout (viram query string) e para o WhatsApp
(entram no fim da mensagem como `[origem: ...]`, para o vendedor ver de onde o lead veio).
Testado com `utm_source`, `utm_campaign`, `utm_content`, `utm_term`, `utm_medium`, `gclid`
e `fbclid`.

### Peso

| | |
|---|---|
| Primeiro acesso (HTML + arte do hero) | **~135 KB** + Google Fonts |
| Página inteira, todas as imagens | **395 KB** |
| Vídeo do convite | 2,5 MB — `preload="none"`, só no clique |

As composições que ainda estão em placeholder não entram nessa conta. Ao produzi-las,
exportar em WebP e manter o total abaixo de 1,5 MB.

A arte do hero é pré-carregada por breakpoint (`<link rel="preload" media>`), então o
navegador baixa só a versão que vai usar.

Bem abaixo do alvo de 1,5 MB do briefing. Imagens em WebP, `loading="lazy"` fora da primeira
dobra, `width`/`height` declarados em todas para não haver deslocamento de layout.

### Acessibilidade e responsivo

- 4 breakpoints: 1080, 900, 760 px. Respeita `prefers-reduced-motion`
- FAQ em `<details>` nativo — funciona sem JS
- **A tabela comparativa vira blocos empilhados no mobile**, com cada valor rotulado pela
  modalidade. Era o ponto do checklist do briefing; testado a 375 px sem estouro horizontal
- Na barra superior do mobile o botão sai e fica só o contador, já que a barra fixa de baixo
  repete o CTA
- O formulário mostra uma pergunta por vez, informa a etapa em um `progressbar`, mantém as
  respostas ao voltar e foi verificado a 390 px sem estouro horizontal

### Recebimento dos leads

`lead.php` recebe o formulário em JSON e valida novamente todos os critérios no servidor.
Somente cadastros médicos, com disponibilidade elegível, respostas completas, contato
válido e consentimento são gravados. O endpoint também limita o tamanho da requisição,
valida a origem, usa um campo honeypot e protege o CSV contra fórmulas executáveis.

No cPanel, os leads ficam em:

```text
/home2/hg3ads37/fullbodyexperience-leads/leads.csv
```

A pasta fica fora do diretório público do site e é criada automaticamente no primeiro
cadastro. O CSV usa ponto e vírgula, abre no Excel e preserva as respostas de qualificação,
UTMs, `gclid` e `fbclid`. Atualmente não há integração com CRM nem aviso por e-mail; a
equipe deve baixar o arquivo pelo Gerenciador de Arquivos do cPanel até que um destino de
CRM/webhook seja definido.

### SEO

Title e description conforme o briefing, canonical, Open Graph, e **JSON-LD `EducationEvent`**
com data, local, professores e as quatro ofertas com preço.

---

---

## Página do Módulo de Gestão · `gestao/index.html`

Segunda página do projeto, criada em 25/09/2026: a mesma diagramação da LP principal,
falando **só do dia 20** (Módulo de Gestão). Endereço previsto:
<https://fullbodyexperience.com.br/gestao/> · preview:
<https://atendimento3ads.github.io/lp-full-body-experience/gestao/>

- **Copy:** `Briefing_Copy_LP_FullBody_Modulo_Gestao.docx` (Drive). Tratada como aprovada:
  a página diagrama, não reescreve. As 11 seções do briefing estão na ordem pedida.
- **Layout:** tokens, barra fixa, faixa diagonal, monograma, CTA em pílula, título em dois
  pesos e o hero (mesma arte `hero-desktop.webp` / `hero-mobile.webp`, mesma mecânica de
  fundo) são os mesmos do `index.html`. Decisão do JP em 25/09: manter a arte do hero mesmo
  ela trazendo o cartão "Dia 19 · Hands-On". O cartão-resumo do dia 20 que o briefing de
  copy previa no hero foi retirado para não competir com a figura; o conteúdo dele
  (quem participa) está nas notas da seção de vagas e no FAQ.
- **Imagens:** reaproveita `images/professores/` (Silvane, Dra. Maria Lígia e Dr. Arthur) e a
  foto da Dra. Maria Lígia na seção "O caso Supreme". Não há foto de paciente nesta página.
- **Formulário** (seção "Último passo"): médico sim/não, vaga (médico · gestor · já comprei
  Observador), nome, WhatsApp e cidade. Os CTAs com `data-vaga` pré-selecionam a vaga.
  Integração no bloco `CONFIG` do `<script>`:
  - `CONFIG.formEndpoint` aponta para `../lead.php`, que recebe o lead por POST (JSON) com
    `formulario: "gestao"` e grava em `fullbodyexperience-leads/leads-gestao.csv`, ao lado
    do `leads.csv` da qualificação. **Se o envio falhar** (por exemplo no GitHub Pages, que
    não roda PHP), a tela de confirmação avisa e destaca o botão do WhatsApp com os dados
    preenchidos, para o lead não se perder.
  - `CONFIG.checkout.medico / .gestor / .observador`: quando preenchidos, a tela de
    "recebemos os seus dados" mostra também o botão "Ir para o pagamento", com UTMs.
  - GTM, Clarity, `CONFIG.whatsapp`, `metaPixelId` e `ga4Id`: os mesmos da LP principal.
- **Eventos:** `clique_cta_gestao` (com a vaga), `lead_gestao` (+ `Lead` no Pixel),
  `viu_vagas_gestao` (+ `ViewContent`), `clique_whatsapp`, `scroll_depth`, e
  `InitiateCheckout` no botão de pagamento. Contador real para 20/10 às 9h.
- **Pendências próprias:** links de checkout por vaga (Monique) e `og-cover`, compartilhado
  com a LP principal.

## Estrutura da pasta

```
lp-full-body-experience/
├── index.html                    a página (versão da referência)
├── index-versaoantiga.html       primeira versão, editorial
├── gestao/index.html             página só do Módulo de Gestão (dia 20)
├── lead.php                      valida e grava os leads (qualificação e gestão)
├── .cpanel.yml                   receita de implantação do Git Version Control
├── images/
│   ├── hero-desktop.webp         arte do hero, 1920×874
│   ├── hero-mobile.webp          arte do hero, 809×1641
│   ├── metodo-etapas.webp        as quatro etapas do método
│   ├── convite-full-body.mp4     vídeo do convite (clique)
│   ├── convite-poster.webp
│   ├── professores/              4 retratos
│   ├── resultados/               6 antes e depois
│   └── brand/favicon.svg         provisório
├── fonts/LEIA-ME.txt
└── _material-cliente/            NÃO sobe para o servidor nem para o Git
    ├── briefing/                 briefing em .md e os dois PDFs originais
    ├── referencias/              referência de layout aprovada em 18/08
    └── lp-atual/                 tudo que foi extraído da LP do SprintHub
```

`_material-cliente/` está no `.gitignore` — tem foto de paciente sem autorização confirmada.

## Rodar localmente

```bash
cd "/caminho/para/lp-full-body-experience" && php -S 127.0.0.1:8080
```

## Publicar

O preview no GitHub Pages republica sozinho a cada push na `main`. Nele, o HTML é exibido,
mas o envio do formulário não funciona porque o GitHub Pages não executa PHP.

No domínio de campanha, usar o **Git Version Control** do cPanel e executar **Deploy HEAD
Commit**. O arquivo `.cpanel.yml` copia `index.html`, `lead.php`, o arquivo de verificação da
Meta, fontes e imagens para `/home2/hg3ads37/fullbodyexperience.com.br/`. O deploy exige a
branch do checkout do cPanel sem alterações locais; qualquer edição deve ser feita no Git e
recebida com `Update from Remote` antes do deploy.

Desenvolvido por **3ADS**.
