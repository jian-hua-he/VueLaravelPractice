@extends('layout.base')

@section('js')
    @parent
    <script type="text/javascript" src="{!! url('js/vue/filter.js') !!}"></script>
@stop

@section('css')
    @parent
@stop

@section('content')
    <div id="app">
        Filter
    </div>
@stop