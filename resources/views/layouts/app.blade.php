<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            Ovo se prvo prikaze, {{$name}}.

        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>