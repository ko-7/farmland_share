<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('page_meta')

        <title>Laravel | @yield('page_title')</title>

        @vite([
            'resources/css/app.css', 'resources/js/app.js', 'resources/scss/app.scss',
        ])

        <!-- @vite([
            'resources/css/app.css', 'resources/js/app.js', 'resources/scss/app.scss',
            'resources/css/layouts.css', 'resources/js/layouts.js', 'resources/scss/layouts.scss',
            'resources/css/users.css', 'resources/js/users.js', 'resources/scss/users.scss',
        ]) -->

        @yield('page_css')
        <!-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8"></script> -->

        
    </head>
    <body class="font-sans antialiased">
        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')

        @yield('page_js')
    </body>
</html>