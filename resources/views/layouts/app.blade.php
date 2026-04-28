<!DOCTYPE html>
<html lang="pt-BR" class="@yield('html_class')">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'The Way — visão unificada para assessores e planejamento com IA para investidores.')">

    <title>@yield('title', config('app.name'))</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=dm-sans:400,500,600,700|plus-jakarta-sans:400,500,600,700,800" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="@yield('body_class', 'min-h-screen flex flex-col')">
    @yield('content')

    <script>
        document.querySelectorAll('[data-mobile-toggle]').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var id = btn.getAttribute('data-mobile-toggle');
                var panel = document.getElementById(id);
                if (panel) panel.classList.toggle('hidden');
            });
        });
    </script>
    @stack('scripts')
</body>
</html>
