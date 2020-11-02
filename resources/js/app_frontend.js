
import Vue from 'vue';
import VueRouter from 'vue-router';
import store from './store';

window.Vue = Vue;
Vue.use(VueRouter);

import VTooltip from 'v-tooltip'
Vue.use(VTooltip)

import router from './routes';

Vue.component('Layout', require('./views/Layout.vue').default);

// This callback runs before every route change, including on page load.
router.beforeEach((to, from, next) => {
    const nearestWithTitle = to.matched.slice().reverse().find(r => r.meta && r.meta.title);
    const nearestWithMeta = to.matched.slice().reverse().find(r => r.meta && r.meta.metaTags);
    const previousNearestWithMeta = from.matched.slice().reverse().find(r => r.meta && r.meta.metaTags);
    if(nearestWithTitle) document.title = nearestWithTitle.meta.title;
    Array.from(document.querySelectorAll('[data-vue-router-controlled]')).map(el => el.parentNode.removeChild(el));
    if(!nearestWithMeta) return next();
    nearestWithMeta.meta.metaTags.map(tagDef => {
      const tag = document.createElement('meta');

      Object.keys(tagDef).forEach(key => {
          tag.setAttribute(key, tagDef[key]);
      });
      tag.setAttribute('data-vue-router-controlled', '');
      return tag;
    })
    .forEach(tag => document.head.appendChild(tag));
    next();
});

new Vue({
    el: '#app',
    router,
    store
})







