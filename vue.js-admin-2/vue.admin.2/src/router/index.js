import Vue from 'vue'
import Router from 'vue-router'
import RouterConfig from '@/config/router-config'
Vue.use(Router)
let childrens = []
let config = RouterConfig
for (let i in config) {
  childrens.push({
    path: config[i].path,
    meta: {auth: true},
    name: config[i].name,
    component: () => import('@/components' + config[i].path + '.vue')
  })
}

// 定义路由映射
const router = new Router({
  routes: [{
    path: '/login',
    name: 'login',
    component: () => import('@/components/login/index.vue'),
    beforeEnter: (to, from, next) => {
      if (window.islogin()) {
        next('/index/main')
      } else {
        next()
      }
    }
  },
  {
    path: '/',
    name: '后台首页',
    component: () => import('@/components/index/index.vue'),
    redirect: '/index/main',
    children: childrens
  },
  {
    path: '*',
    name: '404',
    component: () => import('@/components/error/404.vue')
  }]
})

let routing = function () {
  let arr = window.cache.get('rule') || []
  let r = []
  for (let i in arr) {
    r.push(arr[i].path)
  }
  return r
}

// 路由权限验证
router.beforeEach((to, from, next) => {
  if (to.meta.auth) {
    if (routing().includes(to.path)) {
      next()
    } else if (window.islogin()) {
      next('/error')
    } else {
      next('/login')
    }
  } else {
    next()
  }
})

export default router
