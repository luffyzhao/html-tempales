import WebStorageCache from 'web-storage-cache'

export default {
  install (Vue, options) {
    let wsCache = new WebStorageCache({
      storage: 'localStorage'
    })
    Vue.prototype.$db = wsCache
  }
}
