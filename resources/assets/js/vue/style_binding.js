var Vue = require('vue');

new Vue({
    el: '#app',

    data: {
        style: 'info'
    },

    computed: {
        styleClasses: function () {
            return {
                'alert-info': this.style === 'info',
                'alert-success': this.style === 'success',
                'alert-warning': this.style === 'warning',
                'alert-danger': this.style === 'error'
            };
        }
    }
});