@extends('layout.base')

@section('title', 'Style Binding')

@section('css')
    @parent
@stop

@section('js')
    @parent
    <script type="text/javascript" src="{!! url('js/vue/style_binding.js') !!}"></script>
@stop

@section('content')
<div id="app">
    <div class="container">
        <div class="block">
            <p>Enter style sheet class to change style. You can enter "info", "success", "warning" and "error"</p>
            <p>Current style: @{{ style }}</p>
            <input type="text" class="form-control" v-model="style" />
        </div>

        <div class="block">
            <div class="alert" :class="styleClasses">Style binding example</div>
        </div>
    </div>
</div>
@stop