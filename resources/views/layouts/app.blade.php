<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        
        <div class=" bg-gray-100 flex ">
            @include('layouts.navigation')

            <!-- Page Content -->
            <main class="w-full">
                <header class="bg-white shadow ">
                    <div class=" mx-auto py-10 px-4 sm:px-6 lg:px-8 text-center  ">
                        {{ $header }}
                    </div>
                </header>
                {{ $slot }}
            </main> 
            
        </div>
        <x-auth-validation-messages/>
        @livewireScripts
    </body>
</html>
