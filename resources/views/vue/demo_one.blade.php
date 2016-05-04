@extends('layout.base')

@section('title', 'Demo one')

@section('css')
    @parent
@stop

@section('js')
    @parent
@stop

@section('content')
    <div id="app">
        <input type="text" v-model="message" />
        @{{ message }}
    </div>
@stop