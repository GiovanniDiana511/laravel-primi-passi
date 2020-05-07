<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>@yield('titolo')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <header>
            @include ('partials.header')
        </header>
        <main>
            @yield('mainContent')
        </main>
        <footer>
            @include ('partials.footer')
        </footer>
    </body>
</html>
