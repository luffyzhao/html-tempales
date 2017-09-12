<template>
  <div class="content-right">
    <el-breadcrumb separator="/">
      <el-breadcrumb-item :to="{ path: '/' }">首页</el-breadcrumb-item>
      <el-breadcrumb-item  v-for="(item, index) in breadcrumb" >{{item}}</el-breadcrumb-item>
    </el-breadcrumb>


  </div>
</template>

<script>
export default {
  name: 'main',
  data () {
    return {breadcrumb: ['面板']}
  }
}
</script>

