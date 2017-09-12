<template>
    <div class="page">
        <el-pagination
          @size-change="handleSizeChange"
          @current-change="handleCurrentChange"
          :current-page="model.page.current"
          :page-sizes="[100, 200, 300, 400]"
          :page-size="model.page.size"
          layout="total, sizes, prev, pager, next, jumper"
          :total="model.page.total">
        </el-pagination>
    </div>
</template>

<script>
export default {
  name: 'page',
  props: ['model'],
  methods: {
    handleSizeChange (val) {
      console.log(this.model)
    },
    handleCurrentChange (val) {
      console.log(this.model)
      this.model.data = []
    }
  }
}
</script>