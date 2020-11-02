<template>
    <form class="form" @submit="submitForm">
        <input type="text" v-model="name" class="input input_name" placeholder="Ваше имя"/>
        <div>
            <masked-input 
                type="tel" 
                autocomplete="off" 
                required
                v-model="phoneclear"
                placeholder="Ваш телефон"
                :mask="{
                    pattern: '\+7 (V11) 111-11-11',
                    formatCharacters: {
                        'V': {
                            validate: char => /[9]/.test(char)
                        }, 
                    }, 
                }"
                @input="phone = arguments[1]"
                class="input"
                />
        </div>
        <button :disabled="!isPhoneValid" class="btn" :class="classTag">{{button}}</button>
    </form>
</template>

<script>
    import MaskedInput from 'vue-masked-input'
    import axios from 'axios'
    import VueCookie from 'vue-cookie'
    Vue.use(VueCookie)
    import { mapActions } from 'vuex'
    
    const pattern = /^[0-9]+$/;

    export default {
        data: function () {
            return {
                name: '',
                phone: '',
                phoneclear: '',
                rawVal: ''
            }
        },
        props: {
            button: {
                type: String,
                default: 'Отправить'
            },
            tag: {
                type: String,
                default: ''
            },
            classTag: {
                type: String,
                default: ''
            },
        },
        computed: {
            isPhoneValid() {
                return pattern.test(this.phone)
            }
        },
        methods: {
            ...mapActions([
              'successForm',
              'openModalForm'
            ]),
            submitForm (e){
                e.preventDefault();

                if(Vue.cookie.get('form_send')){
                    this.openModalForm()
                    this.phoneclear = ''
                    this.name = ''
                }else{

                    axios.post('/leads', {
                        name: this.name,
                        phone: '8'+this.phone,
                        tag: this.tag
                    }).then(response => (
                        window.yaCounter44460466.reachGoal('form-sub'),
                        ga.getAll()[0].send('event', 'forms', 'sub'),
                        this.phoneclear = '',
                        this.name = '',
                        this.successForm(),
                        Vue.cookie.set('form_send', true, 1)
                    ))

                }
            }
        },
        components: { 
            MaskedInput
        }
    }
</script>