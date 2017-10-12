<template>
  <div>
      <span @click="show">show</span>
      <div v-loading.body="loading" style="height:1500px; width:500px"></div>
  </div>
</template>

<script>
export default {
  computed: {
    loading () {
      return this.$store.state.loading.loading
    }
  },
  methods: {
    show () {
      this.$store.commit('show')
    }
  }
}
</script>