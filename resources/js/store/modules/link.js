const state = {
    links: null,

}

const getters = {
    links: state => {
        return state.links
    },

}

const mutations = {
    setLinks(state, data) {
        state.links = data
    }
}

const actions = {
    getLinks(context) {
        axios.get('/api/link/')
            .then(res => {
                context.commit('setLinks', res.data);
            })
    },

    deleteLink({dispatch},id){
        axios.delete(`/api/link/${id}`)
            .then(res=> {
                dispatch('getLinks')
            })
    },

}

export default {
    state, mutations, actions, getters
}
