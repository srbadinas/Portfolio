<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials._head')
    </head>
    <body>
        <main>
            @include('partials._nav')
        
            @yield('content')

            @include('partials._javascript')
        </main>
    </body>
</html>
