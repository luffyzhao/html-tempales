// console.log(Vue.$message)
var $store = new Vuex.Store({
  modules: {
    loading: {
        state: {
            loading: false
        }
    },
    mutations: {
      show (state) {
        state.loading = true
      },
      hide (state) {
        state.loading = false
      }
    }
  }
})
