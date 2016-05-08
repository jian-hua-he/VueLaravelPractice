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
    <template id="alert-template">
        <div>
            @{{ message }}
        </div>
    </template>

    <div id="app">
        <alert message="This is danger"></alert>
        <alert></alert>
    </div>
@stop