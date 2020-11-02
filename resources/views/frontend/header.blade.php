<header class="header" :class="{ open, sticky }" v-scroll="handleScroll">
    <div class="header__wrapper">
        <div class="header__items">
            <a href="/" class="header__items_item logo"><img src="img/logo.svg" alt="trend-p"></a>
            <div class="header__items_item contact">
                <a href="" class="whatsapp"><img src="img/whatsapp.svg" alt="WhatsApp">WhatsApp</a>
                <a href="" class="phone"><img src="img/phone.svg" alt="phone">8 800 333-22-68</a>
                <a href="" class="callback">Заказать звонок</a>
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
                    <li class="nav__items_item"><a href="">Продвижение</a></li>
                    <li class="nav__items_item active">Разработка</li>
                    <li class="nav__items_item"><a href="">Проекты</a></li>
                    <li class="nav__items_item"><a href="">Отзывы</a></li>
                    <li class="nav__items_item"><a href="">Контакты</a></li>
                </ul>
            </nav>
            <div class="header__overlay" :class="{'slide-to-right': slideToRight, 'slide-to-left': slideToLeft }"></div>
        </div>
    </div>    
</header>