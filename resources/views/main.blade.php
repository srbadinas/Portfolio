<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials._head')
    </head>
    <body style="background: url('{{ asset("img/wallpaper.jpg") }}') no-repeat">
        <main>
            @if (Auth::user())
                @include('partials._dashboard')
            @endif
            
            @if (Route::currentRouteName() != 'login' && Route::currentRouteName() != 'register') 
                @include('partials._nav')
            @endif
            
            @yield('content')
            
        </main>

        @include('partials._javascript')
    </body>
</html>
