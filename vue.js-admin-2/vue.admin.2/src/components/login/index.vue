<template>
  <div @click="login()">登录</div>
</template>

<script>
export default {
  name: 'login',
  methods: {
    login () {
      window.cache.set('token', 'fdawerxfcsdt43223wersdf')
      let rule = [{
        id: 4,
        parent_id: 2,
        path: '/example/list',
        name: '示例列表',
        icon: 'el-icon-date',
        islink: 1,
        component: 'example/list',
        level: 2
      }, {
        id: 3,
        parent_id: 2,
        path: '/example/form1',
        name: '示例表单',
        icon: 'el-icon-date',
        islink: 1,
        component: 'example/form1',
        level: 2
      }, {
        id: 1,
        name: '首页面板',
        path: '/index/main',
        icon: 'el-icon-date',
        parent_id: 0,
        islink: 1,
        level: 1,
        component: 'index/main'
      }, {
        id: 2,
        name: '示例页面',
        icon: 'el-icon-date',
        parent_id: 0,
        islink: 0,
        level: 1
      }, {
        id: 10,
        name: '示例表单2',
        path: '/example/form2',
        icon: 'el-icon-date',
        component: 'example/form2',
        islink: 1,
        level: 3,
        parent_id: 3
      }]
      window.cache.set('rule', rule)
    }
  }
}
</script>
