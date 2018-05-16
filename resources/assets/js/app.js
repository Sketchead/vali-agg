import Vue from 'vue'
import VueRouter from 'vue-router'
import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue);
Vue.use(VueRouter)

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import App from './views/App'
import Index from './views/Index'
import Invoice from './views/Invoice'
import Calendar from './views/Calendar'
import Mailbox from './views/Mailbox'
import User from './views/User'
import Sidebar from './views/Sidebar'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/index',
            name: 'index',
            component: Index
        },
        {
            path: '/invoice',
            name: 'invoice',
            component: Invoice,
        },
        {
            path: '/calendar',
            name: 'calendar',
            component: Calendar,
        },
        {
            path: '/mailbox',
            name: 'mailbox',
            component: Mailbox,
        },
        {
            path: '/user',
            name: 'user',
            component: User,
        },
        {
            path: '/sidebar',
            name: 'sidebar',
            component: Sidebar,
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});

const sidebar = new Vue({
    el: '#sidebar',
    components: { Sidebar },
    router,
});