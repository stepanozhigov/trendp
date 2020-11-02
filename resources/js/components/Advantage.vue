<template>
    <section class="advantage section-1">
        <div class="advantage__wrapper">
            <div class="advantage__items">
                <div class="advantage__items_item">
                    <span class="advantage-link" @click.prevent="setActive(0)" :class="{ active: activeItem === 0 }" >Наши преимущества</span>
                    <span class="advantage-link" @click.prevent="setActive(1)" :class="{ active: activeItem === 1 }" >Плюсы наших сайтов</span>
                    <span class="advantage-link" @click.prevent="setActive(2)" :class="{ active: activeItem === 2 }" >Минусы дешёвых сайтов</span>
                </div>
            </div>
        </div>
        <div class="advantage__tab">
            <div v-for="(tab, key) in slideList" :key="key" v-if="activeItem === key" class="circle">
                <div class="circle__radius"></div>
                <div class="circle__slide">
                    <div v-for="(item, index) in tab.items" class="circle__items" :class="classObject(index)">
                        <div class="circle__items_img img" @mouseover="hover(index)">
                            <svg class="icon">
                                <use :xlink:href="item.img"></use>
                            </svg>
                        </div>
                        <div class="circle__items_text text" @mouseover="hover(index)" v-html="item.name"></div>
                    </div>
                </div>
                <div class="circle__controls">
                    <div class="circle__controls_item left" @click="change(active-1)">
                        <svg class="icon">
                            <use xlink:href="#arrow-left"></use>
                        </svg>
                    </div>
                    <div v-for="(item, index) in tab.items"  
                        v-show="index === active" 
                        v-html="item.text"
                        class="circle__controls_info"
                    >
                    </div>
                    <div class="circle__controls_item right" @click="change(active+1)">
                        <svg class="icon">
                            <use xlink:href="#arrow-right"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="advantage advantage__btn_block">
            <button class="btn advantage_btn" @click="openModalForm('cons')">Получить консультацию</button>
        </div>
    </section>
</template>

<script>

import { mapActions } from 'vuex'

    export default {
        data: function () {
            return {
                active: 1,
                prev: 0,
                next: 2,
                total: 6,
                activeItem: 0,
                slideList: [
                    {
                    items: [
                        { name: "Доступны 24/7", img: "#circle-5", text: "Мы всегда на связи, чтобы Ваш сайт работал как часы и&nbsp;ни один вопрос не оставался без ответа"},
                        { name: "Оплата за&nbsp;результат", img: "#circle-13",text: "Вы оплачиваете только после подписания акта сдачи-приёмки"},
                        { name: "Персональный менеджер", img: "#circle-15",text: "Будет работать с вами до окончания вашего проекта"},
                        { name: "Техническая поддержка", img: "#circle-17",text: "Поможет вам решить любую задачу"},
                        { name: "Возможность удалённой работы", img: "#circle-9",text: "Даёт возможность не приезжать в&nbsp;офис для обсуждения проекта и&nbsp;экономить время"},
                        { name: "Специалисты с&nbsp;сертификатами", img: "#circle-7",text: "Гарантия, что работа будет сделана качественно"}
                    ]
                    },
                    {
                    items: [
                        { name: "Эффективен в&nbsp;продвижении", img: "#circle-6", text: "Проектируем сайт для дальнейшего продвижения сразу"},
                        { name: "Современный дизайн", img: "#circle-14",text: "Главный успех вашего сайта —&nbsp;дизайн. Все детали продумываем до мелочей"},
                        { name: "Передовые технологии", img: "#circle-8",text: "Используем самые последние разработки IT&nbsp;-&nbsp;индустрии"},
                        { name: "Интеграция с&nbsp;1С&nbsp;и&nbsp;CRM", img: "#circle-18",text: "Настраиваем единый бизнес процесс: Сайт&nbsp;-&nbsp;1С&nbsp;-&nbsp;CRM"},
                        { name: "Адаптивность", img: "#circle-10",text: "На планшете и&nbsp;телефоне ваш сайт будет красивый и&nbsp;функциональный"},
                        { name: "Быстрая загрузка", img: "#circle-16",text: "Станицы сайта загружаются быстро и&nbsp;не теряют ваших клиентов"}
                    ]
                    },
                    {
                    items: [
                        { name: "Проблема с&nbsp;SEO", img: "#circle-1", text: "Сайты не&nbsp;спроектированы для продвижения SEO и&nbsp;рекламы"},
                        { name: "Шаблонность", img: "#circle-11",text: "Сайт делается на бесплатном и&nbsp;массовом шаблоне, который тяжело продвигается"},
                        { name: "Оплата вперёд", img: "#circle-2",text: "Есть риск стать заложником компании и&nbsp;потерять деньги"},
                        { name: "Дилетантство", img: "#circle-12",text: "Хороших сайтов мало из-за низкого уровня работы дизайнера, верстальщика, программиста"},
                        { name: "Технические ошибки", img: "#circle-4",text: "Проблемы с&nbsp;функционированием сайта, которые негативно сказываются на&nbsp;его работе и&nbsp;SEO-продвижении"},
                        { name: "Низкая скорость", img: "#circle-3",text: "Медленная скорость загрузки и&nbsp;работы сайта, из-за чего Вы теряете потенциальных клиентов"}
                    ]
                    }
                ]
            }
        },
        computed: {
            classObject: function () {
                return (index) => {
                    return {
                        active: index === this.active,
                        prev: index === this.prev,
                        next: index === this.next,
                        prev_prev: index === ((this.prev - 1)% this.total >= 0 ? (this.prev - 1)% this.total : this.total-1),
                        next_next : index === ((this.next + 1)% this.total)
                    }
                }
            }
        },
        methods: {
            ...mapActions([
                'openModalForm'
            ]),
            setActive (tabLink) {
                this.activeItem = tabLink
            },
            change(index) {
                this.active = (index + this.total) % this.total
                this.prev = ((index + this.total -1) % this.total)
                this.next = ((index + this.total +1) % this.total)
            },
            hover(index){
                this.active = index
                this.prev = ((index + this.total -1) % this.total)
                this.next = ((index + this.total +1) % this.total)
            }
        }
    }
</script>
