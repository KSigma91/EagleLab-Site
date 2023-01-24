require('./bootstrap');

import Vue from 'vue';
import App from './App.vue';
import VueRouter from 'vue-router';

import Home from './pages/PageHome.vue';
import Service from './pages/PageService.vue';
import Tool from './pages/PageTool.vue';
import Gallery from './pages/PageGallery.vue';
import About from './pages/PageAbout.vue';

const routes = [
    {
        path: '/home',
        name: 'home',
        component: Home
    },
    {
        path: '/service',
        name: 'service',
        component: Service
    },
    {
        path: '/tool',
        name: 'tool',
        component: Tool
    },
    {
        path: '/gallery',
        name: 'gallery',
        component: Gallery
    },
    {
        path: '/about',
        name: 'about',
        component: About
    }
];

const router = new VueRouter ({
    routes,
    mode: 'history'
});

Vue.use(VueRouter);

const app = new Vue({
    el: '#root',
    render: h => h(App),
    router
});
