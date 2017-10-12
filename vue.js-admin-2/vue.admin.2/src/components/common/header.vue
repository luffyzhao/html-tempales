<template>
  <div class="header float-row">
    <router-link class="header-brand" to="/"></router-link>
    
    <div class="header-right">
        <el-dropdown trigger="click" @command="clickMeView">
          <span class="el-dropdown-link">
            Luffy Zhao <i class="caret"></i>
          </span>
          <el-dropdown-menu slot="dropdown">
            <el-dropdown-item command="个人中心">
              个人中心
            </el-dropdown-item>
            <el-dropdown-item command="退出">
              退出
            </el-dropdown-item>
          </el-dropdown-menu>
        </el-dropdown>
    </div>

    <div class="header-right">
        <el-dropdown trigger="click"  @command="clickMeView">
          <span class="el-dropdown-link">
            消息 <el-badge class="mark el-dropdown-link-badge" :value="15" />
          </span>
          <el-dropdown-menu slot="dropdown">
            <el-dropdown-item class="row" command="评论">
              评论
              <el-badge class="mark el-dropdown-link-badge" :value="12" />
            </el-dropdown-item>
            <el-dropdown-item class="row" command="回复">
              回复
              <el-badge class="mark el-dropdown-link-badge" :value="3" />
            </el-dropdown-item>
          </el-dropdown-menu>
        </el-dropdown>
    </div>
  </div>
</template>

<script>
export default {
  name: 'header',
  methods: {
    clickMeView (command) {
      if (command === '退出') {
        window.cache.clear()
        this.$router.push({path: '/login'})
      }
    }
  }
}
</script>


<style type="text/css">
  .header{
    z-index: 2;
    position: relative;
    height: 50px;
    background-color: #09C;
    box-sizing: border-box;
    padding-right: 20px;
  }
  .header-brand {
    width: 50px;
    height: 50px;
    color: #fff;
    background-color: #0087b4;
    display: block;
    float: left;
  }
  .header-right{
    height: 50px;
    line-height: 50px;
    float: right;
    padding: 0 15px;
  }
  .header-right .el-dropdown{
    color: #fff;
  }
  .el-dropdown-menu{
    color: #48576a;
  }
  .el-dropdown-link-badge{
    float: right;
    line-height: 1;
    margin-top: 8px;
  }
  .el-dropdown-link-badge sup{
    top: 0;
  }
  .el-dropdown-link{
    cursor: pointer;
  }
  .header-right .el-badge__content{
    border: 1px solid #09C; 
  }
</style>
