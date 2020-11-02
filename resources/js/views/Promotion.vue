<template>
    <div>

        <section class="seo section-1">
            <div class="seo__wrapper">
                <div class="seo__items">
                    <div class="seo__items_item seo__top">
                        <h3 class="seo__top_title">Умное SEO продвижение сайтов</h3>
                        <p class="seo__top_text">SEO (Search Engine Optimization) – это комплекс работ по повышению позиций сайта в поисковых ресурсах Google, Яндекс, Rambler и т.д. по заранее отобранным критериям. Грамотное SEO позволит Вашему сайту выйти в топ-10 по определенным ключевым запросам, которые соответствуют сфере деятельности компании. Таким образом потенциальные клиенты сразу заметят Вас среди тысяч других Интернет-ресурсов, так как сайт будет находиться на первой странице поисковой выдачи.</p>
                        <p class="seo__top_text">Сайты, входящие в топ-10, наиболее привлекательны для потенциальных клиентов. А грамотно подобранные ключевые запросы позволят сформировать ту целевую аудиторию посетителей, которая необходима лично Вашей компании.</p>
                    </div>
                </div>
            </div>

            <div class="seo__wrapper seo__info">
                <div class="seo__items">
                    <div class="seo__items_item seo__info_img">
                        <picture>
                            <source type="image/webp" media="(min-width: 992px)" srcset="/img/promotion/seo-lg.webp">
                            <source media="(min-width: 992px)" srcset="/img/promotion/seo-lg.png">
                            <source type="image/webp" media="(min-width: 768px)" srcset="/img/promotion/seo-md.webp">
                            <source media="(min-width: 768px)" srcset="/img/promotion/seo-md.png">
                            <source type="image/webp" media="(min-width: 767px)" srcset="/img/promotion/seo-sm.webp">
                            <source media="(min-width: 767px)" srcset="/img/promotion/seo-sm.png">
                            <img class="seo__img lazyload" src="/img/promotion/seo-sm.png" loading="lazy" alt="SEO">
                        </picture>
                    </div>
                    <div class="seo__items_item seo__info_text">
                        <h3 class="seo__info_title">Что вы получите при сотрудничестве с нами?</h3>
                        <ul class="seo__list">
                            <li class="seo__list_item">
                                <v-popover :auto-hide="true" open-group="seo1">
                                    Увеличение индексации
                                    <template slot="popover">
                                        {{ seo1 }}
                                    </template>
                                </v-popover>
                            </li>
                            <li class="seo__list_item">
                                <v-popover :auto-hide="true" open-group="seo1">
                                    Повышение позиций ваших товаров <br>и услуг в поиске
                                    <template slot="popover">
                                        {{ seo2 }}
                                    </template>
                                </v-popover>
                            </li>
                            <li class="seo__list_item">
                                <v-popover :auto-hide="true" open-group="seo1">
                                    Увеличение количества поситетелей <br>на ваш сайт
                                    <template slot="popover">
                                        {{ seo3 }}
                                    </template>
                                </v-popover>
                            </li>
                            <li class="seo__list_item">
                                <v-popover :auto-hide="true" open-group="seo1">
                                    Увеличение продаж
                                    <template slot="popover">
                                        {{ seo4 }}
                                    </template>
                                </v-popover>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="seo__price">
                <div class="seo__wrapper">
                    <div class="seo__items">
                        <div class="seo__items_item seo__price_item">
                            <p class="seo__price_text">После бесплатного анализа Вашего сайта мы свяжемся с Вами и подберём оптимальное решение. <br>Средняя стоимость продвижения в месяц</p>
                            <p class="seo__price_price">15 000 <span class="rub">q</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="seo__wrapper seo__video">
                <div class="seo__items">
                    <div class="seo__items_item seo__video_video">
                        <div class="video">
                            <div class="video__item">
                                <LazyYoutube vid="_Qe-vVit56M" alt="Как быстро попасть в ТОП - 10?" img="video-bg"/>
                                <h3 class="video__item_title">Как быстро попасть в ТОП - 10?</h3>
                                <div class="video__item_lincks lincks">
                                    <div class="lincks__items">
                                        <span class="lincks__items_item" v-tooltip.top-center="video1">Качественные фото и иллюстрации</span>
                                        <span class="lincks__items_item" v-tooltip.top-center="video2">Оптимизация работы сайта</span>
                                    </div>
                                    <div class="lincks__items">
                                        <span class="lincks__items_item" v-tooltip.top-center="video3">Качественный СЕО текст</span>
                                        <span class="lincks__items_item" v-tooltip.top-center="video4">Правильно настроенные Title и Description</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="seo__items_item seo__video_text">
                        <h3 class="seo__video_title">Что такое SEO?</h3>
                        <p class="seo__video_info">Продвижение Вашего сайта в Яндекс и Гугл поисковиках, с целью поднятия вашего сайта в ТОП-10, а это первая страница.</p>
                    </div>
                </div>
            </div>

            <div class="seo__wrapper seo__form">
                <div class="seo__items">
                    <div class="seo__items_item seo__form_item">
                        <p class="seo__form_info">Хотите бесплатный аудит? Оставьте заявку и мы перезвоним Вам в течение 5 минут</p>
                        <form-component button="Оставить заявку" tag="SEO"></form-component>
                    </div>
                </div>
            </div>
        </section>

        <section class="adw section-2">
            <div class="adw__wrapper">
                <div class="adw__items">
                    <div class="adw__items_item">
                        <h3 class="adw_title">Контекстная реклама</h3>
                        <p class="adw_info">Контекстная реклама – это рекламные объявления в Интернете, тематика которых напрямую зависит от интересов пользователя. Действует избирательно и отображается только тем, чья сфера интересов совпадает с областью деятельности Вашей компании, что существенно повышает вероятность отклика. Google, Yandex, Rambler и другие поисковые ресурсы собирают информацию о ключевых запросах каждого Интернет-пользователя. И если они совпадают с текстом Вашего объявления, они обязательно его увидят. Такая реклама ненавязчива и при этом четко ограничивает целевую аудиторию, экономя Ваши деньги.</p>
                    </div>
                </div>

                <div class="adw__items adw__bottom">
                    <div class="adw__items_item adw__item_img">
                        <picture>
                            <source type="image/webp" media="(min-width: 768px)" srcset="/img/promotion/adw-lg.webp">
                            <source media="(min-width: 768px)" srcset="/img/promotion/adw-lg.png">
                            <source type="image/webp" media="(min-width: 767px)" srcset="/img/promotion/adw-sm.webp">
                            <source media="(min-width: 767px)" srcset="/img/promotion/adw-sm.jpg">
                            <img class="adw__img lazyload" src="/img/promotion/adw-sm.png" loading="lazy" alt="Контекстная реклама">
                        </picture>
                    </div>

                    <div class="adw__items_item adw__item_case case">
                        <h3 class="case_title">Работа по сайту <span>Good-boat.ru</span></h3>
                        <div class="case__item">
                            <p class="case__item_name">Цель проекта</p>
                            <p class="case__item_desc">
                                <span class="case__item_mark">За 3 месяца</span> 
                                 увеличить количество клиентов
                                <br>
                                с сайта 
                                <span class="case__item_mark">в 2 раза</span>     
                            </p>
                        </div>
                        <div class="case__item">
                            <p class="case__item_name">Рализация</p>
                            <p class="case__item_desc">
                                Настроены <span class="case__item_mark">7 рекламных компаний</span>
                                <br>в Яндексе и Google, объёмом <span class="case__item_mark">500 ключевых фраз</span> каждая. Для каждого рекламного
                                объявления были созданы отдельные рекламные баннеры
                            </p>
                        </div>
                        <div class="case__item">
                            <p class="case__item_name">Результат</p>
                            <p class="case__item_desc">
                                Посещаемость <span class="case__item_mark">увеличилась на 75%</span>, объем заказов
                                с сайта <span class="case__item_mark">вырос на 63%</span>
                            </p>
                        </div>                     
                    </div>
                </div>
            </div>
        </section>

        <section class="resolution">
            <div class="resolution__wrapper">
                <div class="resolution__items">
                    <div class="resolution__items_item">
                        <p class="resolution_info">После бесплатного анализа Вашего сайта мы свяжемся с Вами и подберём оптимальное решение. Эффективный бюджет рекламной компании в среднем</p>
                        <p class="resolution_price">от 15 000 <span class="rub">q</span></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="adw section-2 why">
            <div class="adw__wrapper">
                <div class="adw__items">
                    <div class="adw__items_item ">
                        <h3 class="why_title">Почему контекстная реклама</h3>
                        <ul class="why__ul">
                            <li>Посетители приходят <span>сразу</span> после начала рекламы</li>
                            <li><span>Увеличение</span> количества просмотров сайта</li>
                            <li>Повышение показателя <span>конверсии</span></li>
                            <li><span>Рост</span> количества заявок с сайта</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </div>
    
</template>

<script>

import LazyYoutube from '../components/LazyYoutube'

export default {
    data: function () {
        return {
            videoId: '_Qe-vVit56M',
            video1: 'Фото и иллюстрации – уникальные изображения, созданные специально для Вашего Интернет-ресурса. Важно не скопировать их со сторонних сайтов, а создать свой эксклюзивный контент, который положительно будет влиять на продвижение. Иллюстрации с учетом специфики Вашего ресурса разрабатывает веб-дизайнер, а фотографии лучше доверить профессиональным фотографам.',
            video2: 'Оптимизация работы сайта – это устранение технических ошибок ресурса и его улучшение для того, чтобы он стал максимально релевантным (привлекательным) не только для поисковых систем, но и для пользователей. Оптимизация предполагает обеспечение соответствия кода и содержимого страниц требованиям поисковиков.',
            video3: 'SEO-текст – это особый вид статей, оптимизированных для продвижения в поисковых системах. Главное отличие SEO-текста от обычного – наличие в первом ключевых запросов, которые и позволяют этому тексту продвигаться. Подобные материалы чаще всего не являются продающими, но положительно сказываются на позициях Вашего Интернет-ресурса в топе поисковых систем.',
            video4: 'Title и Description – составляющие внутренней оптимизации сайта, которые делают его видимым для поисковых систем. От правильно составленных Title и Description зависит место сайта в поисковой выдаче, а также его посещаемость. Эта информация подскажет поисковым системам то, что является самым важным на странице.',
            seo1: 'Увеличение индексации – вся информация о сайтах хранится в специальной базе, из которой поисковые сервисы и берут ссылки на необходимые Интернет-ресурсы. Для того чтобы Ваш сайт попал в эту базу, его страницы должны быть проиндексированы роботами поисковых систем.',
            seo2: 'Позиция сайта – это место, на котором он находится по определенному слову (ключевому запросу) в поисковиках. Для того чтобы продвижение сайта было более эффективным, важно производить тщательный анализ его позиций и повышать их с течением времени. Это обеспечит вхождение сайта в топ популярных запросов на поисковых ресурсах и увеличит количество уникальных пользователей. Если на Ваш ресурс ссылается большое количество других сайтов, близких по тематике к Вашему, то индекс цитирования увеличится, а, следовательно, возрастут и его позиции.',
            seo3: 'Увеличение количества уникальных посетителей – чем больше реальных людей будут заходить на Ваш сайт, тем больше вероятность того, что они приобретут Ваш товар или услугу. Важно, чтобы о Вас узнало как можно большее количество Интернет-пользователей.',
            seo4: 'Увеличение продаж – совокупность эффективных инструментов продвижения позволит повысить конверсию сайта, а, значит, и увеличит Ваши продажи. Вы получите еще больше сделок и лояльных клиентов, а также повысите узнаваемость своего бренда на Интернет-пространстве.',
        }
    },
    components: { LazyYoutube }
}
</script>