import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

// 定义路由映射
const router = new Router({
  routes: [
    {
      path: '/login',
      name: 'login',
      component: () => import('../components/login/index.vue')
    },
    {
      path: '/401',
      name: '401',
      component: () => import('../components/error/401.vue')
    },
    {
      path: '/500',
      name: '500',
      component: () => import('../components/error/500.vue')
    },
    {
      path: '/404',
      name: '404',
      component: () => import('../components/error/404.vue')
    }
  ]
})

// 不要验证的路由
let notVerifyRouting = [
  '/login', '/401', '/500', '/404'
]
// 登录之后不需要验证
let loginNotVerifyRouting = []

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
  if (notVerifyRouting.includes(to.path)) {
    next()
  } else {
    if (loginNotVerifyRouting.includes(to.path) && window.isLogin) {
      next()
    }
    if (routing().includes(to.path)) {
      next()
    } else {
      next('/401')
    }
  }
})

if (window.isLogin) {
  let arr = window.cache.get('rule') || []
  let childrens = []
  for (let i in arr) {
    if (arr[i].islink === 0) {
      continue
    }
    childrens.push({
      path: arr[i].path,
      name: arr[i].name,
      component: () => import('../components/' + arr[i].component + '.vue')
    })
  }
  console.log(childrens)
  router.addRoutes([{
    path: '/',
    name: '后台首页',
    component: () => import('../components/index/index.vue'),
    redirect: '/main',
    children: childrens
  }])
} else {
  router.addRoutes([{
    path: '/',
    name: '登录',
    redirect: '/login',
    children: []
  }])
}

export default router
