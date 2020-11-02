<template>
    <section class="offer">
        <div class="offer__wrapper">
            <div class="offer__items">
                <div class="offer__items_item">
                    <p class="offer_date">Только до 30 апреля!</p>
                    <p class="offer_title" v-html="title"></p>
                    <p class="offer_subtitle" v-html="subtitle"></p>
                    <a :href="link" class="btn btn-pulse">Получить расчёт и подарок</a>
                    <p class="offer_alarm">Оставляя контактную информацию, вы соглашаетесь на&nbsp;обработку персональных данных</p>
                </div>
            </div>
        </div>
    </section>
</template>

<script>

export default {
    computed: {
        title: function() {
            return this.$route.meta.offer.title
        },
        subtitle: function() {
            return this.$route.meta.offer.subtitle
        },
        link: function() {
            return this.$route.meta.offer.link
        }
    }
}
</script>