<template>
    <div class="page">
        <el-pagination
          @size-change="handleSizeChange"
          @current-change="handleCurrentChange"
          :current-page="model.param.current"
          :page-sizes="[100, 200, 300, 400]"
          :page-size="model.param.size"
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
      this.$emit('pageSubmit')
    },
    handleCurrentChange (val) {
      this.$emit('pageSubmit')
    }
  }
}
</script>