import Vue from 'vue';
window.Vue = Vue;
import store from './store';

Vue.component('quiz-promo', require('./views/QuizPromo.vue').default);

new Vue({
    el: '#app',
    store
})