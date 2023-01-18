require('./bootstrap');

import Vue from 'vue';
import App from './App.vue';
import VueRouter from 'vue-router';

import Home from './pages/PageHome.vue';

const routes = [
    {
        path: '/home',
        name: 'home',
        component: Home
    }
];

const router = new VueRouter ({
    routes,
    mode: 'history'
});

Vue.use(VueRouter);

new Vue({
    render: h => h(App),
    router
}).$mount('#root')
