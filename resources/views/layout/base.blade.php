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
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.21/vue.min.js"></script>
        <script type="text/javascript" src="{!! url('js/main.js') !!}"></script>
    @show
</html>