<template>
  <div class="content-left" v-bind:class="{ 'content-left-min': hidden }">
    <div class="content-left-fold" @click="contentLeftVisibility"><i class="el-icon-menu"></i></div>
    <ul class="content-left-nav">
        <tree-menu v-for="menuItem in theModel" :model="menuItem"></tree-menu>
    </ul>
  </div>
</template>

<script>
import TreeMenu from './treeMenu.vue'
var data = [{
  name: '首页面板',
  link: '/main',
  icon: 'el-icon-date'
},
{
  name: '示例页面',
  icon: 'el-icon-date',
  children: [{
    name: '示例表单',
    link: '/form',
    icon: 'el-icon-date'
  },
  {
    name: '示例列表',
    link: '/list',
    icon: 'el-icon-date'
  }]
}]

export default {
  name: 'left',
  components: {
    'tree-menu': TreeMenu
  },
  data () {
    return {
      hidden: false,
      theModel: data
    }
  },
  methods: {
    contentLeftVisibility (event) {
      this.hidden = !this.hidden
    }
  }
}
</script>


<style type="text/css">
  .content-left{
    flex-basis: 180px;
    height: 100%;
    background-color: #293038;
    color: #aeb9c2;
    line-height: 40px !important;
    font-size: 12px;
    transition: flex-basis 0.25s;
    -moz-transition: flex-basis 0.25s; /* Firefox */
    -webkit-transition: flex-basis 0.25s;  /* Safari 鍜� Chrome */
    -o-transition: flex-basis 0.25s;   /* Opera */
  }
  .content-left-min{
    flex-basis: 50px;
    overflow: hidden;
  }
  .content-left-fold{
    background: #394555;
    height: 40px;
    cursor: pointer;
    text-align: center;
  }
</style>
