import Vue from 'vue'
window.Vue = Vue

import store from './store';

import Vuelidate from 'vuelidate'
Vue.use(Vuelidate)

Vue.component('App', require('./App.vue').default)

new Vue({
    el: '#app',
    store
})
