@extends('layout.base')

@section('title', 'Handle Event')

@section('css')
    @parent
@stop

@section('js')
    @parent
    <script type="text/javascript" src="{!! url('js/vue/handle_event.js') !!}"></script>
@stop

@section('content')
    <div id="app" class="container">
        <div class="block">
            <p>@{{ message }}</p>
            <button class="btn btn-default" v-on:click="reverseMessage">Reverse Message</button>
        </div>
    </div>
@stop