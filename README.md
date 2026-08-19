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
> confirmada (pendência 7), tratar este link como **interno**: usar para aprovação do
> cliente e revisão da equipe, não divulgar e não apontar campanha para ele. O endereço de
> campanha é o `fullbodyexperience.com.br`, no cPanel.

Página única em `index.html` — HTML + CSS + JS em arquivo único, sem framework, sem
dependência externa além do Google Fonts.

### Duas versões no repositório

| Arquivo | O que é |
|---|---|
| **`index.html`** | **Versão atual.** Diagramação refeita sobre a referência aprovada em 18/08 |
| `index-versaoantiga.html` | Primeira versão, editorial de canto reto. Mantida para comparação |

As duas têm exatamente a **mesma copy, a mesma arquitetura de seções e o mesmo
comportamento** (contador, rastreamento, portão da galeria, CTAs). O que muda é a
diagramação. A referência está em `_material-cliente/referencias/`.

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

Os três primeiros não têm alternativa técnica. Tudo se resolve no bloco `CONFIG`, no topo do
`<script>` do `index.html`.

1. **Os 4 links de checkout** — `CONFIG.checkout.hands_on`, `.observador`, `.gestao_gestor`,
   `.gestao_medico`. São quatro links distintos, não um só. *(Monique)*
   > Enquanto estiverem vazios, o botão da modalidade **cai para o WhatsApp** com a mensagem
   > certa daquela modalidade, em vez de levar a lugar nenhum. Isso é proposital, para a
   > página poder ir para revisão sem perder lead — mas não é o estado de publicação.
2. **O número de WhatsApp comercial** — `CONFIG.whatsapp`. Está preenchido com
   `55 62 99843-2153`, que é o que a LP atual usa. **Confirmar se é esse mesmo** e se ele
   aguenta o volume do lançamento. *(Monique)*
3. **Os IDs de rastreamento** — `CONFIG.metaPixelId` e `CONFIG.ga4Id`. Enquanto vazios, o
   Pixel e o GA4 não carregam e os eventos só aparecem no console como `[rastreio pendente]`.
   *(Dayana)*
4. **Quantas vagas, afinal.** A página inteira usa **10 Hands On + 10 Observador + 30
   Gestão**, conforme o onboarding e o briefing. A LP atual anuncia "até 15 médicos". São
   números diferentes — confirmar antes do go live, porque aparece em 6 lugares na página.
   *(Monique)*
5. **Política de troca e reembolso.** O FAQ tem a pergunta, mas a resposta remete ao contrato
   sem detalhar prazo. Há um comentário `PENDÊNCIA 4` no HTML marcando o ponto exato.
   *(Cliente/jurídico)*
6. **CRM, RQE e CNPJ** — estão como `[A CONFIRMAR]` no rodapé.
7. **Autorização de uso de imagem** dos pacientes da galeria — ver *Publicidade médica*.

---

## O que a página faz

A regra que o briefing definiu como central foi implementada literalmente:

> **Primeiro o lead entende os dois dias. Só depois ele escolhe a modalidade.**

Nenhum valor aparece antes da seção 03. O R$ 1.999 nunca aparece sozinho — sempre dentro da
composição do pacote e sempre ao lado do "avulso custa R$ 3.790". E as modalidades estão em
**duas faixas**, não em três cards concorrentes.

| # | Seção | O que resolve |
|---|---|---|
| — | Barra fixa superior | Escassez + contador real para 19/10 às 9h + CTA |
| — | Hero | Promessa em uma frase que já ensina os dois dias · 4 provas · vídeo do convite |
| — | Faixa diagonal | Marquee de marca entre os blocos, três vezes na página |
| — | O convite | Vídeo de 58s da Dra. Maria Lígia e da Dra. Ana Machado, em modal |
| 01 | O cenário | Por que o facial saturou e o corporal não, em 3 blocos |
| 02 | **Como funciona** | Os dois dias, com quem participa e quem não participa de cada um, + os 6 módulos em cartões com ícone |
| 03 | O conceito Supreme | Tratar, modelar, sustentar, ajustar, ao lado da figura das quatro etapas |
| 04 | **Somente de gestão** | O dia 20 explicado à parte, com Silvane Castro como autoridade do módulo |
| 05 | **Modalidades** | Dois caminhos: médico (Hands On / Observador) e gestão avulsa · fecha com "em uma frase", 3 linhas de autosseleção |
| 06 | O retorno | A conta do ROI, rotulada como cenário ilustrativo |
| 07 | Quem conduz | Os 4 professores |
| 08 | Antes de decidir | Para quem é / para quem não é |
| 09 | Resultados | Galeria de antes e depois + disclaimer com a marcação de conteúdo técnico-científico |
| 10 | FAQ | 12 perguntas, **5 dedicadas a modalidade** |
| 11 | Inscrições | CTA final + quadro de informações práticas |
| — | Rodapé | Responsável técnica, aviso de conteúdo técnico-científico |
| — | Barra fixa inferior (mobile) | Ver modalidades + WhatsApp |

**Mudança de oferta em 18/08, a confirmar:** o cliente informou que o Observador **paga o
Módulo de Gestão à parte**. A página foi ajustada para Observador **R$ 10.900** com o módulo
opcional por R$ 1.999 — usando apenas números que já constavam no briefing, sem inventar
preço. Se o valor do Observador for outro, é uma linha no `index.html` e uma no schema.

**Pendência de link:** o crédito no rodapé aponta para `https://3ads.com.br`, que é um palpite.
Confirmar o domínio oficial da agência antes de publicar em campanha (há um comentário
`PENDÊNCIA` no HTML marcando o ponto).

**Regra de escrita:** a copy não usa travessão (—). Onde havia, a frase foi reescrita com
dois pontos, vírgula ou ponto final. Vale para qualquer edição futura.

**Nada do que o briefing pediu para não fazer está na página:** sem contador falso, sem
"vagas limitadas" sem número, sem promessa de resultado financeiro, sem três cards iguais
lado a lado, sem preço antes da explicação dos dois dias, e o nome da Dra. Ana Machado está
grafado de uma forma só.

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
  *20 vagas*). É o que sobra da serifada de alto contraste que o briefing pedia.

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

### Pendente: fotos dos 6 procedimentos

Cada cartão de módulo tem uma área de foto em 4:3 marcada como "FOTO · A RECEBER", aguardando
o registro de cada procedimento (glúteo, abdômen, lipedema, pernas, full body e o módulo de
gestão). O ícone e o texto já estão finalizados; basta trocar o bloco `.modulo__foto` por um
`<img>`.

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

Preencher `CONFIG.metaPixelId` e `CONFIG.ga4Id` liga tudo. O Pixel e o GA4 só são carregados
se o ID existir — página sem ID não faz requisição para eles.

Eventos separados por modalidade, como pede o briefing:
`clique_hands_on` · `clique_observador` · `clique_gestao_gestor` · `clique_gestao_medico` ·
`clique_whatsapp`, mais `ViewContent` ao entrar na seção de modalidades,
`InitiateCheckout` no clique com link de checkout, `scroll_depth` em 25/50/75/100%, e
`abriu_convite` / `liberou_galeria`.

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

### SEO

Title e description conforme o briefing, canonical, Open Graph, e **JSON-LD `EducationEvent`**
com data, local, professores e as quatro ofertas com preço.

---

## Estrutura da pasta

```
lp-full-body-experience/
├── index.html                    a página (versão da referência)
├── index-versaoantiga.html       primeira versão, editorial
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
cd "/Users/jpedrojunqueira/Desktop/Projetos/3ADS Geral/lp-full-body-experience" && python3 -m http.server 8080
```

## Publicar

O preview no GitHub Pages republica sozinho a cada push na `main`.

Para o domínio de campanha, enviar ao cPanel o conteúdo da pasta **exceto**
`_material-cliente/`, `README.md`, `.gitignore`, `.git/` e `index-versaoantiga.html`.

Desenvolvido por **3ADS**.
