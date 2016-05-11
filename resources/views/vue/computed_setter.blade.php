@extends('layout.base')

@section('title', 'Computed Setter')

@section('css')
    @parent
@stop

@section('js')
    @parent
    <script type="text/javascript" src="{!! url('js/vue/computed_setter.js') !!}"></script>
@stop

@section('content')
    <div id="app" class="container">
        <div class="block">
            <input class="form-control" type="text" v-model="name" />
        </div>
        <p>@{{ name }}</p>
    </div>
@stop