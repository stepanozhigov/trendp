import axios from 'axios';

export default {
    state: {
        sliders: []
    },
    mutations: {
        updateSliders (state, sliders) {
            state.sliders = sliders
        }

    },
    actions: {
        async fetchSliders(context) {
            axios
            .get('/api')
            .then(response => {
                let sliders = response.data.projects
                context.commit('updateSliders', sliders)
            })
        }
    },
    getters: {
        sliders(state) {
            return state.sliders
        }
    }
}