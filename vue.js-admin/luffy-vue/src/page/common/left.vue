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

let toTree = function (arr, parentId) {
  let treeArr = []
  for (let i in arr) {
    let item = arr[i]
    if (item.parent_id === parentId && item.level <= 2) {
      let children = toTree(arr, item.id)
      if (children.length > 0) {
        item.children = children
      }
      treeArr.push(item)
    }
  }
  return treeArr
}

export default {
  name: 'left',
  components: {
    'tree-menu': TreeMenu
  },
  data () {
    let rule = this.$db.get('rule')
    let data = toTree(rule, 0)
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
  .content-left-fold{
    background: #394555;
    height: 40px;
    cursor: pointer;
    text-align: center;
  }
</style>
