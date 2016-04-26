<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        @section('css')
        @show
    </head>

    <body>
        @yield('content')
    </body>

    @section('js')
    @show
</html>