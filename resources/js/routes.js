/*
 |-------------------------------------------------------------------------------
 | routes.js
 |-------------------------------------------------------------------------------
 | Contains all of the routes for the application
 */

/**
 * Imports Vue and VueRouter to extend with the routes.
 */
import Vue from 'vue'
import VueRouter from 'vue-router'

/**
 * Extends Vue to use Vue Router
 */
Vue.use( VueRouter );

export default new VueRouter({
    routes:[
        {
            path: '/',
            name: 'Home',
            component:Vue.component('Home', require('./pages/Home.vue').default)
        },
        {
            path: '/first',
            name: 'First',
            component: Vue.component('First', require('./pages/First.vue').default)
        }
    ]
})
