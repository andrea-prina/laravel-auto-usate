import Vue from 'vue';

window.Vue = require('vue');

import App from './views/App.vue';

const app = new Vue({
    el: '#root',
    render: h => h(App)
});
