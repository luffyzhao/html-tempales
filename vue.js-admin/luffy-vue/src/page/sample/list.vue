<template>
  <div class="content-right">
    <div class="router-box">
      <div class="router-box-header">
        <el-breadcrumb separator="/">
          <el-breadcrumb-item :to="{ path: '/' }">首页</el-breadcrumb-item>
          <el-breadcrumb-item v-for="(item, index) in breadcrumb">{{item}}</el-breadcrumb-item>
        </el-breadcrumb>
      </div>

      <div class="router-box-search">
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
            <div class="router-box-search-btn">
              <el-form-item>
                <el-button type="primary" @click="onSubmit">查询</el-button>
              </el-form-item>
            </div>
            
          </el-form>
      </div>
      
      <div class="router-box-table">
          <el-table :data="list.page.data" height="100%" v-loading.body="loading">
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
            <el-table-column label="操作" width="150">
              <template scope="scope">
                <el-button type="text" size="small">查看</el-button>
                <el-button type="text" size="small">编辑</el-button>
                <el-button type="text" size="small">删除</el-button>
              </template>
            </el-table-column>
          </el-table>
      </div>
    </div>
    <div class="router-footer">
      <el-pagination
          @size-change="handleSizeChange"
          @current-change="handleCurrentChange"
          :current-page="list.param.current"
          :page-sizes="[100, 200, 300, 400]"
          :page-size="list.param.size"
          layout="total, sizes, prev, pager, next, jumper"
          :total="list.page.total">
        </el-pagination>
    </div>
  </div>
</template>
<script>

export default {
  name: 'list',
  beforeRouteEnter (to, from, next) {
    next(that => {
      that.onSubmit()
    })
  },
  methods: {
    handleSizeChange (val) {
      var that = this
      that.list.param.size = val
      that.onSubmit()
    },
    handleCurrentChange (val) {
      var that = this
      that.list.param.current = val
      that.onSubmit()
    },
    onSubmit (event) {
      var that = this
      that.$http.get('/static/cms/list.json', {params: that.list.param}).then(function (response) {
        that.list.page = response.body.data
      }, function (response) {
        that.list.page = []
      })
    }
  },
  data () {
    return {
      breadcrumb: ['列表'],
      loading: false,
      list: {
        param: {
          user: '',
          region: '',
          current: 1,
          size: 100
        },
        page: {
          data: [],
          total: 1000
        }
      }
    }
  }
}

</script>
