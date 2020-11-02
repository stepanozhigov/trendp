<template>
    <section class="project section-1" id="project">
        <div class="project__wrapper">
            <div class="project__items">
                <h3 class="project__items_item project-title title">Проекты</h3>
            </div>
        </div>
        <div class="project__slider" v-if="sliders.length > 0">
            <swiper :options="swiperOption" ref="mySwiper">
                <div class="project__slider_btn button-prev" slot="button-prev">
                    <svg class="icon">
                        <use xlink:href="#arrow-left"></use>
                    </svg>
                </div>
                <swiper-slide  v-for="slide in sliders" :key="slide.id">
                    <li class="project__slide">
                        <img :data-src="'/imagecache/large/'+slide.img" class="swiper-lazy">
                        <div class="swiper-lazy-preloader"></div>
                    </li>
                </swiper-slide>
                <div class="project__slider_btn button-next" slot="button-next">
                    <svg class="icon">
                        <use xlink:href="#arrow-right"></use>
                    </svg>
                </div>
            </swiper>
            <div class="project__slider_nav">
                <div class="project__slider_pagination" slot="pagination"></div>
                <button class="project__slider_link btn" @click="openModalForm('project')">Все проекты</button>
            </div>
        </div>
    </section>
</template>

<script>

import { mapGetters, mapActions } from 'vuex'
import Vue from 'vue';
import VueAwesomeSwiper from 'vue-awesome-swiper'
import 'swiper/dist/css/swiper.css'

Vue.use(VueAwesomeSwiper)



export default {
    data() {
        return {
            swiperOption: {
                slidesPerView: 4,
                spaceBetween: 0,
                loop: true,
                centeredSlides: true,
                initialSlide: 3,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false
                },
                lazy: {
                    loadPrevNext: true,
                },
                navigation: {
                    nextEl: '.button-next',
                    prevEl: '.button-prev'
                },
                pagination: {
                    el: '.project__slider_pagination'
                },
                breakpoints: {
                    992: {
                        slidesPerView: 2,
                        centeredSlides: false
                    },
                    480: {
                        slidesPerView: 1
                    }
                }
            }
        }
    },
    computed: {
        ...mapGetters([
            'sliders'
        ])
    },
    async mounted() {
        this.$store.dispatch('fetchSliders')
    },
    methods: {
        ...mapActions([
            'openModalForm'
        ])
    }
}
</script>