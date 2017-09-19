export default {
  install (Vue, options) {
    let store = window.localStorage
    let doc = document.documentElement
    Vue.prototype.$db = {
      /**
       * 保存数据
       */
      set: function (key, val, context) {
        if (store) {
          return store.setItem(key, val, context)
        } else {
          doc.setAttribute(key, val)
          return doc.save(context || 'default')
        }
      },
      /**
       * 读取数据
       */
      get: function (key, context) {
        if (store) {
          return store.getItem(key, context)
        } else {
          doc.load(context || 'default')
          return doc.getAttribute(key) || ''
        }
      },
      /**
       * 删除数据
       * @param {Object}
       * @param {Object}
       */
      rm: function (key, context) {
        if (store) {
          return store.removeItem(key, context)
        } else {
          context = context || 'default'
          doc.load(context)
          doc.removeAttribute(key)
          return doc.save(context)
        }
      },
      /**
       * 清空数据
       */
      clear: function () {
        if (store) {
          return store.clear()
        } else {
          doc.expires = -1
        }
      }
    }
  }
}
