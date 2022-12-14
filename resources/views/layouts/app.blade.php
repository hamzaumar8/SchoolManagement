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
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/c814aab068.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <link href="{{ asset('assets/css/ui.min.css') }}" rel="stylesheet" />
    <style>
        [type="radio"].checkBtn:checked,
        input[type="radio"].checkBtn:checked {
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='black' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e") !important;
        }

        [type=radio].checkBtn:checked:hover,
        [type=radio].checkBtn:checked:focus {
            border-color: unset;
            background-color: unset;
        }
    </style>
    <!-- Styles -->
    @livewireStyles
    @powerGridStyles
    @wireUiScripts

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        #modal-container {
            overflow: unset !important;
        }
    </style>

</head>

<body
    class="m-0 font-sans antialiased font-normal text-base leading-default bg-[#f1f4f9] !text-slate-500 print:!bg-[#fff]">
    <x-notifications />
    @include('layouts.sidenav')
    <main class="ease-soft-in-out xl:ml-68.5 relative min-h-screen rounded-xl transition-all duration-200 py-4">
        @include('layouts.navigation')

        <!--  -->
        @if (!Route::is('dashboard'))
            <div class="w-full px-6 py-6 mx-auto">
                <!-- breadcrumb -->
                <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                    <li class="leading-normal text-sm">
                        <a class="text-slate-700 font-semibold" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    @if (request()->segment(2))
                        <li class="opacity-50 text-sm pl-2 capitalize leading-normal text-gray-900 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
                            aria-current="page">{{ request()->segment(2) }}</li>
                    @endif
                    @if (request()->segment(3))
                        <li class="opacity-50 text-sm pl-2 capitalize leading-normal text-gray-900 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
                            aria-current="page">{{ request()->segment(3) }}</li>
                    @endif
                </ol>
            </div>
        @endif

        <!--  -->
        <div class="w-full px-6 py-6 mx-auto">
            {{ $slot }}
        </div>
        <!-- Footer -->
        <footer class="pt-4">
            <div class="w-full px-6 mx-auto">
                <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                    <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                        <div class="leading-normal text-center text-sm text-slate-500 lg:text-left">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear() + ",");
                            </script>
                            made with <i class="fa fa-heart" aria-hidden="true"></i> by
                            <a href="#" class="font-semibold text-slate-700" target="_blank">hamza</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <!-- Scripts -->
    @livewireScripts
    @powerGridScripts
    @livewire('livewire-ui-modal')

    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/soft-ui-dashboard-tailwind.js?v=1.0.4') }}" async></script>
    <script src="{{ asset('assets/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/tooltips.js') }}"></script>
    <script src="{{ asset('assets/js/nav-pills.js') }}"></script>
    <script src="{{ asset('assets/js/dropdown.js') }}"></script>
    <script src="{{ asset('assets/js/sidenav-burger.js') }}"></script>
    <script src="{{ asset('assets/js/navbar-sticky.js') }}"></script>
</body>

</html>
