@extends('layout.base')

@section('title', 'Modularization')

@section('css')
    @parent
@stop

@section('js')
    @parent
    <script type="text/javascript" src={!! url('js/vue/modularization.js') !!}></script>
@stop

@section('content')
    <div id="app">
        <div class="block">
            <alert>
                <strong>Information!</strong> You got new message.
            </alert>

            <alert type="success">
                <strong>Success!</strong> Your profile is updated.
            </alert>

            <alert type="warning">
                <strong>Warning!</strong> Change is not save.
            </alert>

            <alert type="error">
                <strong>Error!</strong> This field is not vaild.
            </alert>
        </div>
    </div>
@stop