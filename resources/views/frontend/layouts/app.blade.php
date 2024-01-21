<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }} | @yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Vite -->
        {{-- {{ mix('public/build/assets/js/app.js') }} --}}
        @vite('resources/js/app.js')

    </head>
    <body id="app" class="antialiased min-h-screen dark:bg-gray-900">
        
        <x-frontend.navbar />

        <div>
            
            @yield('content')
            
        </div>

        
    </body>
</html>
