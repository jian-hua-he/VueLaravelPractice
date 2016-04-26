@extends('layout.base')

@section('title', 'Demo one')

@section('css')
    @parent
@stop

@section('js')
    @parent
    <script type="text/javascript" src="/js/vue/demo_one.js"></script>
@stop

@section('content')
    <div id="app">
        <input type="text" v-model="message" />
        @{{ message }}
    </div>
@stop