@extends('layout.base')

@section('title', 'Component')

@section('css')
    @parent
@stop

@section('js')
    @parent
    <script type="text/javascript" src="{!! url('js/vue/component.js') !!}"></script>
@stop

@section('content')
    <div id="app">
        <alert></alert>
    </div>
@stop