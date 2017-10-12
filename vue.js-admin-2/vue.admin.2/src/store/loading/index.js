const state = {
  loading: false
}

const mutations = {
  show (state) {
    state.loading = true
  },
  hide (state) {
    state.loading = false
  }
}

export default {
  state,
  mutations
}
