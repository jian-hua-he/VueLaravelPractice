var Vue = require('vue');

new Vue({
    el: '#app',

    data: {
        classes: {
            'text-info': false,
            'text-success': false,
            'text-danger': true,
            'text-warning': false,
        }
    }
});