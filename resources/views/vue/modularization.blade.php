@extends('layout.base')

@section('title', 'Modularization')

@section('js')
    @parent
    <script type="text/javascript" src={!! url('js/vue/modularization.js') !!}></script>
@stop

@section('content')
    modularization
@stop