import PageConfigs from '../../../page/page-configs'
import Index from '../../../page/home/index.vue'

export default {
  // 合并路由
  assignRouter: function (arr) {
    let obj = PageConfigs.Rule
    let routerArr = []
    for (let i in arr) {
      if (arr[i].islink) {
        let o = arr[i].component.split('.')
        let router = arr[i]
        router.component = obj
        for (let j in o) {
          router.component = router.component[o[j]]
        }
        routerArr.push(router)
      }
    }
    return PageConfigs.DefaultRule.concat(routerArr)
  },
  // 添加路由
  addRoutes: function (router, rule) {
    let assignRule = this.assignRouter(rule)
    router.addRoutes([{
      path: '/',
      component: Index,
      redirect: 'main',
      children: assignRule
    }])
  },
  // 登录成功
  doLogin: function (vm) {
    vm.$db.set('token', 'adfade5df4qwe51cfa58s')
    let rule = [{
      id: 4,
      parent_id: 2,
      path: '/list',
      name: '示例列表',
      icon: 'el-icon-date',
      islink: 1,
      component: 'Common.List',
      level: 2
    }, {
      id: 3,
      parent_id: 2,
      path: '/form',
      name: '示例表单',
      icon: 'el-icon-date',
      islink: 1,
      component: 'Common.Form',
      level: 2
    }, {
      id: 1,
      name: '首页面板',
      path: '/main',
      icon: 'el-icon-date',
      parent_id: 0,
      level: 1
    }, {
      id: 2,
      name: '示例页面',
      icon: 'el-icon-date',
      parent_id: 0,
      level: 1
    }, {
      id: 10,
      name: '示例表单2',
      path: '/form2',
      icon: 'el-icon-date',
      component: 'Common.Form',
      islink: 1,
      level: 3,
      parent_id: 3
    }]
    vm.$db.set('rule', rule)
    this.addRoutes(vm.$router)
    vm.$router.push('/main')
  }
}
