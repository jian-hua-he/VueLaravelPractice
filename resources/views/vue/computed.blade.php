@extends('layout.base')

@section('title', 'Computed')

@section('css')
    @parent
@stop

@section('js')
    @parent
    {{-- <script type="text/javascript" src="{!! url('js/vue/handle_event.js') !!}"></script> --}}
@stop

@section('content')
    <div id="app" class="container">
        Computed
    </div>
@stop