var Vue = require('vue');

Vue.component('alert', {
    template: '#alert-template'
});

new Vue({
    el: '#app',
});