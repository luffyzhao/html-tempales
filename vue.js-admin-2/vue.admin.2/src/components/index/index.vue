<template>
    <div>
      <header-box></header-box>
      <div class="content" v-bind:style="contentStyle">
        <div class="content-left" v-bind:class="{ 'content-left-min': hidden }">
            <left-box v-on:refreshbizlines="contentLeftVisibility"></left-box>
        </div>
        <el-breadcrumb separator="/">
          <el-breadcrumb-item :to="{ path: '/' }">首页</el-breadcrumb-item>
          <el-breadcrumb-item>首页面板</el-breadcrumb-item>
        </el-breadcrumb>
        <div class="content-right" v-bind:style="contentRightStyle">
            <router-view></router-view>
        </div>
      </div>
    </div>
</template>

<script>
import Header from '../common/header.vue'
import Left from '../common/left.vue'

let parentRule = function (currentRoute, rules) {
  let current = {}
  for (let i in rules) {
    if (rules[i].path === currentRoute.path) {
      Object.assign(current, rules[i])
    }
  }
  return findParent(current, rules).reverse()
}

let findParent = function (current, rules) {
  let parent = []
  parent.push(current)
  if (typeof current.parent_id !== 'undefined') {
    for (let i in rules) {
      if (current.parent_id === rules[i].id) {
        let p = findParent(rules[i], rules)
        parent = parent.concat(p)
      }
    }
  }
  return parent
}

export default {
  name: 'index',
  components: {
    'header-box': Header,
    'left-box': Left
  },
  data () {
    return {
      hidden: false,
      breadcrumbs: [],
      contentStyle: {
        height: 0
      },
      contentRightStyle: {
        width: 0,
        height: 0
      }
    }
  },
  mounted () {
    this.contentStyle.height = (document.body.clientHeight - 50) + 'px'
    this.contentRightStyle.height = (document.body.clientHeight - 50 - 30) + 'px'
    this.contentRightStyle.width = document.body.clientWidth - (this.hidden === true ? 50 : 180) + 'px'
  },
  updated () {
    let rules = window.cache.get('rule')
    this.breadcrumbs = parentRule(this.$router.currentRoute, rules)
    this.contentStyle.height = (document.body.clientHeight - 50) + 'px'
    this.contentRightStyle.height = (document.body.clientHeight - 50 - 30) + 'px'
    this.contentRightStyle.width = document.body.clientWidth - (this.hidden === true ? 50 : 180) + 'px'
  },
  methods: {
    contentLeftVisibility (event) {
      this.hidden = !this.hidden
    }
  }
}
</script>

<style>
.content-left{
  float: left;
  width: 180px;
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
  width: 50px;
  overflow: hidden;
}
.content-right{
  float: right;
  overflow-y: auto;
}
.content-right:after{
  display: table;
  clear: both;
}
.el-breadcrumb{
    box-sizing: border-box;
    padding-left: 15px;
    background-color: #f5f5f5;
    height: 30px;
    line-height: 30px;
    list-style: none;
    overflow: hidden;
}
</style>