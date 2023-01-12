<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> Times.com </title>
        
        <!-- Fonts -->
        {{-- <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        {{-- @livewireStyles --}}

    </head>
    <body class="grid ">
        <x-side-nav />
        <div class="sm:ml-[26%] flex flex-col min-h-screen sm:mt-2 lg:ml-[21%]">
            <x-header/>
            <x-notifications />
            <div class="flex-1"> 
                @yield('content') 
            </div>
            
            <x-footer/>
        </div>
    </body>
</html>
