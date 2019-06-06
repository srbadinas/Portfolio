<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials._head')
    </head>
    <body style="background: url('{{ asset("img/wallpaper.jpg") }}') no-repeat">
        <main>
            <div class="col-md-10 offset-md-1 admin-header">
                <button type="button" class="btn btn-dark" onclick="location.href='{{ route('home') }}'"><i class="fa fa-home"></i></button>
                <button type="button" class="btn btn-light"><i class="fa fa-user"></i> {{ $viewers }}</button>
            </div>
            <div class="col-md-10 offset-md-1 admin-page">
                
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