<template>
    <div class="alert" :class="alertClasses" v-show="show">
        <slot></slot>
        <button type="button" class="close" aria-label="Close" @click="hide"><span aria-hidden="true">&times;</span></button>
    </div>
</template>

<style>
    .alert {
        position: relative;
        padding: 1em;
    }

    .block {
        margin: 1em 0.5em;
    }
</style>

<script type="text/javascript">
    export default {
        template: '#alert-template',

        props: {
            type: {
                default: 'info'
            },
        },

        data: function () {
            return {
                show: true,
            };
        },

        methods: {
            hide: function () {
                this.show = false;
            },
        },

        computed: {
            alertClasses: function () {
                var type = this.type;

                return {
                    'bg-success text-success': type === 'success',
                    'bg-warning text-warning': type === 'warning',
                    'bg-danger text-danger': type === 'error',
                    'bg-info text-info': type === 'info',
                };
            },
        },
    };
</script>