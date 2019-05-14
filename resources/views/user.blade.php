<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials._head')
    </head>
    <body style="background: url('{{ asset("img/wallpaper.jpg") }}') no-repeat">
        <main>
            @yield('content')
        </main>
        @include('partials._javascript')
    </body>
</html>