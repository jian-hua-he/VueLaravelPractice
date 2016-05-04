@extends('layout.base')

@section('title', 'Simple Example')

@section('css')
    @parent
@stop

@section('js')
    @parent
    <script type="text/javascript" src="{!! url('js/vue/simple_example.js') !!}"></script>
@stop

@section('content')
    <div id="app" class="container">
        <div class="form-group">
            <label for="">@{{ message }}</label>
            <input class="form-control" type="text" v-model="message" />
        </div>
    </div>
@stop