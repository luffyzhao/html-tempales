<template>
  <div class="box">
      <header-box></header-box>
      <div class="content">
          <content-left></content-left>
          <router-view></router-view>
      </div>
  </div>
</template>

<script>
import Header from '../common/header.vue'
import Left from '../common/left.vue'

export default {
  name: 'index',
  components: {
    'header-box': Header,
    'content-left': Left
  },
  beforeRouteEnter (to, from, next) {
    next()
  }
}
</script>

<style type="text/css">
    html,body, .box, .content, .content-right{
        height: 100%;
        overflow: hidden;
    }
    .content{
        position: absolute;
        box-sizing: border-box;
        padding-top: 50px;
        top: 0px;
        bottom: 0px;
        width: 100%;
    }
    .content-right{
        width: 100%;
        box-sizing: border-box;
        padding-right: 15px;
        background: #eaedf1;
        position: relative;
        padding-left: 195px;
        display: inline-block;
        vertical-align: top;
    }
    .content-left{
      position: absolute;
      z-index: 99;
      top: 50px;
      left: 0;
      display: inline-block;
      vertical-align: top;
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
    .content-left-min~.content-right{
      padding-left: 65px;
    }
    
    .router-box{
      height: 100%;
      width: 100%;
      padding-bottom: 65px;
      box-sizing: border-box;
      overflow: hidden;
      flex-flow: column;
      display:flex;
    }
    .router-footer{
      position: absolute;
      bottom: 0;
      left: 0;
      height: 50px;
      width: 100%;
      background-color: #f5f5f5;
    }
    .router-footer:after{
      display: table;
      line-height: 0;
      content: "";
    }
    .router-box-header,.router-box-table,.router-box-search,.router-box-form,.router-box-btn{
      padding: 15px;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 15px;
      background-color: #f5f5f5;
      overflow: hidden;
    }
    .router-box-header{
      padding: 0;
      height: 30px;
      margin-bottom: 15px;
    }
    .router-box-header .el-breadcrumb{
        line-height: 30px;
        padding-left: 15px;
        list-style: none;
    }
    .router-box-search{
      background-color: #f5f5f5;
      margin-bottom: 15px;
    }
    .router-box-search .el-form-item{
      margin-bottom: 15px;
    }
    .router-box-search .router-box-search-btn > .el-form-item{
      float: right;
      margin-bottom: 0px;
    }
    .router-box-table,.router-box-form{
      flex: 1;
    }
    .router-box-form .el-form{
      overflow: auto;
      height: 100%;
    }
    .router-box-form .el-form > fieldset{
      margin-bottom: 15px;
    }
    .router-box .router-box-table .el-table{
      height: 95%;
    }
    .footer-btn{

    }
    .el-form-item{
      max-width: 440px;
    }
    .el-checkbox-group .el-checkbox{
      margin-left: 15px;
    }
    .router-footer .el-pagination,.router-footer .footer-btn{
      display: inline-block;
      float: right;
      margin-top: 9px;
      margin-right: 15px;
    }
</style>



