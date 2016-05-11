@extends('layout.base')

@section('css')
    @parent
@stop

@section('js')
    @parent
    <script type="text/javascript" src="{!! url('js/vue/condition.js') !!}"></script>
@stop

@section('content')
    <div id="app">
        <div class="block">
            <div>
                <label>Display</label>
                <input type="checkbox" v-model="isCheck" />
            </div>

            <div v-if="isCheck">
                I'm here
            </div>
        </div>
    </div>
@stop