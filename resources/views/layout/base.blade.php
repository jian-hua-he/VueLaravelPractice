<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>

        @section('css')
            <link rel="stylesheet" href="{!! url('css/app.css') !!}">
        @show
    </head>

    <body>
        @yield('content')
    </body>

    @section('js')
        <script type="text/javascript" src="{!! url('js/app.js') !!}"></script>
    @show
</html>