@extends('layouts.app')

@section('html_class', 'h-dvh max-h-dvh overflow-hidden overscroll-none bg-tw-split-bg')
@section('body_class', 'flex h-dvh max-h-dvh flex-col overflow-hidden bg-tw-split-bg text-white')

@section('title', 'The Way — Escolha como deseja continuar')

@section('meta_description', 'The Way: planejamento financeiro com IA para investidores ou hub completo para assessores — escolha seu perfil.')

@section('content')
<div class="split-tech-bg split-tech-typography relative flex min-h-0 flex-1 flex-col overflow-hidden text-white">
    <div class="split-tech-aurora" aria-hidden="true"></div>
    <div class="split-tech-scan" aria-hidden="true"></div>
    <div class="split-tech-grain grain" aria-hidden="true"></div>
    <div class="pointer-events-none absolute right-[12%] top-[18%] z-[3] h-36 w-36 rounded-full bg-tw-split-accent/10 blur-3xl" aria-hidden="true"></div>
    <div class="pointer-events-none absolute bottom-[22%] left-[8%] z-[3] h-44 w-44 rounded-full bg-tw-split-accent-deep/8 blur-3xl" aria-hidden="true"></div>

    <header class="split-reveal relative z-10 shrink-0 border-b border-white/10 bg-black/20 backdrop-blur-md">
        <div class="mx-auto flex max-w-6xl items-center justify-center px-5 py-3.5 sm:py-4 lg:px-8">
            <a href="{{ route('home') }}" class="font-display wordmark text-xs uppercase tracking-[0.35em] text-white/95 sm:text-sm">
                The Way
            </a>
        </div>
    </header>

    <main class="relative z-10 flex min-h-0 flex-1 flex-col overflow-hidden">
        <div class="mx-auto flex min-h-0 w-full max-w-5xl flex-1 flex-col justify-center overflow-hidden px-5 py-5 sm:py-8 lg:px-8 lg:py-10">
            <div class="split-reveal split-reveal-delay-1 flex flex-wrap items-center justify-center gap-2 sm:gap-3">
                <span class="rounded-full border border-tw-split-accent/35 bg-tw-split-accent/10 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.2em] text-tw-split-accent sm:text-[11px]">IA aplicada</span>
                <span class="hidden text-tw-split-subtle sm:inline" aria-hidden="true">·</span>
                <span class="rounded-full border border-white/12 bg-white/[0.04] px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.15em] text-tw-split-muted sm:text-[11px]">Orquestração inteligente</span>
                <span class="hidden text-tw-split-subtle sm:inline" aria-hidden="true">·</span>
                <span class="rounded-full border border-white/12 bg-white/[0.04] px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.15em] text-tw-split-muted sm:text-[11px]">Dados com governança</span>
            </div>

            <h1 class="font-display split-hero-title split-reveal split-reveal-delay-2 mx-auto mt-4 max-w-3xl text-balance text-center text-[1.65rem] leading-[1.1] text-white sm:mt-6 sm:text-5xl sm:leading-[1.08] lg:text-[3rem] lg:leading-[1.05]">
                O futuro do seu <span class="text-tw-split-accent">relacionamento</span> com o dinheiro<br class="hidden sm:block" />
                <span class="split-hero-sub mt-1.5 block text-sm text-white/80 sm:mt-2 sm:text-lg lg:text-xl">começa com uma escolha.</span>
            </h1>

            <p class="split-reveal split-reveal-delay-3 mx-auto mt-3 max-w-xl text-center text-xs font-medium leading-relaxed text-tw-split-muted sm:mt-4 sm:text-base">
                Selecione o canal abaixo. Cada jornada usa a mesma base tecnológica — <strong class="font-semibold text-white/90">agentes de IA</strong>, dados estruturados e experiência humana.
            </p>

            <div class="split-reveal split-reveal-delay-4 relative mx-auto mt-4 grid min-h-0 max-w-4xl grid-cols-2 gap-2.5 sm:mt-8 sm:gap-5 lg:mt-10 lg:gap-6">
                <a href="{{ route('investidor') }}" class="split-card group relative z-0 flex min-h-0 min-w-0 flex-col p-3 sm:p-8 lg:p-9">
                    <span class="split-card-shine" aria-hidden="true"></span>
                    <div class="relative z-[1] flex flex-1 flex-col">
                        <div class="mb-4 flex items-start justify-between gap-3 sm:mb-6">
                            <span class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-tw-split-accent/18 to-tw-split-accent-deep/10 text-tw-split-accent ring-1 ring-tw-split-accent/30 sm:h-11 sm:w-11">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                            </span>
                            <span class="rounded-md bg-white/[0.06] px-2 py-0.5 text-[10px] font-semibold uppercase tracking-[0.14em] text-tw-split-accent/90">PF · planning</span>
                        </div>
                        <h2 class="font-display text-base font-bold leading-snug tracking-tight text-white sm:text-lg lg:text-xl">Cliente / investidor</h2>
                        <p class="mt-2 flex-1 text-xs font-medium leading-relaxed text-tw-split-muted sm:mt-3 sm:text-sm">
                            Agente de Planejamento Financeiro com <strong class="font-semibold text-white/85">IA</strong> e <strong class="font-semibold text-white/85">+20 anos</strong> de metodologia — metas, cenários e clareza no seu ritmo.
                        </p>
                        <span class="mt-auto inline-flex items-center gap-2 pt-4 text-sm font-semibold text-tw-split-accent transition group-hover:gap-3 sm:pt-6">
                            Acessar jornada
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </span>
                    </div>
                </a>

                <a href="{{ route('assessores') }}" class="split-card group relative z-0 flex min-h-0 min-w-0 flex-col p-3 sm:p-8 lg:p-9">
                    <span class="split-card-shine" aria-hidden="true"></span>
                    <div class="relative z-[1] flex flex-1 flex-col">
                        <div class="mb-4 flex items-start justify-between gap-3 sm:mb-6">
                            <span class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-tw-split-accent/18 to-tw-split-accent-deep/10 text-tw-split-accent ring-1 ring-tw-split-accent/30 sm:h-11 sm:w-11">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </span>
                            <span class="rounded-md bg-white/[0.06] px-2 py-0.5 text-[10px] font-semibold uppercase tracking-[0.14em] text-tw-split-accent/90">B2B · hub</span>
                        </div>
                        <h2 class="font-display text-base font-bold leading-snug tracking-tight text-white sm:text-lg lg:text-xl">Assessor(a) ou profissional</h2>
                        <p class="mt-2 flex-1 text-xs font-medium leading-relaxed text-tw-split-muted sm:mt-3 sm:text-sm">
                            Agentes de IA, ferramentas, materiais e dashboards — <strong class="font-semibold text-white/85">dados do assessor, clientes e comerciais</strong> em um só ecossistema.
                        </p>
                        <span class="mt-auto inline-flex items-center gap-2 pt-4 text-sm font-semibold text-tw-split-accent transition group-hover:gap-3 sm:pt-6">
                            Acessar plataforma
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </main>

    <footer class="split-reveal split-reveal-delay-5 relative z-10 shrink-0 border-t border-white/10 bg-black/25 py-3 backdrop-blur-sm sm:py-4">
        <p class="text-center text-xs text-tw-split-subtle">
            © {{ date('Y') }} The Way · Infraestrutura de IA para finanças
        </p>
    </footer>
</div>
@endsection

@push('scripts')
<script>
(function () {
    document.querySelectorAll('.split-card').forEach(function (card) {
        function setSpot(e) {
            var r = card.getBoundingClientRect();
            card.style.setProperty('--sx', (e.clientX - r.left) + 'px');
            card.style.setProperty('--sy', (e.clientY - r.top) + 'px');
        }
        card.addEventListener('mousemove', setSpot);
        card.addEventListener('touchmove', setSpot, { passive: true });
        card.addEventListener('mouseleave', function () {
            card.style.removeProperty('--sx');
            card.style.removeProperty('--sy');
        });
    });
})();
</script>
@endpush
