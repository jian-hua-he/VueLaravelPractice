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
        <div class="alert" :class="alertClass">
            <slot></slot>
        </div>
    </template>

    <div id="app">
        <div class="container">
            <alert>
                <strong>Information!</strong> We got something new!
            </alert>

            <alert type="success">
                <strong>Success!</strong> Your profile is updated!
            </alert>
        </div>
    </div>
@stop