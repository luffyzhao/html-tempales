<template>
<li class="nav-li">
    <el-tooltip effect="dark" :content="model.name" placement="right">
        <router-link v-if="!isFolder" :to="model.path" class="nav-li-item">
            <div class="nav-icon"><i :class="model.icon"></i></div>
            <span>{{ model.name }}</span>
        </router-link>
        <div v-else @click="toggle" :class="{'active':open}" class="nav-li-item">
            <div class="nav-icon"><i :class="model.icon"></i></div>
            <span>{{ model.name }}</span>
        </div>
    </el-tooltip>
    <ul class="content-left-nav" v-show="open" v-if="isFolder">
        <tree-menu v-for="item in model.children" :model="item"></tree-menu>
    </ul>
</li>
</template>

<script>
export default {
  name: 'treeMenu',
  props: ['model'],
  computed: {
    isFolder () {
      return this.model.children && this.model.children.length
    }
  },
  data () {
    return {
      open: false
    }
  },
  methods: {
    contentLeftVisibility (event) {
      this.hidden = !this.hidden
    },
    toggle () {
      if (this.isFolder) {
        this.open = !this.open
      }
    }
  }
}
</script>

<style type="text/css">
    .content-left-nav{
    margin: 0;
    padding: 0;
  }
  .content-left-nav > li{
    list-style: none;
  }
  .content-left-min .nav-li-item span{
    display: none;
  }
  .active.nav-li-item,.active.nav-li-item:hover{
    background-color: #37424f;
  }
  .nav-li-item.active ~ .content-left-nav{
    display: block !important;
  }
  .nav-li-item{
    font-size: 14px;
    height: 40px;
    width: 100%;
    overflow: hidden;
    cursor: pointer;
  }
  .nav-li-item:hover{
    background-color: #37424f;
  }
  .nav-li > .content-left-nav .nav-li-item{
    background-color: #1f2429;
  }
  .nav-li > .content-left-nav .nav-icon{
    margin-left: 10px;
  }
  .content-left-min .nav-li > .content-left-nav .nav-icon{
    margin-left: 0px;
  }
  .nav-li-item > .nav-icon, a.nav-li-item{
    display: block;
  }
  a.nav-li-item.router-link-active{
    position: relative;
  }
  a.nav-li-item.router-link-active:before{
    position: absolute;
    content: ' ';
    width:0; 
    height:0; 
    right: -1px;
    top: 15px;
    border-top:6px solid transparent;
    border-bottom:6px solid transparent; 
    border-right:6px solid white; 
  }
  .nav-li-item > .nav-icon{
    width: 50px;
    text-align: center;
    font-size: 16px;
    color: #aeb9c2;
    display: inline-block;
    vertical-align: top;
  }
  .nav-li-item > span{
    display: inline-block;
    vertical-align: top;
  }
  .nav-li-item,.nav-li-item > span{
    color: #fff;
    text-decoration: none;
    white-space: nowrap;
  }
</style>