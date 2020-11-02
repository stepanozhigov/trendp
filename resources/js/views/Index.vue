<template>
    <div>
        
        <projectSlider></projectSlider>

        <services></services>

        <section class="sale">
            <div class="sale__wrapper">
                <div class="sale__items">
                    <div class="sale__items_item">
                        <p class="sale-sm">Нашли дешевле?</p>
                        <p class="sale-offer">Сделаем скидку!</p>
                        <p class="sale-sm">от цены конкурента</p>
                        <p class="sale-price">-3000 <span class="rub">q</span></p>
                    </div>
                </div>
            </div>
        </section>

        <advantage></advantage>

        <section class="director section-2">
            <div class="director__wrapper">
                <div class="director__items">
                    <div class="director__items_item director-img">
                        <picture>
                            <source type="image/webp" srcset="/img/home/director_img.webp">
                            <img src="/img/home/director_img.jpg" alt="Директор">
                        </picture>
                    </div>
                    <div class="director__items_item director-text">
                        <h3 class="director-title title">Директор всегда на связи</h3>
                        <p class="director-par">Я принимаю абсолютно все жалобы и предложения для улучшения качества работы и сервиса. В течение 24 часов ваше обращение будет мною рассмотрено и вы получите ответ.</p>
                        <p class="director-par">Вы можете использовать для связи привычную социальную сеть или форму обратной связи.</p>
                        <div class="director__sign">
                            <p class="director__sign_text">Александр Репин</p>
                            <picture>
                                <source type="image/webp" srcset="/img/home/director_sign.webp">
                                <img src="/img/home/director_sign.png" alt="Директор" class="director__sign_img">
                            </picture>
                        </div>
                        <a href="https://www.instagram.com/business_repin" target="_blank" class="btn director-btn">
                            <svg class="icon" width="24px" height="24px">
                                <use xlink:href="#instagram"></use>
                            </svg>
                            Написать в Инстаграм
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    
</template>

<script>

import projectSlider from '../components/ProjectSlider'
import services from '../components/Services'
import advantage from '../components/Advantage'

export default {
    components: { projectSlider, services, advantage }
}
</script>