import axios from 'axios';

export default {
    state: {
        open: false,
        slideToLeft: false, 
        slideToRight: true,
        sticky: false,
        vacancys: [],
        modalForm: false,
        call: false,
        cons: false,
        serv: false,
        project: false,
        success: false,
        isSended: false
    },
    mutations: {
        openMenu(state) {
            state.open = !state.open
            state.slideToLeft = !state.slideToLeft
            state.slideToRight = !state.slideToRight
        },
        stickyToggle(state, val){
            state.sticky = val
        },
        openModalForm(state, val) {
            
            state.modalForm = true

            if(Vue.cookie.get('form_send')){
                state.isSended = true
                state.call = false
                state.cons = false
                state.serv = false
                state.project = false
                state.success = false
            }else{
                if(val === 'call'){
                    state.call = true
                }
                if(val === 'cons'){
                    state.cons = true
                }
                if(val === 'project'){
                    state.project = true
                }
                if(val === 'serv'){
                    state.serv = true
                }
            }
        },
        closeModalForm(state) {
            state.modalForm = false
            state.call = false
            state.cons = false
            state.serv = false
            state.project = false
        },
        successForm(state) {
            state.success = true
            state.modalForm = true
            state.call = false
            state.serv = false
            state.cons = false
            state.project = false
        },
        updateVacancys(state, vacancys) {
            state.vacancys = vacancys
        }
    },
    actions: {
        openMenu(context) {
             context.commit('openMenu')
        },
        stickyToggle(context, val) {
            context.commit('stickyToggle', val)
        },
        openModalForm(context, val) {
            context.commit('openModalForm', val)
        },
        closeModalForm(context) {
            context.commit('closeModalForm')
        },
        successForm(context) {
            context.commit('successForm')
        },
        async fetchVacancys(context) {
            axios
            .get('/api/')
            .then(response => {
                let vacancys = response.data.vacancys
                context.commit('updateVacancys', vacancys)
            })
        }
    },
    getters: {
        open(state) {
            return state.open
        },
        slideToLeft(state) {
            return state.slideToLeft
        },
        slideToRight(state) {
            return state.slideToRight
        },
        sticky(state) {
            return state.sticky
        },
        vacancys(state) {
            return state.vacancys
        },
        modalForm(state) {
            return state.modalForm
        },
        call(state) {
            return state.call
        },
        cons(state) {
            return state.cons
        },
        serv(state) {
            return state.serv
        },
        project(state) {
            return state.project
        },
        success(state) {
            return state.success
        },
        isSended(state) {
            return state.isSended
        }
        
    }
}