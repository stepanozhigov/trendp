import Vue from 'vue';
window.Vue = Vue;
import store from './store';

Vue.component('quiz-site', require('./views/QuizSite.vue').default);



new Vue({
    el: '#app',
    store
})







