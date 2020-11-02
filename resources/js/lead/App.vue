<template>
    <div class="wrapper">
        <header class="header">
            <div class="header__wrapper">
                <div class="header__items">
                    <div class="header__items_item">
                        <img src="/images/lead/logo.svg" alt="Твой Стиль">
                    </div>
                    <div class="header__items_item header__phone">
                        <a href="tel:88003332268" class="header__phone_link">8 800 333-22-68</a>
                        <span
                            class="header__phone_btn"
                            @click="toogleModal('Заказать звонок', 'Заказать звонок')"
                        >
                            Заказать звонок
                        </span>
                    </div>
                </div>
            </div>
        </header>
        <section class="content">
            <div class="content__wrapper">
                <div class="content__items">
                    <div class="content__items_item">
                        <p class="content_intro"></p>
                        <h1 class="content_title">
                            Продвижение вашего бизнеса с&nbsp;помощью рекламы в&nbsp;Google, Яндекс и&nbsp;Instagram.
                            Оплата за&nbsp;результат!
                        </h1>
                        <p class="content_text">
                            Оставьте заявку и&nbsp;мы&nbsp;вышлем вам&nbsp;коммерческое предложение на&nbsp;WhatsApp и&nbsp;СМС
                            в&nbsp;течении&nbsp;5&nbsp;минут
                        </p>
                        <Form :buttonName="'Получить расчёт и подарок'" style="flex-grow: 1"/>
                        <div class="content_copyright">Оставляя контактную информацию, вы&nbsp;соглашаетесь на&nbsp;обработку
                            персональных данных
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" v-if="$store.state.isModal">
                <div class="modal__container" v-if="!$store.state.isSuccess">
                    <span class="modal_close close" @click="toogleModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 18 18">
                            <path fill="none" stroke="#d9d7d7" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-miterlimit="20" stroke-width="1.5" d="M1 1l16 16"/>
                            <path fill="none" stroke="#d9d7d7" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-miterlimit="20" stroke-width="1.5" d="M17 1L1 17"/>
                        </svg>
                    </span>
                    <div class="modal__content">
                        <p class="modal_title">{{ modalTitle }}</p>
                        <Form :buttonName="btnName" :title="modalTitle" :type="'callback'"/>
                        <span class="modal_linkClose" @click="toogleModal">Закрыть</span>
                    </div>
                </div>
                <div class="modal__container" v-else>
            <span class="modal_close close" @click="toogleModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 18 18">
                            <path fill="none" stroke="#d9d7d7" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-miterlimit="20" stroke-width="1.5" d="M1 1l16 16"/>
                            <path fill="none" stroke="#d9d7d7" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-miterlimit="20" stroke-width="1.5" d="M17 1L1 17"/>
                        </svg>
                    </span>
                    <div class="modal__content">
                        <p class="modal_pre">Спасибо!</p>
                        <p class="modal_title">Ваша заявка принята</p>
                        <a :href="$store.state.siteUrl"
                           class="btn btn_purple btn_pulse success"><span>Перейти на сайт</span></a>
                        <span class="modal_linkClose" @click="toogleModal">Закрыть</span>
                    </div>
                </div>
            </div>

        </section>
        <div class="white"></div>

    </div>
</template>
<script>
    import Form from './components/Form'

    export default {
        name: 'App',
        data: () => ({
            modalTitle: '',
            btnName: ''
        }),
        methods: {
            toogleModal(title, btn) {
                this.modalTitle = title
                this.btnName = btn
                this.$store.state.isModal = !this.$store.state.isModal
            }
        },
        components: {
            Form
        }
    }
</script>
<style lang="scss">
    @import '../../sass/lead/_mixins';
    @font-face{
        font-family:'Lato';
        src:url(../../fonts/lato/lato-light.woff) format("woff");
        font-weight:300;
        font-style:normal;
        font-display: swap;
    }

    @font-face{
        font-family:'Lato';
        src:url(../../fonts/lato/lato-regular.woff) format("woff");
        font-weight:400;
        font-style:normal;
        font-display: swap;
    }

    @font-face{
        font-family:'Lato';
        src:url(../../fonts/lato/lato-medium.woff) format("woff");
        font-weight:500;
        font-style:normal;
        font-display: swap;
    }

    @font-face{
        font-family:'Lato';
        src:url(../../fonts/lato/lato-black.woff) format("woff");
        font-weight:900;
        font-style:normal;
        font-display: swap;
    }

    @font-face{
        font-family:'ProximaNova';
        src:url(../../fonts/proxima_nova/ProximaNova-Light.woff) format("woff");
        font-weight:300;
        font-style:normal;
        font-display: swap;
    }
    @font-face{
        font-family:'ProximaNova';
        src:url(../../fonts/proxima_nova/ProximaNova-Regular.woff) format("woff");
        font-weight:400;
        font-style:normal;
        font-display: swap;
    }
    @font-face{
        font-family:'ProximaNova';
        src:url(../../fonts/proxima_nova/ProximaNova-Bold.woff) format("woff");
        font-weight:700;
        font-style:normal;
        font-display: swap;
    }

    @font-face{
        font-family:'ProximaNova';
        src:url(../../fonts/proxima_nova/ProximaNova-Extrabld.woff) format("woff");
        font-weight:800;
        font-style:normal;
        font-display: swap;
    }

    @font-face {
        font-family: 'rouble';
        src: url(../../fonts/webfont-rouble/rouble-webfont.eot);
        src: url(../../fonts/webfont-rouble/rouble-webfont.eot?#iefix) format('embedded-opentype'),
        url(../../fonts/webfont-rouble/rouble-webfont.woff) format('woff'),
        url(../../fonts/webfont-rouble/rouble-webfont.ttf) format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    .rub{
        font-family: 'rouble';
    }


    @include resset();
    * {
        margin: 0;
        padding: 0;
    }

    html,
    body {
        height: 100%;
        width: 100%;
    }

    .wrapper {
        min-height: 100%;
        max-width: 1180px;
        height: auto !important;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
    }

    body {
        font-family: $font-family;
        line-height: 1.25;
        font-size: rem(16);
        font-weight: 300;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        display: flex;
        justify-content: center;

        @include above($break_sm) {
            display: block;
        }

        & > div {
            max-width: rem(414);

            @include above($break_sm) {
                max-width: none;
            }
        }
    }

    .header {
        height: rem(64);
        padding: rem(10) 0;
        box-sizing: border-box;
        background-color: #fff;

        @include above($break_sm) {
            height: rem(80);
            padding: rem(20) 0;
        }

        &__wrapper {
            max-width: $break_lg;
            padding-left: rem(16);
            padding-right: rem(16);
            margin: 0 auto;

            @include above($break_md) {
                padding-left: rem(32);
                padding-right: rem(32);
            }
        }

        &__items {
            @include row-flex();
            justify-content: space-between;
            align-items: center;

            &_item {
                @include col();
                @include size(12);
                @include size-sm(8);
                display: flex;
                align-items: center;
                @include above($break_sm) {
                    width: auto;
                }
            }
        }

        &__name {
            display: none;
            @include above($break_sm) {
                display: flex;
                align-items: center;
                justify-content: center;
                text-transform: uppercase;
                font-size: rem(14);
                letter-spacing: rem(0.9);
            }
        }

        &__phone {
            font-family: "ProximaNova", serif;
            font-size: rem(16);
            font-weight: 400;
            letter-spacing: 0.2px;
            display: flex;
            flex-direction: column;
            align-items: flex-end;

            @include above($break_sm) {
                flex-direction: row;
                &_link {
                    font-size: rem(16);
                    margin-right: rem(16);
                    line-height: 24px;
                }
                &_btn {
                    font-size: rem(16);
                }
            }

            &_link {
                color: #6b6b6b;
            }

            &_btn {
                font-family: "ProximaNova", serif;
                font-size: rem(15);
                color: $primary_light;
                border-bottom: dotted rem(2) $primary_light;
                cursor: pointer;
                font-weight: 600;
                letter-spacing: -0.1px;
            }
        }
    }

    .content {
        background-image: url("/images/lead/shutterstock_1118944151.png");
        background-position: center;
        background-size: cover;
        color: #fff;
        position: relative;
        background-color: #000000;
        flex-grow: 1;
        /*@media (-webkit-min-device-pixel-ratio: 2) {
            &{
                background-image: url("../images/dark-waves@2x.jpg");
            }
        }*/

        &__wrapper {
            @include wrapper();
        }

        &__items {
            @include row-flex();

            &_item {
                @include col();
                @include size(24);
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: flex-start;
                position: relative;
                z-index: 10;
                //100vh - quizHeader - toolbarSafari
                min-height: calc(100vh - 82px);

                @media only screen and (device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) {
                    min-height: calc(100vh - 82px - 179px);
                }
                @media only screen and (device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3) {
                    min-height: calc(100vh - 82px - 179px);
                }

                @include above($break_sm) {
                    min-height: calc(100vh - 82px - 80px);
                    justify-content: center;
                }

                @include above($break_md) {
                    min-height: calc(100vh - 82px - 80px);
                    align-items: center;
                }
            }
        }

        &_title {
            text-align: center;
            margin-bottom: rem(16);
            color: #f3f2f2;
            font-weight: 700;
            font-family: "ProximaNova", serif;
            width: 100%;
            font-size: rem(21);
            letter-spacing: -0.8px;

            @include above(rem(360)) {
                font-size: rem(24);
            }

            @include above($break_sm) {
                font-size: rem(48);
            }

            @include above($break_md) {
                max-width: rem(851);
                margin-bottom: rem(27);
            }

        }

        &_intro {
            margin-top: rem(16);
            font-size: rem(9);
            text-transform: uppercase;
            letter-spacing: 5px;
            margin-bottom: rem(70);
            line-height: 1.4;
            width: 100%;
            text-align: center;
            font-family: 'Lato', sans-serif;
            font-weight: 500;
            flex-grow: 1;

            @include above(325) {
                font-size: rem(10);
            }

            @include above($break_sm) {
                font-size: rem(16);
                letter-spacing: rem(7);
                margin-top: rem(23);
                margin-bottom: rem(38);
            }

            /*@include above($break_md) {
              text-align: left;
            }*/
        }

        &_text {
            color: #f3f2f2;
            font-family: 'Lato', sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 24px;
            text-align: center;
            margin-bottom: rem(32);

            @include above($break_sm) {
                font-size: rem(24);
                line-height: 32px;
                letter-spacing: -0.4px;
                max-width: rem(570);
                margin-bottom: rem(36);
            }

            @include above($break_md) {
                max-width: rem(718);
                margin-bottom: rem(48);
            }
        }

        &_link {
            letter-spacing: rem(-0.3);
            font-weight: 500;
            line-height: 1.5;
            margin-top: rem(24);
            text-decoration: underline;
            color: #faf9f8;
        }

        &_site_link {
            color: #f3f2f2;
            font-family: 'Lato', sans-serif;
            font-size: 16px;
            font-weight: 400;
            letter-spacing: -0.4px;
            line-height: 24px;
            text-decoration: underline;
            margin-top: rem(24);
            flex-grow: 1;
        }

        &_copyright {
            color: #cccccc;
            font-family: 'Lato', sans-serif;
            font-size: 7px;
            font-weight: 400;
            letter-spacing: -0.17px;
            margin-top: rem(24);
            margin-bottom: rem(12);
            flex: none;
            text-align: center;

            @include above($break_sm) {
                font-size: rem(12);
                max-width: rem(359);
                margin-bottom: rem(16);
            }
        }

        &_btn {
            margin-bottom: rem(16);
        }

    }

    .white {
        height: 80px;
        display: none;
        @include above($break_md) {
            display: block;
        }
    }

    .btn {
        font-size: 18px;
        font-weight: 400;
        letter-spacing: -0.2px;
        line-height: 24px;
        color: #fff;
        height: rem(56);
        width: 100%;
        max-width: $break_xs;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: rem(8);
        box-shadow: inset 0 -1px 0 #a01414;
        border: none;
        box-sizing: border-box;
        cursor: pointer;
        position: relative;
        outline: none;
        overflow: hidden;
        font-family: 'Lato', sans-serif;

        &:after {
            content: "";
            height: rem(155);
            left: rem(-75);
            opacity: .2;
            position: absolute;
            top: rem(-50);
            transform: rotate(35deg);
            transition: all 550ms cubic-bezier(0.19, 1, 0.22, 1);
            width: rem(50);
            z-index: 1;
        }

        &:hover {
            &:after {
                left: 120%;
                transition: all 550ms cubic-bezier(0.19, 1, 0.22, 1);
            }
        }

        &_purple {
            background-image: linear-gradient(180deg, #dc1414 0%, #c60201 100%);

            &:after {
                background: #fff;
            }
        }

        &_white {
            color: $primary_dark;
            background-color: #fff;
            border: 1px solid $primary_dark;

            &:after {
                background: $primary_dark;
            }
        }

        &_pulse {
            &::after {
                animation-delay: 0.01s;
                animation-timing-function: ease-in-out;
                animation-name: radiance;
                animation-duration: 2s;
                animation-iteration-count: infinite;
            }
        }
    }

    @keyframes float {
        0%, 100% {
            transform: none;
        }
        33% {
            transform: translateY(-1px) rotate(-2deg);
        }
        66% {
            transform: translateY(1px) rotate(2deg);
        }
    }

    @-webkit-keyframes float {
        0%, 100% {
            -webkit-transform: none;
        }
        33% {
            -webkit-transform: translateY(-1px) rotate(-2deg);
        }
        66% {
            -webkit-transform: translateY(1px) rotate(2deg);
        }
    }

    @keyframes radiance {
        0% {
            left: -30px;
            margin-left: 0px;
        }

        30% {
            left: 110%;
            margin-left: 80px;
        }

        100% {
            left: 110%;
            margin-left: 80px;
        }
    }

    .input {
        font-family: 'Lato', sans-serif;
        height: rem(56);
        width: 100%;
        background: #fff;
        box-sizing: border-box;
        outline: none;
        border: solid rem(1) #d9d7d7;
        border-radius: rem(8);
        font-size: rem(18);
        text-align: center;
        line-height: 1.33;
        color: #6b6b6b;
        padding: 0 rem(16);
        display: flex;
        align-items: center;
        font-weight: 400;

        &_field {
            width: 100%;
            max-width: $break_xs;
        }
    }

    .error {
        border-color: red;

        &_wrapper {
            position: relative;
            width: 100%;
            max-width: rem(414);
        }

        &_alert {
            font-size: rem(12);
            text-transform: uppercase;
            color: red;
            position: absolute;
            z-index: 10;
            background-color: #fff;
            right: rem(8);
            top: rem(-8);
            padding: 0 rem(2);
        }
    }

    .modal {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        text-align: center;
        display: flex;
        justify-content: center;
        color: #332d2e;
        z-index: 100;
        max-width: 1180px;
        margin: 0 auto;


        @include above($break_sm) {
            align-items: center;
        }

        &__container {
            width: 100%;
            margin-top: 4rem;
            height: calc(100vh - 4rem);
            padding: rem(48) rem(24) rem(18) rem(24);
            box-sizing: border-box;
            background-color: #fff;
            transition: all .3s ease;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border-top: 2px solid #e3e3e3;

            @include above($break_sm) {
                margin-top: 5rem;
                height: calc(100vh - 5rem);
            }

            .input {
                margin-bottom: rem(16);
            }

            .error_alert {
                top: rem(-24);
            }
        }

        &__content {
            width: 100%;
            margin: auto;
            text-align: center;
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        &_pre {
            font-family: "ProximaNova", serif;
            font-size: rem(12);
            font-weight: 400;
            letter-spacing: 6px;
            line-height: 16px;
            text-transform: uppercase;
            margin-bottom: rem(16);
            color: #6b6b6b;

            @include above($break_sm) {
                font-size: rem(16);
                font-weight: 400;
                letter-spacing: 7px;
                line-height: 18px;
            }
        }


        &_title {
            font-family: "ProximaNova", serif;
            font-size: 32px;
            font-weight: 700;
            letter-spacing: -0.2px;
            line-height: 40px;
            margin-bottom: rem(48);
            color: #6b6b6b;
            @include above($break_sm) {
                font-size: 48px;
                line-height: 56px;
            }
            @include above($break_md) {
                line-height: 64px;
            }
        }

        &_intro {
            font-size: rem(18);
            line-height: 1.25;
            letter-spacing: rem(-0.4);
        }

        &_close {
            position: absolute;
            top: rem(16);
            right: rem(16);
            cursor: pointer;
        }

        &_linkClose {
            display: inline-block;
            color: #736C6D;
            font-size: rem(16);
            letter-spacing: rem(-0.3);
            line-height: 1.5;
            text-decoration: underline;
            margin-top: rem(24);
            cursor: pointer;
        }

        .agree {
            color: #b3adae;
        }

        .btn {
            @include above($break_md) {
                max-width: $break_xs;
            }
        }

        .btn.success {
            max-width: rem(224);
        }
    }

    .form {
        width: 100%;
        max-width: ($break_xs);

        .btn {
            margin-top: rem(16);
        }
    }

    .agree {
        display: none;
        font-size: rem(12);
        letter-spacing: rem(-0.2);
        color: #f4f6f8;
        margin-top: rem(8);

        @include above($break_sm) {
            display: block;
        }
    }

</style>
