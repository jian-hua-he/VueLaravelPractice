@extends('layout.base')

@section('title', 'Modularization')

@section('css')
    @parent
@stop

@section('js')
    @parent
    <script type="text/javascript" src={!! url('js/vue/modularization.js') !!}></script>
@stop

@section('content')
    <div id="app">
        <alert type="success">Success!</alert>
    </div>
@stop