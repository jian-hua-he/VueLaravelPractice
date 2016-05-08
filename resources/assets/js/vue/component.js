var Vue = require('vue');

Vue.component('alert', {
    template: '#alert-template',

    props: ['message'],

    data: function () {
        return {
            message: 'Default Message'
        };
    }
});

new Vue({
    el: '#app',
});