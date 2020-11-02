<template>
    
    <div>
        <transition :duration="{ enter: 500, leave: 300 }" enter-active-class="animated zoomIn" leave-active-class="animated zoomOut" mode="out-in">
            <div v-if="step == 0">
            <header class="header">
                <div class="header__wrapper">
                    <div class="header__items">
                        <a href="/" class="header__items_item logo"><img src="img/gui/logo.svg" alt="trend-p"></a>
                        <div class="header__items_item contact">
                            <a href="tel:88003332268" class="phone">
                                <svg class="icon" width="10px" height="19px">
                                    <use xlink:href="#phone"></use>
                                </svg>
                                8 800 333-22-68
                            </a>
                            <div class="callback" @click.prevent="openModalForm('call')">Заказать звонок</div>
                        </div>
                    </div>
                </div>    
            </header>
            <section class="hero" v-if="step == 0">
                <div class="hero__wrapper">
                    <div class="hero__items">
                        <div class="hero__items_item">
                            <p class="hero_intro">Пройдите тест за&nbsp;30 секунд</p>
                            <h1 class="hero_title">Получите расчёт рекламной компании <span class="mark_orange">и&nbsp;подарок</span></h1>
                            <button class="btn btn-pulse"  @click="startQuiz">Получить расчёт и подарок</button>
                        </div>
                    </div>
                </div>
            </section>
            </div>
        </transition>
        <transition :duration="{ enter: 500, leave: 300 }" enter-active-class="animated zoomIn" leave-active-class="animated zoomOut" mode="out-in">
            <section class="quest" v-if="step >= 1">
                <div class="quest__wrapper">
                    <div class="quest__items">
                        <div class="quest__items_item quest_content" v-if="step == 1">
                            <p class="quest_intro">Вопрос 1/2</p>
                            <p class="quest_title">Какой источник рекламы интересует?</p>
                            <ul class="quest__list two_columns">
                                <li>
                                    <label for="opt-1-1" class="radio">
                                        <input type="radio" v-model="questions.type" id="opt-1-1" class="hidden" value="Яндекс"/>
                                        <span class="label"></span>Яндекс
                                    </label>
                                </li>
                                <li>
                                    <label for="opt-1-2" class="radio">
                                        <input type="radio" v-model="questions.type" id="opt-1-2" class="hidden" value="Google"/>
                                        <span class="label"></span>Google
                                    </label>
                                </li>
                                <li>
                                    <label for="opt-1-3" class="radio">
                                        <input type="radio" v-model="questions.type" id="opt-1-3" class="hidden" value="Instagram"/>
                                        <span class="label"></span>Instagram
                                    </label>
                                </li>
                                <li>
                                    <label for="opt-1-4" class="radio">
                                        <input type="radio" v-model="questions.type" id="opt-1-4" class="hidden" value="YouTube"/>
                                        <span class="label"></span>YouTube
                                    </label>
                                </li>
                                <li>
                                    <label for="opt-1-5" class="radio">
                                        <input type="radio" v-model="questions.type" id="opt-1-5" class="hidden" value="В контакте"/>
                                        <span class="label"></span>В контакте
                                    </label>
                                </li>
                                <li>
                                    <label for="opt-1-6" class="radio">
                                        <input type="radio" v-model="questions.type" id="opt-1-6" class="hidden" value="Другие"/>
                                        <span class="label"></span>Другие
                                    </label>
                                </li>
                                <li>
                                    <label for="opt-1-7" class="radio">
                                        <input type="radio" v-model="questions.type" id="opt-1-7" class="hidden" value="Не знаю"/>
                                        <span class="label"></span>Не знаю
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="quest__items_item quest_content" v-if="step == 2">
                            <p class="quest_intro">Вопрос 2/2</p>
                            <p class="quest_title">На какой бюджет вы рассчитываете?</p>
                            <ul class="quest__list">
                                <li>
                                    <label for="opt2-1" class="radio">
                                        <input type="radio" v-model="questions.price" id="opt2-1" class="hidden" value="До 20 000 руб."/>
                                        <span class="label"></span>До 20 000 <i class="rub">q</i>
                                    </label>
                                </li>
                                <li>
                                    <label for="opt2-2" class="radio">
                                        <input type="radio" v-model="questions.price" id="opt2-2" class="hidden" value="До 50 000 руб."/>
                                        <span class="label"></span>До 50 000 <i class="rub">q</i>
                                    </label>
                                </li>
                                <li>
                                    <label for="opt2-3" class="radio">
                                        <input type="radio" v-model="questions.price" id="opt2-3" class="hidden" value="До 100 000 руб."/>
                                        <span class="label"></span>До 100 000 <i class="rub">q</i>
                                    </label>
                                </li>
                                <li>
                                    <label for="opt2-4" class="radio">
                                        <input type="radio" v-model="questions.price" id="opt2-4" class="hidden" value="Более 100 000 руб."/>
                                        <span class="label"></span>Более 100 000 <i class="rub">q</i>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="quest__items_item quest_content" v-if="step == 3">
                            <p class="quest_intro">Подарок</p>
                            <p class="quest_title">Выберите подарок к&nbsp;вашему заказу</p>
                            <div class="gifts">
                                <transition name="slide-fade">
                                    <img :src="currentGift.img" 
                                        v-touch:swipe.left="nextGift" 
                                        v-touch:swipe.right="prevGift" 
                                        alt="" class="gifts_img">
                                </transition>
                                <div class="gifts__paginated">
                                    <span v-for="(gift, id) in gifts" :for="id" class="gifts__paginated_dot" :class="{active: questions.gift === id}"></span>
                                </div>
					        </div>
                        </div>
                        <div class="quest__items_item quest_content" v-if="step == 4">
                            <p class="quest_intro">Расчет</p>
                            <p class="quest_title">Получите коммерческое предложение и подарок</p>
                            <p class="quest_info">Введите номер телефона и&nbsp;получите коммерческое предложение на&nbsp;WhatsApp и&nbsp;СМС в&nbsp;течение <span class="mark">5&nbsp;минут.</span></p>
                            <masked-input 
                                type="tel" 
                                autocomplete="off" 
                                required
                                v-model="questions.phoneclear"
                                placeholder="Введите ваш номер*"
                                :mask="{
                                    pattern: '\+7 (V11) 111-11-11',
                                    formatCharacters: {
                                        'V': {
                                            validate: char => /[9]/.test(char)
                                        }, 
                                    }, 
                                }"
                                @input="questions.phone = arguments[1]"
                                class="input"
                            />
                        </div>
                        <div class="quest__items_item quest__control" v-if="step <= 4">
                            <button class="btn btn_prev"  @click="step--">←</button>
                            <button class="btn btn_next" v-if="step <= 3"  @click="step++">Далее →</button>
                            <button class="btn btn_next" v-if="step == 4" :disabled="!isPhoneValid"  @click="submitForm">Отправить</button>
                        </div>
                        <div class="quest__items_item quest_content finish" v-if="step == 5">
                            <p class="quest_intro finish">СПАСИБО!</p>
                            <p class="quest_title">Ваша заявка отправлена</p>
                            <a href="/" class="btn btn_next">Перейти на сайт</a>
                        </div>
                    </div>
                </div>
            </section>
        </transition>

        <modal v-if="modalForm" @close="closeModalForm">
     
            <div v-if="call" slot="content">
                <p class="modal-title">Заказать звонок</p>
                <p class="modal-intro">Оставьте ваши данные и специалист свяжется с&nbsp;вами в&nbsp;течение <span class="modal-marck">5&nbsp;минут</span></p>
                <form-component button="Заказать звонок" tag="Заказ звонока"></form-component>
                <p class="alarm">Оставляя контактную информацию, вы соглашаетесь на обработку персональных данных</p>
            </div>

            <div v-if="success" slot="content">
                <p class="modal-title">Спасибо, заявка отправлена</p>
                <p class="modal-intro">Наш специалист свяжется с&nbsp;вами в&nbsp;течение <span class="modal-marck">5&nbsp;минут</span></p>
            </div>

            <div v-if="isSended" slot="content">
                <p class="modal-title isSended">Вы уже отправляли заявку!</p>
                <p class="modal-intro isSended">В&nbsp;ближайшее время мы свяжется с&nbsp;вами.</p>
            </div>

        </modal>

    </div>

</template>
<script>
    import { mapGetters, mapActions } from 'vuex'
    import MaskedInput from 'vue-masked-input'
    import Vue2TouchEvents from 'vue2-touch-events'
    Vue.use(Vue2TouchEvents)
    import axios from 'axios'
    import VueCookie from 'vue-cookie'
    Vue.use(VueCookie)
    Vue.component('FormComponent', require('../components/FormComponent.vue').default);
    Vue.component('modal', require('../components/ModalForm.vue').default)
    const pattern = /^[0-9]+$/;

    export default {
        data: function () {
            return {
                step: 0,
                questions: {
					type: 'Не знаю',
					price: 'До 100 000 руб.',
					phone: '',
                    phoneclear: '',
                    gift: 0,

				},
                gifts: [
                    {
						title: 'Консультация с маркетологом',
						img: 'img/quiz/gift_promo_1.jpg' 
					},
					{
						title: 'Купон 5000 руб',
						img: 'img/quiz/gift_1.jpg'
					},
					{
						title: 'Анализ сайта',
						img: 'img/quiz/gift_promo_3.jpg'
					},
					{
						title: 'Настройка рекламы',
						img: 'img/quiz/gift_promo_4.jpg'
					}
				]
            }
        },
        computed: {
            ...mapGetters([
                'modalForm',
                'call',
                'success', 
                'isSended'
            ]),
            isPhoneValid() {
                return pattern.test(this.questions.phone)
            },
            currentGift: function () {
				return this.gifts[this.questions.gift];
			}
        },
        methods: {
            ...mapActions([
                'openModalForm',
                'closeModalForm'
            ]),
            startQuiz() {
                if(Vue.cookie.get('form_send')){
                    this.openModalForm('isSended')
                }else{
                    this.step = 1
                }
            },
            submitForm (e){
                e.preventDefault();

                axios.post('/leads', {
                    phone: '8'+this.questions.phone,
                    text: 'Источник рекламы: '+this.questions.type+
                          '\nБюджет: '+this.questions.price+
                          '\nПодарок: '+ this.gifts[this.questions.gift].title,
                    tag: 'Квиз Продвижение',
                    quiz: true
                }).then(response => (
                    this.step = 5,
                    Vue.cookie.set('form_send', true, 1),
                    window.yaCounter44460466.reachGoal('quiz-promo'),
                    ga.getAll()[0].send('event', 'quiz-promo', 'send'),
                    setTimeout(() => {
                        window.location.href = '/promotion'
                    }, 4000)
                ))
            },
            nextGift: function () {
				let count = this.gifts.length,
					next = this.questions.gift + 1;

				if (next > count - 1) {
					next = 0;
				}
				this.questions.gift = next;
			},
            prevGift: function () {
				let count = this.gifts.length,
					prev = this.questions.gift - 1;
                    
				if (prev < 0) {
					prev = count - 1;
				}
				this.questions.gift = prev;
			}
        },
        components: { 
            MaskedInput
        }
    }
</script>
