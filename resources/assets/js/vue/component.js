var Vue = require('vue');

Vue.component('alert', {
    template: '#alert-template',

    props: {
        type: {
            default: 'info'
        }
    },

    data: function () {
        return {
        };
    },

    computed: {
        alertClass: function () {
            var type = this.type;

            return {
                'bg-success text-success': type === 'success',
                'bg-warning text-warning': type === 'warning',
                'bg-danger text-danger': type === 'error',
                'bg-info text-info': type === 'info',
            };
        }
    }
});

new Vue({
    el: '#app',
});