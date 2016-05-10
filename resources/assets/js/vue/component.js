var Vue = require('vue');

Vue.component('alert', {
    template: '#alert-template',

    props: ['type'],

    data: function () {
        return {
        };
    },

    computed: {
        alertClass: function () {
            var type = this.type;

            return {
                'bg-info text-info': true,
                'bg-success text-success': type === 'success',
                'bg-warning text-warning': type === 'warning',
                'bg-error text-error': type === 'error'
            };
        }
    }
});

new Vue({
    el: '#app',
});