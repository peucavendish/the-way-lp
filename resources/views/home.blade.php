@extends('layouts.app')

@section('title', 'The Way — Carteira, performance e IA para assessores')

@section('meta_description', 'The Way para assessores: agentes de IA, hub de ferramentas e dashboards com dados do assessor, clientes e comerciais.')

@section('content')
<header class="sticky top-0 z-50 border-b border-tw-border/90 bg-tw-surface/95 backdrop-blur-md">
    <div class="mx-auto flex max-w-6xl items-center justify-between gap-4 px-5 py-5 lg:px-8">
        <a href="{{ route('home') }}" class="font-display wordmark text-sm uppercase text-tw-ink sm:text-base">
            The Way
        </a>

        <nav class="hidden items-center gap-6 text-[0.9375rem] font-medium text-tw-ink-muted lg:gap-8 md:flex">
            <a href="{{ route('home') }}" class="transition hover:text-tw-accent">Início</a>
            <a href="{{ route('investidor') }}" class="transition hover:text-tw-accent">Para você</a>
            <a href="#hub" class="transition hover:text-tw-ink">Hub</a>
            <a href="#solucoes" class="transition hover:text-tw-ink">Capacidades</a>
            <a href="#historias" class="transition hover:text-tw-ink">Histórias</a>
            <a href="#contato" class="transition hover:text-tw-ink">Contato</a>
        </nav>

        <div class="hidden items-center gap-3 md:flex">
            <a href="#contato" class="text-[0.9375rem] font-semibold text-tw-ink transition hover:text-tw-accent">
                Falar conosco
            </a>
            <a href="#lista" class="rounded-full bg-tw-accent px-5 py-2.5 text-[0.9375rem] font-semibold text-white shadow-sm transition hover:bg-tw-accent-hover">
                Quero experimentar
            </a>
        </div>

        <button type="button" class="rounded-lg border border-tw-border p-2 md:hidden" data-mobile-toggle="nav-mobile" aria-label="Menu">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
    </div>
    <div id="nav-mobile" class="hidden border-t border-tw-border bg-tw-surface px-5 py-4 md:hidden">
        <nav class="flex flex-col gap-3 text-sm font-medium text-tw-ink-muted">
            <a href="{{ route('home') }}" class="py-1 hover:text-tw-accent">Início</a>
            <a href="{{ route('investidor') }}" class="py-1 hover:text-tw-accent">Para você</a>
            <a href="#hub" class="py-1 hover:text-tw-ink">O hub</a>
            <a href="#solucoes" class="py-1 hover:text-tw-ink">Capacidades</a>
            <a href="#historias" class="py-1 hover:text-tw-ink">Histórias</a>
            <a href="#contato" class="py-1 hover:text-tw-ink">Falar conosco</a>
            <a href="#lista" class="py-2 font-semibold text-tw-accent">Entrar na lista</a>
        </nav>
    </div>
</header>

<main class="flex-1">
    {{-- Hero (ritmo tipo Segura: eyebrow → headline duas linhas → texto → CTA → pilares) --}}
    <section class="hero-segura-bg grain relative overflow-hidden">
        <div class="relative mx-auto max-w-6xl px-5 pb-8 pt-14 sm:pt-20 lg:px-8 lg:pb-12 lg:pt-24">
            <p class="segura-eyebrow text-center lg:text-left">
                Tecnologia em um novo modelo
            </p>

            <h1 class="font-display heading-hero mx-auto mt-8 max-w-4xl text-balance text-center text-[2rem] leading-[1.12] text-tw-ink sm:text-5xl sm:leading-[1.08] lg:mx-0 lg:max-w-4xl lg:text-left lg:text-[3.25rem] lg:leading-[1.06]">
                Assessorar exige profundidade,<br class="hidden sm:block" />
                <span class="font-semibold text-tw-ink-muted">mas seu tempo precisa ser do cliente</span>
            </h1>

            <p class="mx-auto mt-8 max-w-2xl text-center text-lg leading-relaxed text-tw-ink-muted lg:mx-0 lg:text-left">
                O The Way reúne <strong class="font-semibold text-tw-ink">Agente de Planejamento Financeiro</strong>, <strong class="font-semibold text-tw-ink">Agente de Dados</strong>, <strong class="font-semibold text-tw-ink">Agente</strong>, <strong class="font-semibold text-tw-ink">Hub de Ferramentas e Materiais</strong> e <strong class="font-semibold text-tw-ink">dashboards</strong> com dados do assessor, dos clientes e comerciais — em um só lugar para a assessoria.
            </p>

            <div class="mt-10 flex flex-col items-center gap-4 sm:flex-row sm:justify-center lg:justify-start">
                <a href="#lista" class="inline-flex w-full items-center justify-center rounded-full bg-tw-accent px-10 py-4 text-base font-semibold text-white shadow-md shadow-tw-accent/25 transition hover:bg-tw-accent-hover sm:w-auto">
                    Quero experimentar!
                </a>
                <a href="#solucoes" class="text-base font-semibold text-tw-accent underline-offset-4 hover:underline">
                    Ver capacidades
                </a>
            </div>

            <div class="mt-12 text-center lg:text-left">
                <p class="segura-pillars">
                    Agentes<span class="mx-2 text-tw-border">·</span>Hub &amp; materiais<span class="mx-2 text-tw-border">·</span>Dashboards
                </p>
            </div>
        </div>

        {{-- Produto em destaque (como showcase abaixo do fold na Segura) --}}
        <div class="relative mx-auto max-w-6xl px-5 pb-20 lg:px-8 lg:pb-28">
            <div class="pointer-events-none absolute inset-x-8 -bottom-6 top-8 rounded-[2rem] bg-tw-accent/[0.07] blur-3xl lg:inset-x-16"></div>
            <figure class="relative overflow-hidden rounded-[1.25rem] border border-tw-border/90 bg-white shadow-[0_12px_48px_-12px_rgba(20,24,25,0.14)]">
                <img
                    src="{{ asset('The_Way_Home.png') }}"
                    width="1919"
                    height="1080"
                    class="h-auto w-full object-cover object-top"
                    alt="The Way: dashboards, indicadores comerciais, agentes de dados e planejamento no hub do assessor."
                    loading="eager"
                    fetchpriority="high"
                />
            </figure>
        </div>
    </section>

    {{-- Prazer somos --}}
    <section id="hub" class="border-y border-tw-border bg-white py-24 sm:py-28">
        <div class="mx-auto max-w-6xl px-5 lg:px-8">
            <p class="segura-eyebrow text-tw-gold">Prazer, somos o The Way</p>
            <h2 class="font-display heading-section mt-5 max-w-3xl text-3xl text-tw-ink sm:text-4xl sm:leading-[1.18]">
                Redefinimos <strong class="font-bold text-tw-accent">eficiência</strong> e <strong class="font-bold text-tw-accent">clareza</strong> com tecnologia e IA aplicadas ao assessor
            </h2>
            <p class="mt-8 max-w-2xl text-lg leading-relaxed text-tw-ink-muted">
                Disponíveis na plataforma: três frentes de <strong class="font-semibold text-tw-ink">agentes de IA</strong>, o <strong class="font-semibold text-tw-ink">hub de ferramentas e materiais</strong> e <strong class="font-semibold text-tw-ink">dashboards</strong> que cruzam visão do assessor, dos clientes e dados comerciais.
            </p>

            <div id="solucoes" class="mt-16 space-y-20 lg:mt-20 lg:space-y-24">
                <div>
                    <p class="segura-eyebrow text-tw-gold mb-10 block sm:mb-12">Agentes de IA</p>
                    <div class="grid grid-cols-1 items-stretch gap-8 lg:grid-cols-3 lg:gap-8">
                        <article id="agente-planejamento" class="group flex h-full min-h-0 flex-col rounded-3xl border border-tw-border/90 bg-tw-surface p-10 shadow-sm transition duration-300 hover:-translate-y-0.5 hover:border-tw-accent/25 hover:shadow-md sm:p-11">
                            <div class="mb-7 flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-tw-accent/10 text-tw-accent">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                            </div>
                            <h3 class="font-display heading-card text-balance text-lg leading-snug text-tw-ink sm:text-xl sm:leading-tight">Agente de Planejamento Financeiro</h3>
                            <p class="mt-5 flex-1 text-sm leading-[1.65] text-tw-ink-muted sm:text-[0.9375rem]">
                                Apoio a cenários, objetivos e encaixe da carteira ao plano do cliente — com linguagem de assessoria e foco em clareza para a conversa.
                            </p>
                            <span class="mt-auto inline-flex items-center pt-9 text-sm font-semibold text-tw-accent group-hover:underline">Saiba mais</span>
                        </article>
                        <article id="agente-dados" class="group flex h-full min-h-0 flex-col rounded-3xl border border-tw-border/90 bg-tw-surface p-10 shadow-sm transition duration-300 hover:-translate-y-0.5 hover:border-tw-accent/25 hover:shadow-md sm:p-11">
                            <div class="mb-7 flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-tw-accent/10 text-tw-accent">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4-8-4s-8 1.79-8 4m16 0v10"/></svg>
                            </div>
                            <h3 class="font-display heading-card text-balance text-lg leading-snug text-tw-ink sm:text-xl sm:leading-tight">Agente de Dados</h3>
                            <p class="mt-5 flex-1 text-sm leading-[1.65] text-tw-ink-muted sm:text-[0.9375rem]">
                                Pergunte, filtre e interprete informações como captação, churn, carteira de clientes e indicadores — respostas guiadas pelos seus dados.
                            </p>
                            <span class="mt-auto inline-flex items-center pt-9 text-sm font-semibold text-tw-accent group-hover:underline">Saiba mais</span>
                        </article>
                        <article id="agente" class="group flex h-full min-h-0 flex-col rounded-3xl border border-tw-border/90 bg-tw-surface p-10 shadow-sm transition duration-300 hover:-translate-y-0.5 hover:border-tw-accent/25 hover:shadow-md sm:p-11">
                            <div class="mb-7 flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-tw-accent/10 text-tw-accent">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-4 4v-4z"/></svg>
                            </div>
                            <h3 class="font-display heading-card text-balance text-lg leading-snug text-tw-ink sm:text-xl sm:leading-tight">Agente</h3>
                            <p class="mt-5 flex-1 text-sm leading-[1.65] text-tw-ink-muted sm:text-[0.9375rem]">
                                Assistente para rotina da assessoria: dúvidas rápidas, organização de próximos passos e apoio antes das reuniões com o investidor.
                            </p>
                            <span class="mt-auto inline-flex items-center pt-9 text-sm font-semibold text-tw-accent group-hover:underline">Saiba mais</span>
                        </article>
                    </div>
                </div>

                <div>
                    <p class="segura-eyebrow text-tw-gold mb-10 block sm:mb-12">Hub e painéis</p>
                    <div class="grid grid-cols-1 items-stretch gap-8 md:grid-cols-2 md:gap-8">
                        <article id="hub-materiais" class="group flex h-full min-h-0 flex-col rounded-3xl border border-tw-border/90 bg-tw-surface p-10 shadow-sm transition duration-300 hover:-translate-y-0.5 hover:border-tw-accent/25 hover:shadow-md sm:p-11">
                            <div class="mb-7 flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-tw-accent/10 text-tw-accent">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/></svg>
                            </div>
                            <h3 class="font-display heading-card text-balance text-lg leading-snug text-tw-ink sm:text-xl sm:leading-tight">Hub de Ferramentas e Materiais</h3>
                            <p class="mt-5 flex-1 text-sm leading-[1.65] text-tw-ink-muted sm:text-[0.9375rem]">
                                Central de recursos, modelos e ferramentas que aceleram o dia a dia — tudo acessível no mesmo ecossistema do assessor.
                            </p>
                            <span class="mt-auto inline-flex items-center pt-9 text-sm font-semibold text-tw-accent group-hover:underline">Saiba mais</span>
                        </article>
                        <article id="dashboards" class="group flex h-full min-h-0 flex-col rounded-3xl border border-tw-border/90 bg-tw-surface p-10 shadow-sm transition duration-300 hover:-translate-y-0.5 hover:border-tw-accent/25 hover:shadow-md sm:p-11">
                            <div class="mb-7 flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-tw-accent/10 text-tw-accent">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/></svg>
                            </div>
                            <h3 class="font-display heading-card text-balance text-lg leading-snug text-tw-ink sm:text-xl sm:leading-tight">Dashboards</h3>
                            <p class="mt-5 flex-1 text-sm leading-[1.65] text-tw-ink-muted sm:text-[0.9375rem]">
                                Visualizações com dados do <strong class="font-medium text-tw-ink">assessor</strong>, dos <strong class="font-medium text-tw-ink">clientes</strong> e <strong class="font-medium text-tw-ink">comerciais</strong> — KPIs e contexto para decisão e relacionamento.
                            </p>
                            <span class="mt-auto inline-flex items-center pt-9 text-sm font-semibold text-tw-accent group-hover:underline">Saiba mais</span>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Faixa confiança / parceria (eco “Parceria com Seguradoras”) --}}
    <section class="border-y border-tw-border bg-tw-surface-2 py-10">
        <div class="mx-auto max-w-6xl px-5 text-center lg:px-8">
            <p class="text-sm font-medium text-tw-ink-muted">
                Pensado para <span class="text-tw-ink">assessores</span>, <span class="text-tw-ink">mesas</span> e operações que precisam de <span class="text-tw-ink">dados confiáveis</span> e IA com governança.
            </p>
        </div>
    </section>

    {{-- Lista (eco “Gratuito para corretores” — faixa escura + formulário) --}}
    <section id="lista" class="bg-[#12201e] py-20 text-white sm:py-24">
        <div class="mx-auto max-w-6xl px-5 lg:px-8">
            <div class="flex flex-col gap-12 lg:flex-row lg:items-start lg:justify-between lg:gap-16">
                <div class="max-w-xl">
                    <h2 class="font-display text-2xl font-bold leading-tight text-white sm:text-3xl lg:text-[2rem]">
                        Feito para quem vive de confiança
                    </h2>
                    <p class="mt-5 text-base leading-relaxed text-white/75">
                        Agentes de planejamento, de dados e assistente, hub de ferramentas e dashboards do assessor, dos clientes e comerciais — para você focar no relacionamento.
                    </p>
                </div>
                <div class="w-full max-w-md rounded-2xl border border-white/15 bg-white/[0.06] p-8 backdrop-blur-sm">
                    <p class="text-base font-semibold text-white">Entrar na lista de espera</p>
                    <p class="mt-2 text-sm text-white/55">Seu e-mail e perfil — retornamos com acesso antecipado.</p>
                    <form class="mt-6 space-y-3" action="#" method="get">
                        <input type="email" name="email" required placeholder="seu@email.com" class="w-full rounded-xl border border-white/20 bg-white/10 px-4 py-3.5 text-sm text-white placeholder:text-white/35 focus:border-tw-accent focus:outline-none focus:ring-1 focus:ring-tw-accent" />
                        <select name="perfil" class="w-full rounded-xl border border-white/20 bg-white/10 px-4 py-3.5 text-sm text-white focus:border-tw-accent focus:outline-none focus:ring-1 focus:ring-tw-accent [&>option]:bg-[#12201e] [&>option]:text-white">
                            <option value="assessor">Assessor</option>
                            <option value="mesa">Mesa / Family office</option>
                            <option value="instituicao">Instituição</option>
                            <option value="outro">Outro</option>
                        </select>
                        <button type="submit" class="w-full rounded-full bg-tw-accent py-3.5 text-sm font-semibold text-white transition hover:bg-tw-accent-hover">
                            Garantir prioridade
                        </button>
                    </form>
                    <p class="mt-4 text-xs leading-relaxed text-white/40">Demonstração: integração de leads em breve.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Histórias --}}
    <section id="historias" class="bg-tw-surface py-24 sm:py-28">
        <div class="mx-auto max-w-6xl px-5 lg:px-8">
            <p class="segura-eyebrow text-tw-accent">Histórias</p>
            <h2 class="font-display heading-section mt-5 max-w-3xl text-3xl text-tw-ink sm:text-4xl sm:leading-[1.15]">
                Assessores e mesas que já colocam o tempo no que importa
            </h2>
            <p class="mt-6 max-w-2xl text-lg text-tw-ink-muted">
                Da conversa com o Agente de Dados aos painéis comerciais: veja como equipes ganham ritmo sem perder o toque humano com o investidor.
            </p>

            <div class="mt-16 grid gap-10 md:grid-cols-3 md:gap-8">
                <article class="flex flex-col rounded-3xl border border-tw-border/90 bg-white p-8 shadow-sm">
                    <p class="text-xs font-bold uppercase tracking-wider text-tw-gold">Assessor independente</p>
                    <h3 class="font-display heading-card mt-4 text-lg text-tw-ink">Marina Oliveira</h3>
                    <p class="mt-4 flex-1 text-sm leading-relaxed text-tw-ink-muted">
                        “Hoje abro o The Way e já tenho performance e posições. Os agentes ajudam no plano e no diagnóstico da carteira — chego na reunião objetiva.”
                    </p>
                    <a href="#contato" class="mt-8 text-sm font-semibold text-tw-accent hover:underline">Ler mais</a>
                </article>
                <article class="flex flex-col rounded-3xl border border-tw-border/90 bg-white p-8 shadow-sm">
                    <p class="text-xs font-bold uppercase tracking-wider text-tw-gold">Private banking</p>
                    <h3 class="font-display heading-card mt-4 text-lg text-tw-ink">Rafael Costa</h3>
                    <p class="mt-4 flex-1 text-sm leading-relaxed text-tw-ink-muted">
                        “O analista de dados com IA é meu filtro antes de mandar visão ao cliente. Os agentes de planejamento reduzem ida e volta com a mesa.”
                    </p>
                    <a href="#contato" class="mt-8 text-sm font-semibold text-tw-accent hover:underline">Ler mais</a>
                </article>
                <article class="flex flex-col rounded-3xl border border-tw-border/90 bg-white p-8 shadow-sm">
                    <p class="text-xs font-bold uppercase tracking-wider text-tw-gold">Family office</p>
                    <h3 class="font-display heading-card mt-4 text-lg text-tw-ink">Helena Duarte</h3>
                    <p class="mt-4 flex-1 text-sm leading-relaxed text-tw-ink-muted">
                        “Carteira, cenários e dados no mesmo fluxo acelerou relatórios ao conselho — sem abrir mão do rigor.”
                    </p>
                    <a href="#contato" class="mt-8 text-sm font-semibold text-tw-accent hover:underline">Ler mais</a>
                </article>
            </div>

            <p class="mt-14 text-center">
                <a href="#lista" class="inline-flex text-base font-semibold text-tw-accent underline-offset-[6px] hover:underline">
                    Conhecer todas — entrar na lista
                </a>
            </p>
        </div>
    </section>

    {{-- Contato --}}
    <section id="contato" class="border-t border-tw-border bg-white py-24 sm:py-28">
        <div class="mx-auto max-w-6xl px-5 lg:px-8">
            <div class="grid gap-16 lg:grid-cols-2 lg:gap-24">
                <div>
                    <p class="text-sm font-semibold lowercase tracking-wide text-tw-accent">fale com a gente</p>
                    <h2 class="font-display heading-section mt-3 text-4xl text-tw-ink sm:text-5xl sm:leading-[1.12]">
                        Entre em contato
                    </h2>
                    <p class="mt-6 max-w-md text-lg text-tw-ink-muted">
                        Ou agende uma conversa para ver encaixe com sua operação.
                    </p>
                    <address class="mt-10 not-italic text-base leading-relaxed text-tw-ink-muted">
                        <p class="font-semibold text-tw-ink">The Way</p>
                        <p class="mt-2">São Paulo — Brasil</p>
                        <p class="mt-5">
                            <a href="mailto:contato@theway.example" class="font-medium text-tw-accent hover:underline">contato@theway.example</a>
                        </p>
                    </address>
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
                        <div>
                            <label for="nome" class="block text-xs font-bold uppercase tracking-wide text-tw-ink">Nome</label>
                            <input id="nome" name="nome" value="{{ old('nome') }}" required class="mt-2 w-full rounded-xl border border-tw-border bg-white px-4 py-3.5 text-sm focus:border-tw-accent focus:outline-none focus:ring-1 focus:ring-tw-accent" />
                        </div>
                        <div>
                            <label for="email" class="block text-xs font-bold uppercase tracking-wide text-tw-ink">E-mail</label>
                            <input id="email" name="email" type="email" value="{{ old('email') }}" required class="mt-2 w-full rounded-xl border border-tw-border bg-white px-4 py-3.5 text-sm focus:border-tw-accent focus:outline-none focus:ring-1 focus:ring-tw-accent" />
                        </div>
                        <div>
                            <label for="perfil" class="block text-xs font-bold uppercase tracking-wide text-tw-ink">Perfil</label>
                            <select id="perfil" name="perfil" required class="mt-2 w-full rounded-xl border border-tw-border bg-white px-4 py-3.5 text-sm focus:border-tw-accent focus:outline-none focus:ring-1 focus:ring-tw-accent">
                                <option value="assessor" @selected(old('perfil') === 'assessor')>Assessor</option>
                                <option value="mesa" @selected(old('perfil') === 'mesa')>Mesa / Family office</option>
                                <option value="instituicao" @selected(old('perfil') === 'instituicao')>Instituição</option>
                                <option value="outro" @selected(old('perfil') === 'outro')>Outro</option>
                            </select>
                        </div>
                        <div>
                            <label for="mensagem" class="block text-xs font-bold uppercase tracking-wide text-tw-ink">Mensagem</label>
                            <textarea id="mensagem" name="mensagem" rows="4" required class="mt-2 w-full rounded-xl border border-tw-border bg-white px-4 py-3.5 text-sm focus:border-tw-accent focus:outline-none focus:ring-1 focus:ring-tw-accent">{{ old('mensagem') }}</textarea>
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
                <p class="mt-3 max-w-xs text-sm leading-relaxed text-tw-ink-muted">Agentes de IA, hub de ferramentas e materiais, e dashboards do assessor, clientes e dados comerciais.</p>
            </div>
            <div class="flex flex-wrap items-center gap-x-10 gap-y-3 text-sm text-tw-ink-muted">
                <a href="{{ route('home') }}" class="hover:text-tw-accent">Início</a>
                <a href="{{ route('investidor') }}" class="hover:text-tw-accent">Para você</a>
                <a href="#hub" class="hover:text-tw-ink">O hub</a>
                <a href="#solucoes" class="hover:text-tw-ink">Capacidades</a>
                <a href="#historias" class="hover:text-tw-ink">Histórias</a>
                <a href="#contato" class="hover:text-tw-ink">Contato</a>
                <a href="#lista" class="hover:text-tw-ink">Lista</a>
            </div>
        </div>
        <p class="mt-12 border-t border-tw-border/80 pt-8 text-center text-xs text-tw-ink-muted sm:text-left">
            © {{ date('Y') }} The Way. Todos os direitos reservados.
        </p>
    </div>
</footer>
@endsection
