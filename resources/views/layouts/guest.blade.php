<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SIM Asrama') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>

    <body class="bg-gray-100">
    <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-flow-row-dense grid-cols-3 xl:grid-cols-8 divide-opacity-0">
                <div class="grid col-span-2 xl:col-span-7">
                    <img class="object-contain h-8 leading-tight" src="https://i.ibb.co/ykWR0YS/small-ITS-logo.png" alt="ITS Logo">
                </div>
                <div class="flex flex-row-reverse space-x-4 space-x-reverse">
                    <div>
                        <x-logreg-link :href="route('login')" :active="request()->routeIs('login')">
                            {{ __('Masuk') }}
                        </x-logreg-link>
                    </div>

                    <div>
                        <x-logreg-link :href="route('register')" :active="request()->routeIs('register')">
                            {{ __('Daftar') }}
                        </x-logreg-link>
                    </div>
                </div>
            </div>
        </div>
    </nav>

        <!-- Page Heading -->
        <header class="bg-indigo-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-3 divide-opacity-0">
                    <div>
                        <img class="object-contain h-8 leading-tight" src="https://4.bp.blogspot.com/-i5MLRxGuK5s/VVADS3PUL2I/AAAAAAAAQ20/3RljzZYiHeA/s1600/logo-its-putih-transparan.png" alt="ITS Logo">
                    </div>
                    <div></div>
                    <div>
                        <h2 class="font-bold text-2xl text-white leading-tight text-right">
                            SMALL ITS
                        </h2>
                    </div>
                </div>
            </div>
        </header>

        <div class="font-sans text-gray-900 antialiased my-auto mx-auto">
            {{ $slot }}
        </div>
    </body>
</html>
