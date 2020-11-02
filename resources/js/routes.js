import VueRouter from 'vue-router';

import Index from './views/Index';
import Promotion from './views/Promotion';

let routes = [
    {
        path: '/',
        component: Index,
        meta: {
            title: 'Создание сайтов в Москве без предоплаты',
            h1: 'Создание сайтов в&nbsp;Москве и&nbsp;области от&nbsp;25&nbsp;000&nbsp;<span class="rub">q</span>',
            offer: {
              title: 'Бесплатное <br>продвижение',
              subtitle: 'Подайте заявку на&nbsp;создание сайта и&nbsp;получите продвижение в&nbsp;Яндекс, Google или Instagram бесплатно.',
              link: '/quiz-site'
            },
            metaTags: [
              {
                name: 'description',
                content: 'Сайт — это лицо Вашей компании в сети Интернет и важная составляющая успеха любого бизнеса в Москве. Качественное создание сайтов способно увеличить количество клиентов, и соответственно прибыли'
              },
              {
                property: 'og:description',
                content: 'Сайт — это лицо Вашей компании в сети Интернет и важная составляющая успеха любого бизнеса в Москве. Качественное создание сайтов способно увеличить количество клиентов, и соответственно прибыли'
              }
            ]
        }
    },
    {
        path: '/promotion',
        component: Promotion,
        meta: {
            title: 'Продвижение сайтов в Москве',
            h1: 'Продвижение сайтов в&nbsp;Москве',
            offer: {
              title: 'Бесплатная настройка рекламы',
              subtitle: 'Подайте заявку на&nbsp;продвижение сайта и&nbsp;получите подарок - бесплатную настройку и&nbsp;ведение рекламы в&nbsp;Instagram.',
              link: '/quiz-promo'
            },
            metaTags: [
              {
                name: 'description',
                content: 'SEO-текст — это особый вид статей, оптимизированных для продвижения сайтов в поисковых системах в Москве. Главное отличие SEO-текста от обычного — наличие в первом ключевых запросов'
              },
              {
                property: 'og:description',
                content: 'SEO-текст — это особый вид статей, оптимизированных для продвижения сайтов в поисковых системах в Москве. Главное отличие SEO-текста от обычного — наличие в первом ключевых запросов'
              }
            ]
        }
    },
    { 
        path: '*', 
        redirect: '/' 
    }
];



export default new VueRouter({
    mode: 'history',
    scrollBehavior(to, from, savedPosition) {
        if (to.hash) {
            return {selector: to.hash}
        }else {
            return { x: 0, y: 0 }
        }
    },
    routes,
});