import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        siteUrl: 'https://trend-p.ru/promotion',
        isModal: false,
        isSuccess: false,
    }
})
