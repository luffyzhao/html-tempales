import List from './sample/list.vue'
import Form from './sample/form.vue'
import Main from './sample/main.vue'
import Error from './common/50x.vue'

export default {
  // 菜单
  Rule: {
    Common: {
      List: List,
      Form: Form,
      Main: Main
    }
  },
  // 默认菜单
  DefaultRule: [{
    path: '/error',
    name: '错误页面',
    component: Error
  }, {
    path: '/main',
    name: '首页面板',
    component: Main
  }]
}
