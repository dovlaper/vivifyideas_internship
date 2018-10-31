<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            Ovo se prvo prikaze, {{$name}}.
        @show <!-- kojim ce se redom prikazivati koji content zavisi gde stavim ovo show. Ovo jos malo izuciti -->
            <div class="container">
            @yield('content')
        </div>
    </body>
</html>