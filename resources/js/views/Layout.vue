<template>
    <div>
        <header class="header" :class="{ open, sticky }" v-scroll="fixedMenu">
            <div class="header__wrapper">
                <div class="header__items">
                    <router-link to="/" class="header__items_item logo"><img src="img/gui/logo.svg" alt="trend-p"></router-link>
                    <div class="header__items_item contact">
                        <a href="" class="whatsapp">
                            <svg class="icon" width="16px" height="19px">
                                <use xlink:href="#whatsapp"></use>
                            </svg>
                            WhatsApp
                        </a>
                        <a href="tel:88003332268" class="phone">
                            <svg class="icon" width="10px" height="19px">
                                <use xlink:href="#phone"></use>
                            </svg>
                            8 800 333-22-68
                        </a>
                        <div class="callback" @click="openModalForm('call')">Заказать звонок</div>
                        <i class="hamburger__icon" @click="openMenu" :class="{ open }">
                            <span></span>
                            <span></span>
                            <span></span>
                        </i>
                    </div>
                    <div class="header__items_item hamburger">
                        <i class="hamburger__icon" @click="openMenu" :class="{ open }">
                            <span></span>
                            <span></span>
                            <span></span>
                        </i>
                    </div>
                    <nav class="header__items_item nav">
                        <div class="nav__sliders"></div>
                        <div class="nav__sliders"></div>
                        <div class="nav__sliders"></div>
                        <ul class="nav__items">
                            <li class="nav__items_item" @click="openMenu"><router-link to="/">Главная</router-link></li>
                            <li class="nav__items_item" @click="openMenu"><router-link to="/promotion">Продвижение</router-link></li>
                        </ul>
                    </nav>
                    <div class="header__overlay" :class="{'slide-to-right': slideToRight, 'slide-to-left': slideToLeft }"></div>
                </div>
            </div>    
        </header>
        <section class="hero" ref="infoBox">
            <div class="hero__wrapper">
                <div class="hero__items">
                    <div class="hero__items_item">
                        <p class="hero_intro">Без предоплаты</p>
                        <h1 class="hero_title" v-html="pageH1"></h1>
                        <p class="hero_subtitle">Оставьте заявку и&nbsp;получите подробное коммерческое предложение на&nbsp;WhatsApp и&nbsp;СМС в&nbsp;течение 5&nbsp;минут и&nbsp;подарок.</p>
                        <form-component 
                            button="Получить расчёт" 
                            tag="Главный баннер"
                            classTag="btn-pulse"
                        ></form-component>
                    </div>
                </div>
            </div>
        </section>

        <offer></offer>

        <router-view></router-view>

        <footer class="footer">
            <div class="footer__wrapper finish">
                <div class="footer__items">
                    <h3 class="footer__items_item finish_title">Не устроила стоимость?</h3>
                    <p class="footer__items_item finish_info">Оставьте заявку на снижение стоимости вашего проекта и&nbsp;мы обязательно реализуем его на&nbsp;ваших условиях.</p>
                </div>
                <form-component button="Оставить заявку" tag="Купон"></form-component>
            </div>

            <div class="footer__wrapper bottom">
                <div class="footer__items">
                    <div class="footer__items_item bottom__item bottom__logo">
                        <svg class="icon" width="176px" height="48px">
                            <use xlink:href="#logo_white"></use>
                        </svg>
                        <p class="copy">ООО “Trend Pro” © 2013—2020</p>
                    </div>
                    <div class="footer__items_item bottom__item bottom__office">
                        <div class="bottom_label">Центральный офис</div>
                        <div class="bottom_phone">
                            <a href="tel:88003332268">8 800 333-22-68</a>
                            <span>Круглосуточно | Бесплатно</span>
                        </div>
                        <p class="bottom_address">г. Москва, ул. Вятская, 70</p> 
                        <a href="mailto:info@trend-p.ru" class="bottom_mail">info@trend-p.ru</a>
                        <ul class="bottom_social">
                            <li>
                                <a href="https://www.instagram.com/trend.pro.studio/" target="_blank">
                                    <svg class="icon" width="20px" height="20px">
                                        <use xlink:href="#instagram"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <p class="copy">ООО “Trend Pro” © 2013—2020</p>
                    </div>
                    <div class="footer__items_item bottom__item bottom__menu">
                        <div class="bottom_label">Разделы</div>
                        <ul class="bottom__nav">
                            <li class="bottom__nav_item"><router-link to="/promotion">Продвижение</router-link></li>
                            <li class="bottom__nav_item"><router-link to="/#project">Портфолио</router-link></li>
                            <li class="bottom__nav_item"><router-link to="/#services">Услуги</router-link></li>
                        </ul>
                    </div>
                    <div v-if="vacancys.length" class="footer__items_item bottom__item bottom__hh">
                        <div class="bottom_label">Вакансии</div>
                        <ul class="bottom__nav">
                            <li v-for="{ title, linck_hh } in vacancys" class="bottom__nav_item"><a :href="linck_hh" target="_blank">{{ title }}</a></li>
                        </ul>
                    </div>
                </div> 
            </div>
        </footer>

        <modal v-if="modalForm" @close="closeModalForm">
     
            <div v-if="call" slot="content">
                <p class="modal-title">Заказать звонок</p>
                <p class="modal-intro">Оставьте ваши данные и&nbsp;специалист свяжется с&nbsp;вами <span class="modal-marck">в&nbsp;течение 5&nbsp;минут</span></p>
                <form-component button="Заказать звонок" tag="Заказ звонока"></form-component>
                <p class="alarm">Оставляя контактную информацию, вы соглашаетесь на обработку персональных данных</p>
            </div>
    
            <div v-if="cons" slot="content">
                <p class="modal-title">Получить консультацию</p>
                <p class="modal-intro">Оставьте ваши данные и&nbsp;специалист свяжется с&nbsp;вами <span class="modal-marck">в&nbsp;течение 5&nbsp;минут</span></p>
                <form-component button="Получить консультацию" tag="Получить консультацию"></form-component>
                <p class="alarm">Оставляя контактную информацию, вы соглашаетесь на обработку персональных данных</p>
            </div>

            <div v-if="serv" slot="content">
                <p class="modal-title">Заказать сайт</p>
                <p class="modal-intro">Оставьте ваши данные и&nbsp;специалист свяжется с&nbsp;вами <span class="modal-marck">в&nbsp;течение 5&nbsp;минут</span></p>
                <form-component button="Заказать сайт" tag="Заказ сайта"></form-component>
                <p class="alarm">Оставляя контактную информацию, вы соглашаетесь на обработку персональных данных</p>
            </div>
        
            <div v-if="project" slot="content">
                <p class="modal-title">Получить портфолио</p>
                <p class="modal-intro">Оставьте ваши данные и&nbsp;специалист свяжется с&nbsp;вами <span class="modal-marck">в&nbsp;течение 5&nbsp;минут</span></p>
                <form-component button="Получить портфолио" tag="Портфолио"></form-component>
                <p class="alarm">Оставляя контактную информацию, вы соглашаетесь на обработку персональных данных</p>
            </div>

            <div v-if="success" slot="content">
                <p class="modal-title">Спасибо, заявка отправлена</p>
                <p class="modal-intro">Наш специалист свяжется с&nbsp;вами <span class="modal-marck">в&nbsp;течение 5&nbsp;минут</span></p>
            </div>
 
            <div v-if="isSended" slot="content">
                <p class="modal-title isSended">Вы уже отправляли заявку!</p>
                <p class="modal-intro isSended">В ближайшее время мы свяжется с&nbsp;вами.</p>
            </div>

        </modal>

    </div> 
</template>

<script>

import { mapGetters, mapActions } from 'vuex'
import offer from './offer/OfferNY'

Vue.component('FormComponent', require('../components/FormComponent.vue').default);
Vue.component('modal', require('../components/ModalForm.vue').default)

Vue.directive('scroll', {
    inserted: function(el, binding) {
      let f = function(evt) {
        if (binding.value(evt, el)) {
          window.removeEventListener('scroll', f);
        }
      };
      window.addEventListener('scroll', f);
    },
});

export default {

    computed: {
        ...mapGetters([
            'open', 
            'slideToLeft', 
            'slideToRight', 
            'sticky', 
            'vacancys',
            'modalForm',
            'call', 
            'cons',
            'serv', 
            'project', 
            'success', 
            'isSended'
        ]),
        pageH1: function() {
            return this.$route.meta.h1
        }
    },
    methods: {
        ...mapActions([
            'openMenu',
            'stickyToggle',
            'openModalForm',
            'closeModalForm'
        ]),
        fixedMenu (evt, el) {
            if (window.scrollY > this.$refs.infoBox.clientHeight) {
                this.stickyToggle(true)
            }else{
                this.stickyToggle(false)
            }
        }
    },
    async mounted() {
        this.$store.dispatch('fetchVacancys')
    },
    components: { offer }
}
</script>