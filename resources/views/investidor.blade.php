@extends('layouts.app')

@section('title', 'The Way — Planejamento financeiro com IA para você')

@section('meta_description', 'Agente de Planejamento Financeiro The Way: inteligência artificial aliada a mais de 20 anos de experiência em planejamento para sua vida e seus objetivos.')

@section('content')
<header class="sticky top-0 z-50 border-b border-tw-border/90 bg-tw-surface/95 backdrop-blur-md">
    <div class="mx-auto flex max-w-6xl items-center justify-between gap-3 px-5 py-5 lg:gap-4 lg:px-8">
        <a href="{{ route('home') }}" class="font-display wordmark shrink-0 text-sm uppercase text-tw-ink sm:text-base">
            The Way
        </a>

        <nav class="hidden min-w-0 flex-1 items-center justify-center gap-x-4 gap-y-1 px-2 text-sm font-medium text-tw-ink-muted xl:gap-x-6 xl:text-[0.9375rem] lg:flex">
            <a href="{{ route('home') }}" class="whitespace-nowrap transition hover:text-tw-accent">Início</a>
            <a href="#como-funciona" class="whitespace-nowrap transition hover:text-tw-ink">Como funciona</a>
            <a href="#plano" class="whitespace-nowrap transition hover:text-tw-ink">Plano</a>
            <a href="#interface-agente" class="whitespace-nowrap transition hover:text-tw-ink">Interface</a>
            <a href="#experiencia" class="whitespace-nowrap transition hover:text-tw-ink">Experiência</a>
            <a href="#contato" class="whitespace-nowrap transition hover:text-tw-ink">Contato</a>
        </nav>

        <div class="hidden shrink-0 items-center gap-2 sm:gap-3 lg:flex">
            <a href="{{ route('assessores') }}" class="whitespace-nowrap text-sm font-medium text-tw-ink-muted transition hover:text-tw-ink xl:text-[0.9375rem]">
                Versão assessores
            </a>
            <a href="#lista" class="whitespace-nowrap rounded-full bg-tw-accent px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-tw-accent-hover sm:px-5 xl:text-[0.9375rem]">
                Quero começar
            </a>
        </div>

        <button type="button" class="rounded-lg border border-tw-border p-2 lg:hidden" data-mobile-toggle="nav-inv-mobile" aria-label="Menu">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
    </div>
    <div id="nav-inv-mobile" class="hidden border-t border-tw-border bg-tw-surface px-5 py-4 lg:hidden">
        <nav class="flex flex-col gap-3 text-sm font-medium text-tw-ink-muted">
            <a href="{{ route('home') }}" class="py-1 hover:text-tw-accent">Início</a>
            <a href="#como-funciona" class="py-1 hover:text-tw-ink">Como funciona</a>
            <a href="#plano" class="py-1 hover:text-tw-ink">Plano</a>
            <a href="#interface-agente" class="py-1 hover:text-tw-ink">Interface</a>
            <a href="#experiencia" class="py-1 hover:text-tw-ink">Experiência</a>
            <a href="#contato" class="py-1 hover:text-tw-ink">Contato</a>
            <a href="{{ route('assessores') }}" class="py-1 font-semibold text-tw-accent">Sou assessor</a>
            <a href="#lista" class="py-2 font-semibold text-tw-accent">Quero começar</a>
        </nav>
    </div>
</header>

<main class="flex-1">
    <section class="hero-segura-bg grain relative overflow-hidden">
        <div class="relative mx-auto max-w-6xl px-5 pb-12 pt-14 sm:pt-20 lg:px-8 lg:pb-16 lg:pt-24">
            <p class="segura-eyebrow mb-0 text-center text-tw-gold lg:text-left">Para quem quer clareza com o dinheiro</p>

            <h1 class="font-display heading-hero mx-auto mt-8 max-w-4xl text-balance text-center text-[2rem] leading-[1.12] text-tw-ink sm:text-5xl sm:leading-[1.08] lg:mx-0 lg:text-left lg:text-[3rem] lg:leading-[1.06]">
                Planejamento financeiro com <span class="text-tw-accent">agente de IA</span>,<br class="hidden sm:block" />
                <span class="font-semibold text-tw-ink-muted">e mais de 20 anos de experiência por trás de cada resposta</span>
            </h1>

            <p class="mx-auto mt-8 max-w-2xl text-center text-lg leading-relaxed text-tw-ink-muted lg:mx-0 lg:text-left">
                O <strong class="font-semibold text-tw-ink">Agente de Planejamento Financeiro</strong> do The Way combina <strong class="font-semibold text-tw-ink">IA em uso extensivo</strong> com metodologia construída ao longo de <strong class="font-semibold text-tw-ink">mais de duas décadas</strong> em planejamento — para você organizar objetivos, prioridades e próximos passos com linguagem simples e sensível à sua realidade.
            </p>

            <div class="mt-10 flex flex-col items-center gap-4 sm:flex-row sm:justify-center lg:justify-start">
                <a href="#lista" class="inline-flex w-full items-center justify-center rounded-full bg-tw-accent px-10 py-4 text-base font-semibold text-white shadow-md shadow-tw-accent/25 transition hover:bg-tw-accent-hover sm:w-auto">
                    Quero falar sobre meu plano
                </a>
                <a href="#como-funciona" class="text-base font-semibold text-tw-accent underline-offset-4 hover:underline">
                    Ver como funciona
                </a>
            </div>

            <p class="segura-pillars mt-12 text-center lg:text-left">
                Objetivos<span class="mx-2 text-tw-border">·</span>Segurança<span class="mx-2 text-tw-border">·</span>Tranquilidade
            </p>
        </div>
    </section>

    <section id="experiencia" class="border-y border-tw-border bg-white py-20 sm:py-24">
        <div class="mx-auto max-w-6xl px-5 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-2 lg:items-center lg:gap-16">
                <div>
                    <p class="segura-eyebrow text-tw-gold mb-10 block sm:mb-12">Experiência que conta</p>
                    <h2 class="font-display heading-section text-3xl text-tw-ink sm:text-4xl sm:leading-[1.15]">
                        Mais de <strong class="text-tw-accent">20 anos</strong> em planejamento financeiro, agora ampliados pela IA
                    </h2>
                    <p class="mt-6 text-lg leading-relaxed text-tw-ink-muted">
                        A base do agente não é improviso: são décadas de encontros com famílias e investidores, definição de metas, trade-offs e prioridades. A inteligência artificial acelera análises, cenários e organização da informação — para você gastar menos tempo perdido e mais tempo decidindo com consciência.
                    </p>
                </div>
                <div class="rounded-3xl border border-tw-border/90 bg-tw-surface p-10 shadow-sm">
                    <ul class="space-y-6 text-sm leading-relaxed text-tw-ink-muted sm:text-base">
                        <li class="flex gap-4">
                            <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-tw-accent/15 text-sm font-bold text-tw-accent">1</span>
                            <span><strong class="text-tw-ink">Metodologia madura</strong> — rituais e perguntas que já se provaram no mundo real, não só em teoria.</span>
                        </li>
                        <li class="flex gap-4">
                            <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-tw-accent/15 text-sm font-bold text-tw-accent">2</span>
                            <span><strong class="text-tw-ink">IA em profundidade</strong> — modelagem, simulações e síntese contínua, sempre guiadas pelo olhar de planejamento.</span>
                        </li>
                        <li class="flex gap-4">
                            <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-tw-accent/15 text-sm font-bold text-tw-accent">3</span>
                            <span><strong class="text-tw-ink">Linguagem humana</strong> — explicações claras, sem jargão desnecessário, respeitando seu tempo.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="como-funciona" class="bg-tw-surface py-20 sm:py-24">
        <div class="mx-auto max-w-6xl px-5 lg:px-8">
            <p class="segura-eyebrow text-tw-gold mb-10 block sm:mb-12">Como funciona</p>
            <h2 class="font-display heading-section max-w-3xl text-3xl text-tw-ink sm:text-4xl sm:leading-[1.15]">
                Seu agente de planejamento, do retrato atual ao próximo passo
            </h2>

            <div class="mt-14 grid gap-8 md:grid-cols-3">
                <article class="flex h-full flex-col rounded-3xl border border-tw-border/90 bg-white p-10 shadow-sm">
                    <h3 class="font-display heading-card text-lg text-tw-ink sm:text-xl">Onde você está</h3>
                    <p class="mt-5 flex-1 text-sm leading-[1.65] text-tw-ink-muted">
                        Organização da sua situação — renda, despesas, dívida, reserva, investimentos e sonhos — com leitura estruturada pelo agente.
                    </p>
                </article>
                <article class="flex h-full flex-col rounded-3xl border border-tw-border/90 bg-white p-10 shadow-sm">
                    <h3 class="font-display heading-card text-lg text-tw-ink sm:text-xl">Para onde você quer ir</h3>
                    <p class="mt-5 flex-1 text-sm leading-[1.65] text-tw-ink-muted">
                        Objetivos com prazo e prioridade: aposentadoria, imóvel, educação, legado — com cenários gerados e comparados com apoio de IA.
                    </p>
                </article>
                <article class="flex h-full flex-col rounded-3xl border border-tw-border/90 bg-white p-10 shadow-sm">
                    <h3 class="font-display heading-card text-lg text-tw-ink sm:text-xl">O que fazer agora</h3>
                    <p class="mt-5 flex-1 text-sm leading-[1.65] text-tw-ink-muted">
                        Próximos passos concretos e ordenados, alinhados à sua tolerância a risco e à sua vida — sem promessas vazias.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section id="plano" class="border-y border-tw-border bg-white py-20 sm:py-24">
        <div class="mx-auto max-w-6xl px-5 lg:px-8">
            <div class="mx-auto max-w-xl text-center">
                <p class="segura-eyebrow text-tw-gold">Plano individual</p>
                <h2 class="font-display heading-section mt-5 text-3xl text-tw-ink sm:text-4xl sm:leading-[1.15]">
                    Acesso completo ao Agente de Planejamento
                </h2>
                <p class="mt-4 text-lg leading-relaxed text-tw-ink-muted">
                    Tudo o que você precisa para organizar metas, cenários e próximos passos — no seu ritmo, com IA e metodologia de assessoria.
                </p>
            </div>

            <div class="mx-auto mt-12 max-w-lg">
                <article class="rounded-3xl border border-tw-border/90 bg-tw-surface p-10 shadow-sm sm:p-12">
                    <div class="flex flex-col items-center border-b border-tw-border/80 pb-8 text-center">
                        <p class="text-sm font-semibold uppercase tracking-wide text-tw-ink-muted">Mensal</p>
                        <p class="font-display mt-2 flex items-baseline justify-center gap-1 text-tw-ink">
                            <span class="text-2xl font-semibold text-tw-ink-muted">R$</span>
                            <span class="text-5xl font-extrabold tracking-tight text-tw-accent sm:text-6xl">199,99</span>
                        </p>
                        <p class="mt-1 text-sm text-tw-ink-muted">por mês, cobrança recorrente</p>
                    </div>
                    <ul class="mt-8 space-y-4 text-left text-sm leading-relaxed text-tw-ink-muted sm:text-base">
                        <li class="flex gap-3">
                            <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-tw-accent/15 text-tw-accent" aria-hidden="true">
                                <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            </span>
                            <span><strong class="font-semibold text-tw-ink">Agente de Planejamento Financeiro</strong> — conversas, síntese e organização da sua jornada.</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-tw-accent/15 text-tw-accent" aria-hidden="true">
                                <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            </span>
                            <span><strong class="font-semibold text-tw-ink">Simulações e painéis</strong> — aposentadoria, sucessório, gestão financeira e ativos.</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-tw-accent/15 text-tw-accent" aria-hidden="true">
                                <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            </span>
                            <span><strong class="font-semibold text-tw-ink">Atualizações</strong> — melhorias contínuas na experiência e nos modelos.</span>
                        </li>
                    </ul>
                    <div class="mt-10 flex flex-col gap-3">
                        <a href="#lista" class="inline-flex w-full items-center justify-center rounded-full bg-tw-accent px-8 py-4 text-base font-semibold text-white shadow-md shadow-tw-accent/25 transition hover:bg-tw-accent-hover">
                            Quero começar por R$ 199,99/mês
                        </a>
                        <p class="text-center text-xs leading-relaxed text-tw-ink-muted">
                            Valores e condições comerciais podem ser confirmados no momento da contratação. Cancele quando quiser, conforme política vigente.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section id="interface-agente" class="border-y border-tw-border bg-tw-surface-2 py-20 sm:py-24">
        <div class="mx-auto max-w-6xl px-5 lg:px-8">
            <p class="segura-eyebrow text-tw-gold mb-10 block sm:mb-12">Na prática</p>
            <h2 class="font-display heading-section max-w-3xl text-3xl text-tw-ink sm:text-4xl sm:leading-[1.15]">
                É assim que o <strong class="text-tw-accent">Agente de Planejamento</strong> organiza sua vida financeira na tela
            </h2>
            <p class="mt-6 max-w-2xl text-lg leading-relaxed text-tw-ink-muted">
                Trechos reais da plataforma The Way: visão geral, <strong class="font-semibold text-tw-ink">simulação de aposentadoria</strong>, <strong class="font-semibold text-tw-ink">planejamento sucessório</strong>, gestão financeira, ativos e proteção — o mesmo raciocínio de planejamento que você lê no texto, em painéis claros e navegação por jornada.
            </p>

            @php
                $telasAgente = [
                    [
                        'imagem' => 'img/planejamento-agente/agente-04.png',
                        'titulo' => 'Visão geral',
                        'texto' => 'Mapa da jornada, metas como aposentadoria, eventos de liquidez, capacidade de aporte e patrimônio — com o botão “Planejamento IA” sempre à mão.',
                    ],
                    [
                        'imagem' => 'img/planejamento-agente/agente-simulacao-aposentadoria.png',
                        'titulo' => 'Simulação de aposentadoria',
                        'texto' => 'Ajuste taxa de retorno, aporte, renda alvo e idade — com travas para calcular o que falta. Resumo estratégico, GAP, curva de patrimônio e aporte necessário para a meta, com visual claro do acúmulo e da desacumulação.',
                    ],
                    [
                        'imagem' => 'img/planejamento-agente/agente-planejamento-sucessorio.png',
                        'titulo' => 'Planejamento sucessório',
                        'texto' => 'Impacto estimado da sucessão sobre o patrimônio, alertas claros, visualização por tipo de bem e orientações práticas — seguro de vida, previdência e status do plano no mesmo painel da aba Sucessório.',
                    ],
                    [
                        'imagem' => 'img/planejamento-agente/agente-03.png',
                        'titulo' => 'Gestão financeira',
                        'texto' => 'Receitas, despesas, distribuição por natureza e camadas de gasto, com indicadores de poupança, cobertura e endividamento.',
                    ],
                    [
                        'imagem' => 'img/planejamento-agente/agente-02.png',
                        'titulo' => 'Gestão de ativos',
                        'texto' => 'Patrimônio líquido, classificação por tipo e por função, e matriz que liga cada valor a renda, proteção, crescimento ou consumo.',
                    ],
                    [
                        'imagem' => 'img/planejamento-agente/agente-01.png',
                        'titulo' => 'Gestão de risco',
                        'texto' => 'Score de proteção, coberturas, checklist de seguros e apólices — para encaixar proteção patrimonial no plano.',
                    ],
                ];
                $passosPlano = [
                    ['titulo' => 'Conversa e objetivos', 'texto' => 'Você compartilha prioridades, prazos e o que “bom” significa na sua vida — o agente organiza em metas claras.', 'icone' => 'conversa'],
                    ['titulo' => 'Retrato financeiro', 'texto' => 'Renda, despesas, dívidas, reserva, investimentos e proteção entram em painéis integrados, sem planilhas soltas.', 'icone' => 'retrato'],
                    ['titulo' => 'Simulações e cenários', 'texto' => 'Comparar caminhos, trade-offs, capacidade de aporte e impacto no longo prazo — tudo explicado em linguagem direta, sem fórmulas opacas.', 'icone' => 'cenarios'],
                    ['titulo' => 'Plano e próximos passos', 'texto' => 'Lista ordenada do que fazer agora — alinhada à sua tolerância a risco e ao seu calendário real.', 'icone' => 'plano'],
                    ['titulo' => 'Revisão contínua', 'texto' => 'A vida muda; o plano acompanha com checkpoints e ajustes, sempre com o mesmo fio de planejamento.', 'icone' => 'revisao'],
                ];
            @endphp

            <div class="mt-14 grid gap-8 lg:grid-cols-2">
                @foreach ($telasAgente as $idx => $tela)
                    @php $srcTela = asset($tela['imagem']); @endphp
                    <figure class="group/figure flex h-full flex-col overflow-hidden rounded-3xl border border-tw-border/90 bg-white shadow-sm transition hover:shadow-md">
                        <div class="inv-interface-capture-frame relative w-full shrink-0 overflow-hidden bg-tw-surface/50">
                            <button
                                type="button"
                                class="absolute inset-0 block cursor-zoom-in border-0 bg-transparent p-0 text-left focus:outline-none focus-visible:ring-2 focus-visible:ring-tw-accent focus-visible:ring-offset-2 focus-visible:ring-offset-tw-surface/50"
                                data-inv-lightbox-open
                                data-src="{{ $srcTela }}"
                                data-alt="{{ $tela['titulo'] }} — interface do Agente de Planejamento The Way"
                                data-title="{{ $tela['titulo'] }}"
                                aria-label="Ampliar imagem: {{ $tela['titulo'] }}"
                            >
                                <img
                                    src="{{ $srcTela }}"
                                    alt="{{ $tela['titulo'] }} — captura da plataforma The Way"
                                    class="h-full w-full object-contain object-top transition duration-300 group-hover/figure:scale-[1.015]"
                                    width="1200"
                                    height="750"
                                    @if ($idx > 0) loading="lazy" decoding="async" @endif
                                />
                                <span class="pointer-events-none absolute inset-x-0 bottom-0 flex items-center justify-center gap-2 bg-gradient-to-t from-tw-ink/70 via-tw-ink/35 to-transparent px-4 pb-3 pt-14 text-[11px] font-semibold uppercase tracking-[0.12em] text-white sm:pb-3.5 sm:pt-16 sm:text-xs" aria-hidden="true">
                                    <svg class="h-3.5 w-3.5 shrink-0 opacity-95 sm:h-4 sm:w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/></svg>
                                    Ampliar
                                </span>
                            </button>
                        </div>
                        <figcaption class="flex flex-1 flex-col p-8 sm:p-10">
                            <span class="font-display heading-card text-lg text-tw-ink sm:text-xl">{{ $tela['titulo'] }}</span>
                            <p class="mt-5 flex-1 text-sm leading-[1.65] text-tw-ink-muted sm:text-base">{{ $tela['texto'] }}</p>
                        </figcaption>
                    </figure>
                @endforeach
            </div>

            <div class="inv-passos-wrap mt-20 pt-14 sm:pt-20">
                <p class="segura-eyebrow text-tw-gold mb-10 block sm:mb-12">Passo a passo</p>
                <h3 class="font-display heading-section max-w-3xl text-3xl text-tw-ink sm:text-4xl sm:leading-[1.15]">
                    Do primeiro contato ao plano em uso
                </h3>
                <p class="mt-6 max-w-3xl text-lg leading-relaxed text-tw-ink-muted">
                    Cinco etapas para você enxergar o processo com transparência — sem jargão e no ritmo da assessoria. Os ícones ajudam a localizar cada fase num relance.
                </p>
                <div class="mt-8 flex flex-wrap items-center gap-3">
                    <span class="inline-flex items-center rounded-full bg-tw-accent/12 px-3 py-1.5 text-[0.68rem] font-bold uppercase tracking-[0.18em] text-tw-accent ring-1 ring-tw-accent/20">
                        5 etapas
                    </span>
                    <span class="inline-flex items-center rounded-full bg-tw-gold/15 px-3 py-1.5 text-[0.68rem] font-bold uppercase tracking-[0.18em] text-tw-gold ring-1 ring-tw-gold/25">
                        ordem fixa
                    </span>
                </div>

                <ol class="mx-auto mt-12 max-w-4xl list-none space-y-8 sm:mt-14 lg:mx-0">
                        @foreach ($passosPlano as $i => $passo)
                            <li>
                                <article class="inv-passo-card group flex h-full flex-col overflow-hidden rounded-3xl border border-tw-border/90 bg-white p-8 shadow-sm transition hover:shadow-md sm:p-10">
                                    <div class="relative flex flex-col gap-6 sm:flex-row sm:items-start sm:gap-8">
                                        <div class="flex shrink-0 items-center gap-4 sm:flex-col sm:items-stretch sm:gap-4">
                                            <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-tw-accent/15 text-tw-accent ring-1 ring-tw-accent/20">
                                                @switch($passo['icone'])
                                                    @case('conversa')
                                                        <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                                                        @break
                                                    @case('retrato')
                                                        <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
                                                        @break
                                                    @case('cenarios')
                                                        <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                                                        @break
                                                    @case('plano')
                                                        <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                                                        @break
                                                    @case('revisao')
                                                        <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                                                        @break
                                                    @default
                                                        <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M12 6v6l4 2"/></svg>
                                                @endswitch
                                            </div>
                                            <span class="hidden text-center font-display text-sm font-extrabold tabular-nums text-tw-accent/85 sm:block">
                                                {{ str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) }}
                                            </span>
                                            <span class="font-display text-2xl font-extrabold tabular-nums text-tw-accent sm:hidden" aria-hidden="true">{{ $i + 1 }}</span>
                                        </div>

                                        <div class="min-w-0 flex-1">
                                            <h4 class="font-display heading-card text-lg text-tw-ink sm:text-xl">
                                                Etapa {{ $i + 1 }}: {{ $passo['titulo'] }}
                                            </h4>
                                            <p class="mt-5 text-sm leading-[1.65] text-tw-ink-muted sm:text-base">
                                                {{ $passo['texto'] }}
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </li>
                        @endforeach
                    </ol>
            </div>

            <p class="mt-12 text-center text-xs text-tw-ink-muted sm:text-left">
                Interfaces ilustrativas da solução; dados exibidos são exemplo de uso da plataforma.
            </p>
        </div>
    </section>

    <section id="lista" class="bg-[#12201e] py-20 text-white sm:py-24">
        <div class="mx-auto max-w-6xl px-5 lg:px-8">
            <div class="flex flex-col gap-10 lg:flex-row lg:items-center lg:justify-between lg:gap-16">
                <div class="max-w-xl">
                    <h2 class="font-display text-2xl font-bold leading-tight sm:text-3xl lg:text-[2rem]">
                        Dê o primeiro passo no seu plano
                    </h2>
                    <p class="mt-5 text-base leading-relaxed text-white/75">
                        Deixe seu e-mail para entrarmos em contato e apresentar o Agente de Planejamento Financeiro no ritmo certo para você.
                    </p>
                </div>
                <div class="w-full max-w-md rounded-2xl border border-white/15 bg-white/[0.06] p-8 backdrop-blur-sm">
                    <p class="text-base font-semibold text-white">Lista de interesse</p>
                    <p class="mt-2 text-sm text-white/55">Para pessoa física — retornamos com próximos passos.</p>
                    <form class="mt-6 space-y-3" action="#" method="get">
                        <input type="email" name="email" required placeholder="seu@email.com" class="w-full rounded-xl border border-white/20 bg-white/10 px-4 py-3.5 text-sm text-white placeholder:text-white/35 focus:border-tw-accent focus:outline-none focus:ring-1 focus:ring-tw-accent" />
                        <button type="submit" class="w-full rounded-full bg-tw-accent py-3.5 text-sm font-semibold text-white transition hover:bg-tw-accent-hover">
                            Quero ser avisado
                        </button>
                    </form>
                    <p class="mt-4 text-xs text-white/40">Formulário demonstrativo até integração completa.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contato" class="border-t border-tw-border bg-white py-24 sm:py-28">
        <div class="mx-auto max-w-6xl px-5 lg:px-8">
            <div class="grid gap-16 lg:grid-cols-2 lg:gap-24">
                <div>
                    <p class="text-sm font-semibold lowercase tracking-wide text-tw-accent">fale com a gente</p>
                    <h2 class="font-display heading-section mt-3 text-4xl text-tw-ink sm:text-5xl sm:leading-[1.12]">
                        Dúvidas ou quer conversar com alguém?
                    </h2>
                    <p class="mt-6 max-w-md text-lg text-tw-ink-muted">
                        Conte um pouco da sua situação — direcionamos para o time que cuida do planejamento para investidores.
                    </p>
                    <p class="mt-8 text-sm text-tw-ink-muted">
                        Também atendemos por <a href="{{ route('assessores') }}" class="font-medium text-tw-accent hover:underline">assessores parceiros</a>.
                    </p>
                </div>

                <div class="rounded-3xl border border-tw-border/90 bg-tw-surface p-8 sm:p-10 shadow-sm">
                    @if (session('contact_ok'))
                        <div class="rounded-xl bg-tw-accent/10 px-4 py-3 text-sm font-medium text-tw-accent">
                            Mensagem enviada. Em breve retornamos.
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-4 rounded-xl bg-red-50 px-4 py-3 text-sm text-red-800">
                            Verifique os campos e tente novamente.
                        </div>
                    @endif

                    <form class="space-y-5" action="{{ route('contact.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="perfil" value="investidor" />
                        <div>
                            <label for="inv-nome" class="block text-xs font-bold uppercase tracking-wide text-tw-ink">Nome</label>
                            <input id="inv-nome" name="nome" value="{{ old('nome') }}" required class="mt-2 w-full rounded-xl border border-tw-border bg-white px-4 py-3.5 text-sm focus:border-tw-accent focus:outline-none focus:ring-1 focus:ring-tw-accent" />
                        </div>
                        <div>
                            <label for="inv-email" class="block text-xs font-bold uppercase tracking-wide text-tw-ink">E-mail</label>
                            <input id="inv-email" name="email" type="email" value="{{ old('email') }}" required class="mt-2 w-full rounded-xl border border-tw-border bg-white px-4 py-3.5 text-sm focus:border-tw-accent focus:outline-none focus:ring-1 focus:ring-tw-accent" />
                        </div>
                        <div>
                            <label for="inv-mensagem" class="block text-xs font-bold uppercase tracking-wide text-tw-ink">Mensagem</label>
                            <textarea id="inv-mensagem" name="mensagem" rows="4" required class="mt-2 w-full rounded-xl border border-tw-border bg-white px-4 py-3.5 text-sm focus:border-tw-accent focus:outline-none focus:ring-1 focus:ring-tw-accent">{{ old('mensagem') }}</textarea>
                        </div>
                        <button type="submit" class="w-full rounded-full bg-tw-ink py-4 text-sm font-semibold text-white transition hover:bg-tw-ink/90">
                            Enviar mensagem
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="border-t border-tw-border bg-tw-surface py-14">
    <div class="mx-auto max-w-6xl px-5 lg:px-8">
        <div class="flex flex-col gap-10 lg:flex-row lg:items-start lg:justify-between">
            <div>
                <p class="font-display wordmark text-xs uppercase text-tw-ink sm:text-sm">The Way</p>
                <p class="mt-3 max-w-sm text-sm text-tw-ink-muted">Planejamento financeiro com agente de IA e décadas de experiência — para você.</p>
            </div>
            <div class="flex flex-wrap gap-x-10 gap-y-3 text-sm text-tw-ink-muted">
                <a href="{{ route('home') }}" class="hover:text-tw-accent">Início</a>
                <a href="#como-funciona" class="hover:text-tw-ink">Como funciona</a>
                <a href="#plano" class="hover:text-tw-ink">Plano</a>
                <a href="#interface-agente" class="hover:text-tw-ink">Interface</a>
                <a href="#experiencia" class="hover:text-tw-ink">Experiência</a>
                <a href="#contato" class="hover:text-tw-ink">Contato</a>
                <a href="{{ route('assessores') }}" class="hover:text-tw-accent">Para assessores</a>
            </div>
        </div>
        <p class="mt-12 border-t border-tw-border/80 pt-8 text-center text-xs text-tw-ink-muted sm:text-left">
            © {{ date('Y') }} The Way. Conteúdo educativo — não constitui recomendação de investimento.
        </p>
    </div>
</footer>

    <div
        id="inv-interface-lightbox"
        class="fixed inset-0 z-[200] flex flex-col items-center justify-center overflow-y-auto bg-tw-ink/80 p-4 backdrop-blur-[3px] sm:p-8"
        style="display: none;"
        role="dialog"
        aria-modal="true"
        aria-hidden="true"
        aria-labelledby="inv-interface-lightbox-heading"
        data-state="closed"
    >
        <button
            type="button"
            data-inv-lightbox-backdrop
            tabindex="-1"
            class="absolute inset-0 cursor-default border-0 bg-transparent p-0"
            aria-label="Fechar ampliação"
        ></button>
        <div class="relative z-[1] my-auto w-full max-w-6xl">
            <div class="mb-3 flex justify-end sm:absolute sm:-top-12 sm:right-0 sm:mb-0">
                <button
                    type="button"
                    data-inv-lightbox-close
                    class="flex items-center gap-2 rounded-full bg-white px-4 py-2.5 text-sm font-semibold text-tw-ink shadow-md transition hover:bg-tw-surface-2 focus:outline-none focus-visible:ring-2 focus-visible:ring-white"
                >
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    Fechar
                </button>
            </div>
            <div class="max-h-[min(88vh,1200px)] overflow-auto rounded-2xl bg-white shadow-2xl">
                <img
                    id="inv-interface-lightbox-img"
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    alt=""
                    class="mx-auto block h-auto w-full max-w-full object-contain object-top"
                    width="1600"
                    height="1200"
                />
            </div>
            <p id="inv-interface-lightbox-heading" class="mt-4 text-center text-sm font-semibold text-white drop-shadow-sm"></p>
        </div>
    </div>

<script>
(function () {
    function initInvLightbox() {
        var root = document.getElementById('inv-interface-lightbox');
        var imgEl = document.getElementById('inv-interface-lightbox-img');
        var titleEl = document.getElementById('inv-interface-lightbox-heading');
        if (!root || !imgEl || !titleEl) return;

        var closeBtn = root.querySelector('[data-inv-lightbox-close]');
        var backdrop = root.querySelector('[data-inv-lightbox-backdrop]');
        var lastFocus = null;

        function isOpen() {
            return root.getAttribute('data-state') === 'open';
        }

        function openModal(src, alt, title) {
            if (!src) return;
            lastFocus = document.activeElement;
            imgEl.src = src;
            imgEl.alt = alt || '';
            titleEl.textContent = title || '';
            root.style.display = 'flex';
            root.setAttribute('data-state', 'open');
            root.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
            if (closeBtn) closeBtn.focus();
        }

        function closeModal() {
            if (!isOpen()) return;
            root.style.display = 'none';
            root.setAttribute('data-state', 'closed');
            root.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
            imgEl.src = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';
            imgEl.alt = '';
            titleEl.textContent = '';
            if (lastFocus && typeof lastFocus.focus === 'function') {
                try {
                    lastFocus.focus();
                } catch (e) {}
            }
            lastFocus = null;
        }

        document.addEventListener('click', function (e) {
            var t = e.target;
            if (!t || !t.closest) return;
            var openBtn = t.closest('[data-inv-lightbox-open]');
            if (openBtn) {
                e.preventDefault();
                openModal(
                    openBtn.getAttribute('data-src') || '',
                    openBtn.getAttribute('data-alt') || '',
                    openBtn.getAttribute('data-title') || ''
                );
            }
        });

        if (closeBtn) {
            closeBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                closeModal();
            });
        }
        if (backdrop) {
            backdrop.addEventListener('click', closeModal);
        }

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && isOpen()) closeModal();
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initInvLightbox);
    } else {
        initInvLightbox();
    }
})();
</script>
@endsection
