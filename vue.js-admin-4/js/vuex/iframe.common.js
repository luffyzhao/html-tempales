const $store = new Vuex.Store({
  state: {
    iframeTab: '',
    iframeTabs: []
  },
  mutations: {
    addIframeTab (state, iframeTab) {
      let item = 0;
      if((item = state.iframeTabs.indexOf(iframeTab)) < 0){
        state.iframeTabs.push(iframeTab)
      }
      state.iframeTab = iframeTab.path
    }
  }
})