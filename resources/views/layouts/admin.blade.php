<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Admin - @yield('titoloAdmin')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <header>
            @include('partials.header')
        </header>
        <main>
            @yield('mainAdmin')
        </main>
        <footer>
            @include('partials.footer')
        </footer>
    </body>
</html>
