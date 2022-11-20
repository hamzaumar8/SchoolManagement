<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/sites/default/files/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/sites/default/files/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/sites/default/files/favicons/favicon-16x16.png" />
    <link rel="manifest" href="/sites/default/files/favicons/site.webmanifest" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />
    <link rel="shortcut icon" href="https://ucc.edu.gh/sites/default/files/favicon_2.png" type="image/png" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    @livewireStyles
    @wireUiScripts
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.voucher-navigation')

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <!-- Scripts -->
    @livewireScripts
</body>

</html>