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
  }
}
</script>

<style type="text/css">
    html,body, .box, .content, .content-right{
        height: 100%;
    }
    .content{
        position: absolute;
        display: flex;
        box-sizing: border-box;
        padding-top: 50px;
        top: 0px;
        bottom: 0px;
        width: 100%;
    }
    .content-right{
        flex: 1;
        box-sizing: border-box;
        padding-left: 15px;
        padding-right: 15px;
        background: #eaedf1;
        position: relative;
        display: flex;
        flex-direction: column;
    }
    .el-breadcrumb{
        flex-basis: 29px;
        line-height: 29px;
        padding-left: 15px;
        list-style: none;
        background-color: #f5f5f5;
        border-radius: 4px;
    }
    .router-box{
      flex: 1;
      width: 100%;
      background-color: #f5f5f5;
      margin-top: 10px;
      margin-bottom: 10px;
      border-radius: 4px;
      padding: 15px;
      box-sizing: border-box;
      overflow: hidden;
      flex-direction: column;
      display: flex;
    }
    .router-box-search{
      margin-bottom: 15px; 
    }
    .router-box .router-box-scroll{
      overflow: hidden;
      flex: 1;
    }
    .router-box .router-box-scroll .el-table{
      height: 95%;
    }
    .el-table__body-wrapper::-webkit-scrollbar-track
    {
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
      background-color: #F5F5F5;
    }
    .el-table__body-wrapper::-webkit-scrollbar
    {
      width: 6px;
      background-color: #F5F5F5;
    }

    .el-table__body-wrapper::-webkit-scrollbar-thumb
    {
      background-color: #000000;
    }
    .router-footer{
      flex-basis: 50px;
      width: 100%;
      background-color: #f5f5f5;
    }
    .router-footer:after{
      display: table;
      line-height: 0;
      content: "";
    }
    .el-form-item{
      max-width: 440px;
    }
    .el-checkbox-group .el-checkbox{
      margin-left: 15px;
    }

    .router-footer .el-pagination{
      display: inline-block;
      float: right;
      margin-top: 9px;
    }
</style>



