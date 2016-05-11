@extends('layout.base')

@section('css')
    @parent
@stop

@section('js')
    @parent
    <script type="text/javascript" src="{!! url('js/vue/style_binding.js') !!}"></script>
@stop

@section('content')
    <div id="app">
        <div class="block">
            <p :class="classes">Style Binding</p>
        </div>
    </div>
@stop