var Vue = require('vue');

new Vue({
    el: '#app',
    data: {
        firstName: 'Jerry',
        lastName: 'Ho',
    },
    computed: {
        name: {
            get: function () {
                return this.firstName + ' ' + this.lastName
            },
            set: function (name) {
                var splitNames = name.split(' ')
                this.firstName = splitNames[0]
                this.lastName = splitNames[splitNames.length - 1]
            }
        }
    }
});