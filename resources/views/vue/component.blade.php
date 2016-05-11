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
    </div>
@stop