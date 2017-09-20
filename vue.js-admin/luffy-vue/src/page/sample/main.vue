<template>
  <div class="content-right">
    <div class="router-box">
      <div class="router-box-header">
        <el-breadcrumb separator="/">
          <el-breadcrumb-item :to="{ path: '/' }">首页</el-breadcrumb-item>
          <el-breadcrumb-item v-for="(item, index) in breadcrumb">{{item}}</el-breadcrumb-item>
        </el-breadcrumb>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'main',
  data () {
    return {breadcrumb: ['面板']}
  },
  methods: {}
}
</script>

