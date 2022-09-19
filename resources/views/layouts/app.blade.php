<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Font Awesome Icons -->
    <!-- <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> -->

    <script src="https://kit.fontawesome.com/c814aab068.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <link href="{{ asset('assets/css/ui.min.css') }}" rel="stylesheet" />
    <!-- Styles -->
    @livewireStyles
    @powerGridStyles
    @wireUiScripts

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="m-0 font-sans antialiased font-normal text-base bg-gray-50 text-slate-500">
    <x-notifications />
    @include('layouts.sidenav')

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">

        @include('layouts.navigation')
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <!-- Scripts -->
        @livewireScripts
        @powerGridScripts
        @livewire('livewire-ui-modal')

        <script>
        document.getElementById('card-holder-name').click(function(e) {
            e.preventDefault();
            $(this).parent().parent().hide(500)
        })
        </script>

        <!-- plugin for charts  -->
        <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}" async></script>
        <!-- plugin for scrollbar  -->
        <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}" async></script>

        <script src="{{ asset('assets/js/ui.min.js') }}"></script>
</body>

</html>