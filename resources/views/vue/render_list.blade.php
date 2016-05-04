@extends('layout.base')

@section('title', 'Demo two')

@section('css')
    @parent
@stop

@section('js')
    @parent
    <script type="text/javascript" src="{!! url('js/vue/render_list.js') !!}"></script>
@stop

@section('content')
    <div id="app" class="container">
        <ul>
            <li v-for="todo in todos">
                @{{ todo.text }}
            </li>
        </ul>
    </div>
@stop