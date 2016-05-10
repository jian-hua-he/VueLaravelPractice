@extends('layout.base')

@section('js')
    @parent
    <script type="text/javascript" src="{!! url('js/vue/filter.js') !!}"></script>
@stop

@section('css')
    @parent
@stop

@section('content')
    <div id="app" class="container">
        <div class="container">
            <h2>Origin Data</h1>
            <p>@{{ message }}</p>
            <p>@{{ money }}</p>
            <br />
        </div>

        <div class="container">
            <h2>Filter example 1</h1>
            <p>@{{ message | uppercase }}</p>
            <p>@{{ money | currency }}</p>
            <br />
        </div>

        <div class="container">
            <h2>Filter example 2</h2>
            <p>@{{ message | lowercase }}</p>
            <p>@{{ money | currency '£' }}</p>
            <br />
        </div>
    </div>
@stop