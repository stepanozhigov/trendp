<template>
    <section class="services section-2" id="services">
        <div class="services__wrapper">
            <div class="services__items">
                <div class="services__items_item services-title">
                    <h3 class="title">Услуги</h3> 
                </div>
                <div class="services__items_item services__btn services__btn_top">
                    <button class="btn" @click="openModalForm('serv')">Заказать сайт</button>  
                </div>
                <p class="services__items_item services-text">
                    Мы разрабатываем сайты с фирменным дизайноми и создадим поток новых клиентов 
                    на ваш сайт с помощью рекламы в Instagram, Yandex и Google за 3 дня.
                </p>
            </div>
            <div class="services__items services-cats">
                <div class="services__items_item cart" ref="cart1">
                    <div class="cart__flipper">
                        <div class="cart__front"  @click="$refs.cart1.classList.toggle('open'), 
                                                          $refs.cart2.classList.remove('open'),
                                                          $refs.cart3.classList.remove('open'),
                                                          $refs.cart4.classList.remove('open')">
                            <svg class="icon cart__img" width="67px" height="72px">
                                <use xlink:href="#services-1"></use>
                            </svg>
                            <div class="cart__name">Визитка</div>
                            <ul class="cart__descr">
                                <li>Одностраничный сайт</li>
                                <li>Содержит основную информацию</li>
                                <li>Простой интерфейс</li>
                            </ul>
                            <div class="cart__time">Разработка 3 дня</div>
                            <div class="cart__price">
                                <span>от</span> 25 000
                                <svg class="icon" width="21px" height="27px">
                                    <use xlink:href="#ruble"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="cart__back">
                            <svg class="icon cart__back_close close" width="20px" height="20px" @click="$refs.cart1.classList.toggle('open')">
                                <use xlink:href="#close"></use>
                            </svg>
                            <div class="cart__back_name">Заказать расчёт</div>
                            <div class="cart__back_info">Оставьте заявку и&nbsp;наш специалист перезвонит вам <span>в&nbsp;течение 5&nbsp;минут</span></div>
                            <form-component button="Заказать расчёт" tag="Расчет визитки"></form-component>
                            <p class="alarm">Оставляя контактную информацию, вы соглашаетесь на&nbsp;обработку персональных данных</p>
                        </div>
                    </div>
                </div>
                <div class="services__items_item cart" ref="cart2">
                    <div class="cart__flipper">
                        <div class="cart__front"  @click="$refs.cart1.classList.remove('open'), 
                                                          $refs.cart2.classList.toggle('open'),
                                                          $refs.cart3.classList.remove('open'),
                                                          $refs.cart4.classList.remove('open')">
                            <svg class="icon cart__img" width="49px" height="72px">
                                <use xlink:href="#services-2"></use>
                            </svg>
                            <div class="cart__name">Лендинг</div>
                            <ul class="cart__descr">
                                <li>Одностраничный сайт</li>
                                <li>Собирает заявки и&nbsp;звонки от ваших клиентов</li>
                                <li>Оптимален для рекламы</li>
                            </ul>
                            <div class="cart__time">Разработка 10 дней</div>
                            <div class="cart__price">
                                <span>от</span> 50 000
                                <svg class="icon" width="21px" height="27px">
                                    <use xlink:href="#ruble"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="cart__back">
                            <svg class="icon cart__back_close close" width="20px" height="20px" @click="$refs.cart2.classList.toggle('open')">
                                <use xlink:href="#close"></use>
                            </svg>
                            <div class="cart__back_name">Заказать расчет</div>
                            <div class="cart__back_info">Оставьте заявку и&nbsp;наш специалист перезвонит вам <span>в&nbsp;течение 5&nbsp;минут</span></div>
                            <form-component button="Расчитать" tag="Расчет лендинга"></form-component>
                            <p class="alarm">Оставляя контактную информацию, вы соглашаетесь на&nbsp;обработку персональных данных</p>
                        </div>
                    </div>
                </div>
                <div class="services__items_item cart" ref="cart3">
                    <div class="cart__flipper">
                        <div class="cart__front" @click="$refs.cart1.classList.remove('open'), 
                                                         $refs.cart2.classList.remove('open'),
                                                         $refs.cart3.classList.toggle('open'),
                                                         $refs.cart4.classList.remove('open')">
                            <svg class="icon cart__img" width="60px" height="72px">
                                <use xlink:href="#services-3"></use>
                            </svg>
                            <div class="cart__name">Каталог</div>
                            <ul class="cart__descr">
                                <li>Многостраничный сайт</li>
                                <li>Оптимальный вариант для корпоративного сайта</li>
                                <li>Корпоративный сайт</li>
                            </ul>
                            <div class="cart__time">Разработка 15 дней</div>
                            <div class="cart__price">
                                <span>от</span> 120 000
                                <svg class="icon" width="21px" height="27px">
                                    <use xlink:href="#ruble"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="cart__back">
                            <svg class="icon cart__back_close close" width="20px" height="20px" @click="$refs.cart3.classList.toggle('open')">
                                <use xlink:href="#close"></use>
                            </svg>
                            <div class="cart__back_name">Заказать расчет</div>
                            <div class="cart__back_info">Оставьте заявку и&nbsp;наш специалист перезвонит вам <span>в&nbsp;течение 5&nbsp;минут</span></div>
                            <form-component button="Расчитать" tag="Расчет каталога"></form-component>
                            <p class="alarm">Оставляя контактную информацию, вы соглашаетесь на&nbsp;обработку персональных данных</p>
                        </div>
                    </div>
                </div>
                <div class="services__items_item cart" ref="cart4">
                    <div class="cart__flipper">
                        <div class="cart__front" @click="$refs.cart1.classList.remove('open'), 
                                                         $refs.cart2.classList.remove('open'),
                                                         $refs.cart3.classList.remove('open'),
                                                         $refs.cart4.classList.toggle('open')">
                            <svg class="icon cart__img" width="80px" height="72px">
                                <use xlink:href="#services-4"></use>
                            </svg>
                            <div class="cart__name">Магазин</div>
                            <ul class="cart__descr">
                                <li>Многостраничный сайт</li>
                                <li>Представляет товары и услуги подробно</li>
                                <li>Оплата и доставка</li>
                            </ul>
                            <div class="cart__time">Разработка 25 дней</div>
                            <div class="cart__price">
                                <span>от</span> 150 000
                                <svg class="icon" width="21px" height="27px">
                                    <use xlink:href="#ruble"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="cart__back">
                            <svg class="icon cart__back_close close" width="20px" height="20px" @click="$refs.cart4.classList.toggle('open')">
                                <use xlink:href="#close"></use>
                            </svg>
                            <div class="cart__back_name">Заказать расчет</div>
                            <div class="cart__back_info">Оставьте заявку и&nbsp;наш специалист перезвонит вам <span>в&nbsp;течение 5&nbsp;минут</span></div>
                            <form-component button="Расчитать" tag="Расчет интернет-магазина"></form-component>
                            <p class="alarm">Оставляя контактную информацию, вы соглашаетесь на&nbsp;обработку персональных данных</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services__items">
                <div class="services__items_item services__btn services__btn_bottom">
                    <button class="btn" @click="openModalForm('serv')">Заказать сайт</button>  
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'

export default {
    methods: {
        ...mapActions([
            'openModalForm'
        ])
    }
}
</script>

