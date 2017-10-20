// 左侧菜单
Vue.component('left-menu', {
  template: ['<li class="nav-li">',
'    <el-tooltip effect="dark" :content="model.name" placement="right">',
'        <a v-if="!isFolder" @click="openPath(model)" class="nav-li-item">',
'            <div class="nav-icon"><i :class="model.icon"></i></div>',
'            <span>{{ model.name }}</span>',
'        </a>',
'        <div v-else @click="toggle" :class="{\'active\':open}" class="nav-li-item">',
'            <div class="nav-icon"><i :class="model.icon"></i></div>',
'            <span>{{ model.name }}</span>',
'        </div>',
'    </el-tooltip>',
'    <ul class="content-left-nav" v-show="open" v-if="isFolder">',
'        <left-menu v-for="item in model.children" :model="item"></left-menu>',
'    </ul>',
'</li>'].join(""),
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
    },
    openPath (model) {
      $store.commit('addIframeTab', model)
    }
  }
})
// 表单框
Vue.component('list-header', {
  template: ['<div class="list-header">',
'        <div class="list-header-title">',
'            {{title}}',
'        </div>',
'        <div class="list-header-box">',
'            <slot></slot>',
'        </div>',
'    </div>'].join(""),
  props: ['title']
})