<template>
  <div id="app">
    <router-view></router-view>
  </div>
</template>

<script>
import Vue from 'vue'
import Storage from 'web-storage-cache'
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-default/index.css'

Vue.use(ElementUI)
// 缓存
window.cache = new Storage({
  storage: 'sessionStorage'
})

window.isLogin = window.cache.get('token')

export default {
  name: 'app'
}
</script>
