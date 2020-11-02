@extends('layouts.site')

@section('banner')

    @include('frontend.banner')

@endsection

@section('content')

    @include('frontend.offer.new_year')

    @include('frontend.project_slider')

    <section class="services section-2">
        <div class="services__wrapper">
            <div class="services__items">
                <div class="services__items_item services-title">
                    <h3 class="title">Услуги</h3> 
                    <a href="" class="services-btn btn"><span class="">Расчитать проект</span></a>
                </div>
                <p class="services__items_item services-text">
                    Мы разрабатываем сайты с помощью готовых шаблонов до индивидуальных проектов с фирменным дизайном. 
                        Приведём клиентов на ваш сайт с помощью рекламы в Instagram, Yandex и Google за 3 дня.
                </p>
            </div>
            <div class="services__items services-cats">
                <div class="services__items_item cart" ref="cart1">
                    <div class="cart__flipper">
                        <div class="cart__front"  @click="$refs.cart1.classList.toggle('open')">
                            <img src="img/services/services-1.svg" alt="Визитка" class="cart__img">
                            <div class="cart__name">Визитка</div>
                            <ul class="cart__descr">
                                <li>Одностраничный сайт</li>
                                <li>Содержит основную информацию</li>
                                <li>Простой интерфейс</li>
                            </ul>
                            <div class="cart__time">Разработка 3 дня</div>
                            <div class="cart__price">
                                <span>от</span> 25 000
                                <svg width="21px" height="27px" viewBox="0 0 21 27" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="3-Dev" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Trend-Pro_1920-3_price-1" transform="translate(-562.000000, -724.000000)" fill="#505050">
                                            <g id="Vizitka" transform="translate(370.000000, 385.000000)">
                                                <path d="M192.874,352.016 L196.028,352.016 L196.028,339.4 L203.096,339.4 C204.793342,339.4 206.237327,339.634331 207.428,340.103 C208.618673,340.571669 209.587663,341.192329 210.335,341.965 C211.082337,342.737671 211.626998,343.636995 211.969,344.663 C212.311002,345.689005 212.482,346.746661 212.482,347.836 C212.482,348.950672 212.311002,350.001995 211.969,350.99 C211.626998,351.978005 211.082337,352.851996 210.335,353.612 C209.587663,354.372004 208.618673,354.973664 207.428,355.417 C206.237327,355.860336 204.793342,356.082 203.096,356.082 L200.968,356.082 L200.968,358.97 L207.656,358.97 L207.656,362.884 L200.968,362.884 L200.968,366 L196.028,366 L196.028,362.884 L192.874,362.884 L192.874,358.97 L196.028,358.97 L196.028,356.082 L192.874,356.082 L192.874,352.016 Z M202.602,352.016 C203.286003,352.016 203.925664,351.959001 204.521,351.845 C205.116336,351.730999 205.641998,351.522002 206.098,351.218 C206.554002,350.913998 206.908665,350.489669 207.162,349.945 C207.415335,349.400331 207.542,348.697338 207.542,347.836 C207.542,346.974662 207.415335,346.25267 207.162,345.67 C206.908665,345.08733 206.554002,344.625002 206.098,344.283 C205.641998,343.940998 205.116336,343.700334 204.521,343.561 C203.925664,343.421666 203.286003,343.352 202.602,343.352 L200.968,343.352 L200.968,352.016 L202.602,352.016 Z" id="₽"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="cart__back">
                            <img src="img/close.svg" alt="close" class="cart__back_close close" @click="$refs.cart1.classList.toggle('open')">
                            <div class="cart__back_name">Заказать расчет</div>
                            <div class="cart__back_info">Оставьте заявку и наш специалист перезвонит вам <span>в течение 5 минут</span></div>
                            <form-component button="Расчитать" tag="Расчет визитки"></form-component>
                            <p class="alarm">Оставляя контактную информацию, вы соглашаетесь на обработку персональных данных</p>
                        </div>
                    </div>
                </div>
                <div class="services__items_item cart" ref="cart2">
                    <div class="cart__flipper">
                        <div class="cart__front"  @click="$refs.cart2.classList.toggle('open')">
                            <img src="img/services/services-2.svg" alt="Лендинг" class="cart__img">
                            <div class="cart__name">Лендинг</div>
                            <ul class="cart__descr">
                                <li>Одностраничный сайт</li>
                                <li>Собирает заявки и звонки от ваших клиентов</li>
                                <li>Оптимален для рекламы</li>
                            </ul>
                            <div class="cart__time">Разработка 10 дней</div>
                            <div class="cart__price">
                                <span>от</span> 35 000
                                <svg width="21px" height="27px" viewBox="0 0 21 27" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="3-Dev" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Trend-Pro_1920-3_price-1" transform="translate(-562.000000, -724.000000)" fill="#505050">
                                            <g id="Vizitka" transform="translate(370.000000, 385.000000)">
                                                <path d="M192.874,352.016 L196.028,352.016 L196.028,339.4 L203.096,339.4 C204.793342,339.4 206.237327,339.634331 207.428,340.103 C208.618673,340.571669 209.587663,341.192329 210.335,341.965 C211.082337,342.737671 211.626998,343.636995 211.969,344.663 C212.311002,345.689005 212.482,346.746661 212.482,347.836 C212.482,348.950672 212.311002,350.001995 211.969,350.99 C211.626998,351.978005 211.082337,352.851996 210.335,353.612 C209.587663,354.372004 208.618673,354.973664 207.428,355.417 C206.237327,355.860336 204.793342,356.082 203.096,356.082 L200.968,356.082 L200.968,358.97 L207.656,358.97 L207.656,362.884 L200.968,362.884 L200.968,366 L196.028,366 L196.028,362.884 L192.874,362.884 L192.874,358.97 L196.028,358.97 L196.028,356.082 L192.874,356.082 L192.874,352.016 Z M202.602,352.016 C203.286003,352.016 203.925664,351.959001 204.521,351.845 C205.116336,351.730999 205.641998,351.522002 206.098,351.218 C206.554002,350.913998 206.908665,350.489669 207.162,349.945 C207.415335,349.400331 207.542,348.697338 207.542,347.836 C207.542,346.974662 207.415335,346.25267 207.162,345.67 C206.908665,345.08733 206.554002,344.625002 206.098,344.283 C205.641998,343.940998 205.116336,343.700334 204.521,343.561 C203.925664,343.421666 203.286003,343.352 202.602,343.352 L200.968,343.352 L200.968,352.016 L202.602,352.016 Z" id="₽"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="cart__back">
                            <img src="img/close.svg" alt="close" class="cart__back_close close" @click="$refs.cart2.classList.toggle('open')">
                            <div class="cart__back_name">Заказать расчет</div>
                            <div class="cart__back_info">Оставьте заявку и наш специалист перезвонит вам <span>в течение 5 минут</span></div>
                            <form-component button="Расчитать" tag="Расчет лендинга"></form-component>
                            <p class="alarm">Оставляя контактную информацию, вы соглашаетесь на обработку персональных данных</p>
                        </div>
                    </div>
                </div>
                <div class="services__items_item cart" ref="cart3">
                    <div class="cart__flipper">
                        <div class="cart__front" @click="$refs.cart3.classList.toggle('open')">
                            <img src="img/services/services-3.svg" alt="Каталог" class="cart__img">
                            <div class="cart__name">Каталог</div>
                            <ul class="cart__descr">
                                <li>Многостраничный сайт</li>
                                <li>Оптимальный вариант для корпоративного сайта</li>
                                <li>Корпоративный сайт</li>
                            </ul>
                            <div class="cart__time">Разработка 15 дней</div>
                            <div class="cart__price">
                                <span>от</span> 35 000
                                <svg width="21px" height="27px" viewBox="0 0 21 27" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="3-Dev" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Trend-Pro_1920-3_price-1" transform="translate(-562.000000, -724.000000)" fill="#505050">
                                            <g id="Vizitka" transform="translate(370.000000, 385.000000)">
                                                <path d="M192.874,352.016 L196.028,352.016 L196.028,339.4 L203.096,339.4 C204.793342,339.4 206.237327,339.634331 207.428,340.103 C208.618673,340.571669 209.587663,341.192329 210.335,341.965 C211.082337,342.737671 211.626998,343.636995 211.969,344.663 C212.311002,345.689005 212.482,346.746661 212.482,347.836 C212.482,348.950672 212.311002,350.001995 211.969,350.99 C211.626998,351.978005 211.082337,352.851996 210.335,353.612 C209.587663,354.372004 208.618673,354.973664 207.428,355.417 C206.237327,355.860336 204.793342,356.082 203.096,356.082 L200.968,356.082 L200.968,358.97 L207.656,358.97 L207.656,362.884 L200.968,362.884 L200.968,366 L196.028,366 L196.028,362.884 L192.874,362.884 L192.874,358.97 L196.028,358.97 L196.028,356.082 L192.874,356.082 L192.874,352.016 Z M202.602,352.016 C203.286003,352.016 203.925664,351.959001 204.521,351.845 C205.116336,351.730999 205.641998,351.522002 206.098,351.218 C206.554002,350.913998 206.908665,350.489669 207.162,349.945 C207.415335,349.400331 207.542,348.697338 207.542,347.836 C207.542,346.974662 207.415335,346.25267 207.162,345.67 C206.908665,345.08733 206.554002,344.625002 206.098,344.283 C205.641998,343.940998 205.116336,343.700334 204.521,343.561 C203.925664,343.421666 203.286003,343.352 202.602,343.352 L200.968,343.352 L200.968,352.016 L202.602,352.016 Z" id="₽"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="cart__back">
                            <img src="img/close.svg" alt="close" class="cart__back_close close" @click="$refs.cart3.classList.toggle('open')">
                            <div class="cart__back_name">Заказать расчет</div>
                            <div class="cart__back_info">Оставьте заявку и наш специалист перезвонит вам <span>в течение 5 минут</span></div>
                            <form-component button="Расчитать" tag="Расчет каталога"></form-component>
                            <p class="alarm">Оставляя контактную информацию, вы соглашаетесь на обработку персональных данных</p>
                        </div>
                    </div>
                </div>
                <div class="services__items_item cart" ref="cart4">
                    <div class="cart__flipper">
                        <div class="cart__front" @click="$refs.cart4.classList.toggle('open')">
                            <img src="img/services/services-4.svg" alt="Магазин" class="cart__img">
                            <div class="cart__name">Магазин</div>
                            <ul class="cart__descr">
                                <li>Многостраничный сайт</li>
                                <li>Представляет товары и услуги подробно</li>
                                <li>Оплата и доставка</li>
                            </ul>
                            <div class="cart__time">Разработка 25 дней</div>
                            <div class="cart__price">
                                <span>от</span> 60 000
                                <svg width="21px" height="27px" viewBox="0 0 21 27" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="3-Dev" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Trend-Pro_1920-3_price-1" transform="translate(-562.000000, -724.000000)" fill="#505050">
                                            <g id="Vizitka" transform="translate(370.000000, 385.000000)">
                                                <path d="M192.874,352.016 L196.028,352.016 L196.028,339.4 L203.096,339.4 C204.793342,339.4 206.237327,339.634331 207.428,340.103 C208.618673,340.571669 209.587663,341.192329 210.335,341.965 C211.082337,342.737671 211.626998,343.636995 211.969,344.663 C212.311002,345.689005 212.482,346.746661 212.482,347.836 C212.482,348.950672 212.311002,350.001995 211.969,350.99 C211.626998,351.978005 211.082337,352.851996 210.335,353.612 C209.587663,354.372004 208.618673,354.973664 207.428,355.417 C206.237327,355.860336 204.793342,356.082 203.096,356.082 L200.968,356.082 L200.968,358.97 L207.656,358.97 L207.656,362.884 L200.968,362.884 L200.968,366 L196.028,366 L196.028,362.884 L192.874,362.884 L192.874,358.97 L196.028,358.97 L196.028,356.082 L192.874,356.082 L192.874,352.016 Z M202.602,352.016 C203.286003,352.016 203.925664,351.959001 204.521,351.845 C205.116336,351.730999 205.641998,351.522002 206.098,351.218 C206.554002,350.913998 206.908665,350.489669 207.162,349.945 C207.415335,349.400331 207.542,348.697338 207.542,347.836 C207.542,346.974662 207.415335,346.25267 207.162,345.67 C206.908665,345.08733 206.554002,344.625002 206.098,344.283 C205.641998,343.940998 205.116336,343.700334 204.521,343.561 C203.925664,343.421666 203.286003,343.352 202.602,343.352 L200.968,343.352 L200.968,352.016 L202.602,352.016 Z" id="₽"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="cart__back">
                            <img src="img/close.svg" alt="close" class="cart__back_close close" @click="$refs.cart4.classList.toggle('open')">
                            <div class="cart__back_name">Заказать расчет</div>
                            <div class="cart__back_info">Оставьте заявку и наш специалист перезвонит вам <span>в течение 5 минут</span></div>
                            <form-component button="Расчитать" tag="Расчет интернет-магазина"></form-component>
                            <p class="alarm">Оставляя контактную информацию, вы соглашаетесь на обработку персональных данных</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sale">
        <div class="sale__wrapper">
            <div class="sale__items">
                <div class="sale__items_item">
                    <p class="sale-sm">Нашли дешевле?</p>
                    <p class="sale-offer">Сделаем скидку!</p>
                    <p class="sale-sm">от цены конкурента</p>
                    <p class="sale-price">-3000 Р</p>
                </div>
            </div>
        </div>
    </section>

    <section id="advantage"></section>    

    <section class="director section-2">
        <div class="director__wrapper">
            <div class="director__items">
                <div class="director__items_item director-img">
                    <picture>
                        <source type="image/webp" srcset="/img/director_img.webp">
                        <img src="/img/director_img.jpg" alt="Директор">
                    </picture>
                </div>
                <div class="director__items_item director-text">
                    <h3 class="director-title title">Директор всегда на связи</h3>
                    <p class="director-par">Я принимаю абсолютно все жалобы и предложения для улучшения качества работы и сервиса. В течение 24 часов ваше обращение будет мною рассмотрено и вы получите ответ.</p>
                    <p class="director-par">Вы можете использовать для связи привычную социальную сеть или форму обратной связи.</p>
                    <div class="director__sign">
                        <p class="director__sign_text">Александр Репин</p>
                        <picture>
                            <source type="image/webp" srcset="/img/director_sign.webp">
                            <img src="/img/director_sign.png" alt="Директор" class="director__sign_img">
                        </picture>
                    </div>
                    <button class="btn director-btn"><img src="img/instagram.svg" alt="Инстаграм">Написать в Инстаграм</button>
                </div>
            </div>
        </div>
    </section>

    
@endsection

@section('scripts')

    @include('frontend.svg_sprite')

@endsection
