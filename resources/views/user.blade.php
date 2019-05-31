<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials._head')
    </head>
    <body style="background: url('{{ asset("img/wallpaper.jpg") }}') no-repeat">
        <main>
            <div class="col-md-10 offset-md-1 user-page">
                <div class="col-md-12 header">
                    <h3>@yield('title')</h3>
                    @include('partials._messages')
                </div>
                @yield('content')
            </div>
        </main>
        @include('partials._javascript')
    </body>
</html>