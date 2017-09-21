// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import VueRouter from 'vue-router'
import ElementUI from 'element-ui'
import VueResource from 'vue-resource'
import Db from './assets/js/plugin/Db'
import Common from './assets/js/plugin/Common'
import 'element-ui/lib/theme-default/index.css'
import Login from './page/home/login.vue'

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
let router = new VueRouter({
  routes: [{
    path: '/login',
    name: 'login',
    component: Login
  }]
})

/* eslint-disable no-new */
let vm = new Vue({
  router,
  template: '<App/>',
  components: { App }
}).$mount('#app')

// 路由权限验证
router.beforeEach((to, from, next) => {
  // 是否登录
  let isLogin = function () {
    return vm.$db.get('token')
  }
  if (to.path === '/login' && !isLogin()) {
    // 没有登录是/login
    return next()
  } else if (!isLogin()) {
    // 没有登录不是/login
    return next({path: '/login'})
  } else {
    // 登录不是/login
    let rule = vm.$db.get('rule')
    let assignRule = Common.assignRouter(rule)
    for (let i in assignRule) {
      if (assignRule[i] instanceof Object) {
        if (assignRule[i].path === to.path) {
          return next()
        }
      }
    }
  }
  return next({path: '/error'})
})

let token = vm.$db.get('token')
if (token) {
  let rule = vm.$db.get('rule')
  // 获取路由
  Common.addRoutes(router, rule)
}
