// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import VueRouter from 'vue-router'
import ElementUI from 'element-ui'
import VueResource from 'vue-resource'
import Db from './assets/js/plugin/Db'
import 'element-ui/lib/theme-default/index.css'

import Login from './page/home/login.vue'
import Index from './page/home/index.vue'
import List from './page/sample/list.vue'
import Form from './page/sample/form.vue'
import Main from './page/sample/main.vue'

Vue.config.productionTip = false

// 加载路由
Vue.use(VueRouter)
// 加载elementUi
Vue.use(ElementUI)
// 加载http请求
Vue.use(VueResource)
// 加载Db
Vue.use(Db)

// http 栏截
Vue.http.interceptors.push(function (request, next) {
  var that = this
  request.url = 'http://localhost:8080' + request.url
  that.loading = true

  next((response) => {
    that.loading = false
    if (response.body.code === 0) {
      that.$notify.error({
        title: '错误',
        message: response.body.msg
      })
    }
    return response
  })
})

// 定义路由映射
const router = new VueRouter({
  routes: [{
    path: '/login',
    name: 'login',
    component: Login
  }, {
    path: '/',
    component: Index,
    redirect: '/main',
    children: [{
      path: 'list',
      component: List
    }, {
      path: 'form',
      component: Form
    }, {
      path: 'main',
      component: Main
    }]
  }]
})

/* eslint-disable no-new */
new Vue({
  router,
  template: '<App/>',
  components: { App }
}).$mount('#app')
