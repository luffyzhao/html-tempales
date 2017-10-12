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
import VueIconFont from 'vue-icon-font'
import '@/assets/css/iconfont.css'

Vue.use(VueIconFont)
Vue.use(ElementUI)

// 缓存
window.cache = new Storage({
  storage: 'sessionStorage'
})

window.islogin = () => {
  return window.cache.get('token')
}

export default {
  name: 'app'
}
</script>

<style>
html,body{
    margin: 0;
    height: 100%;
    width: 100%;
    overflow: hidden;
}
</style>