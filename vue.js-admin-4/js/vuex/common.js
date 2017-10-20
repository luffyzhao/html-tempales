const $store = new Vuex.Store({
  getters:{
    widths: (state, getters) => (c) => {
      let d = document.getElementsByClassName(c)
      if (d.length === 0) {
        return 0
      }
      let l = 0
      for (let i = d.length - 1; i >= 0; i--) {
        l += d[i].clientwidth
      }
      return l
    },
    heights: (state, getters) => (c) => {
      let d = document.getElementsByClassName(c)
      if (d.length === 0) {
        return 0
      }
      let l = 0
      for (let i = d.length - 1; i >= 0; i--) {
        l += d[i].clientHeight
      }
      return l
    }
  }
})
