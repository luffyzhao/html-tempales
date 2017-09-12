<template>
  <div class="content-right">
    <el-breadcrumb separator="/">
      <el-breadcrumb-item :to="{ path: '/' }">首页</el-breadcrumb-item>
      <el-breadcrumb-item v-for="(item, index) in breadcrumb">{{item}}</el-breadcrumb-item>
    </el-breadcrumb>
    <div class="router-box">
      <div class="router-box-search">
        <fieldset>
          <legend>搜索表单</legend>
          <el-form :inline="true" :model="list.param" class="demo-form-inline">
            <el-form-item label="审批人">
              <el-input v-model="list.param.user" placeholder="审批人"></el-input>
            </el-form-item>
            <el-form-item label="活动区域">
              <el-select v-model="list.param.region" placeholder="活动区域">
                <el-option label="区域一" value="shanghai"></el-option>
                <el-option label="区域二" value="beijing"></el-option>
              </el-select>
            </el-form-item>
            <el-form-item>
              <el-button type="primary" @click="onSubmit">查询</el-button>
            </el-form-item>
          </el-form>
        </fieldset>
      </div>
      <div class="router-box-scroll">
        <fieldset>
          <legend>搜索表单</legend>
          <el-table :data="list.data" height="100%">
            <el-table-column prop="date" label="日期">
            </el-table-column>
            <el-table-column prop="name" label="姓名">
            </el-table-column>
            <el-table-column prop="province" label="省份">
            </el-table-column>
            <el-table-column prop="city" label="市区">
            </el-table-column>
            <el-table-column prop="address" label="地址">
            </el-table-column>
            <el-table-column prop="zip" label="邮编">
            </el-table-column>
            <el-table-column label="操作" width="100">
              <template scope="scope">
                <el-button type="text" size="small">查看</el-button>
                <el-button type="text" size="small">编辑</el-button>
              </template>
            </el-table-column>
          </el-table>
        </fieldset>
      </div>
    </div>
    <div class="router-footer">
      <page :model="list"></page>
    </div>
  </div>
</template>
<script>
import Page from '../common/page.vue'

export default {
  name: 'list',
  components: {
    'page': Page
  },
  beforeRouteEnter (to, from, next) {
    next(vm => {
      vm.list.data = [{
        date: '2016-05-03',
        name: '王小虎',
        province: '上海',
        city: '普陀区',
        address: '上海市普陀区金沙江路 1518 弄',
        zip: 200333
      }]
    })
  },
  methods: {
    onSubmit (event) {
      this.list.data = [{
        date: '2016-05-03',
        name: '王小虎',
        province: '上海',
        city: '普陀区',
        address: '上海市普陀区金沙江路 1518 弄',
        zip: 200333
      }]
    }
  },
  data () {
    return {
      breadcrumb: ['列表'],
      list: {
        url: 'http://www.baidu.com/',
        param: {
          user: '',
          region: ''
        },
        page: {
          current: 1,
          size: 100,
          total: 1000
        },
        data: []
      }
    }
  }
}

</script>
