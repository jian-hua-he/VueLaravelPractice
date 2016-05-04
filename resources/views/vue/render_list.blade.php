@extends('layout.base')

@section('title', 'Demo two')

@section('css')
    @parent
@stop

@section('js')
    @parent
    <script type="text/javascript" src="{!! url('js/vue/demo_two.js') !!}"></script>
@stop

@section('content')
    <div id="app">
        <ul>
            <li v-for="todo in todos">
                @{{ todo.text }}
            </li>
        </ul>
    </div>
@stop