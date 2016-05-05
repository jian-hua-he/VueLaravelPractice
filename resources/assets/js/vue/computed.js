var Vue = require('vue');

var vue = new Vue({
    el: '#app',
    data: {
        firstName: 'Jerry',
        lastName: 'Ho',
    },
    computed: {
        name: function () {
            return this.firstName + ' ' + this.lastName
        }
    }
});