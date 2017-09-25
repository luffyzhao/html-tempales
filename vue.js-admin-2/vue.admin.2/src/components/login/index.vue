<template>
  <div>
    <div class="body"></div>
    <div class="login">
      <div class="logo">
      </div>
      <el-form ref="form" :model="form" :rules="rules">
          <div class="item-input active">
              <div class="item-input-icon">
              <icon name="yonghu" type="class"></icon>
              </div><div class="item-input-input">
                  <el-form-item prop="username">
                      <el-input v-model="form.username" placeholder="用户名"></el-input>
                  </el-form-item>
              </div>
          </div>
          <div class="item-input">
              <div class="item-input-icon">
              <icon name="mima" type="class"></icon>
              </div><div class="item-input-input">
                  <el-form-item prop="password">
                      <el-input v-model="form.password" type="password" placeholder="密码"></el-input>
                  </el-form-item>
              </div>
          </div>
          <div class="item-input last">
              <el-checkbox>记住用户名和密码</el-checkbox>
          </div>
          <div class="item-input last button">
              <el-button type="success" @click="loginSubmit('form')">登录</el-button>
          </div>
      </el-form>
    </div>
  </div>
</template>

<script>
import Http from '@/assets/js/vue-http'

export default {
  name: 'login',
  methods: {
    loginSubmit (form) {
      this.$refs[form].validate((valid) => {
        if (valid) {
          this.doLogin()
        } else {
          return false
        }
      })
    },
    doLogin () {
      Http.login().then(response => {
        response = response.data
        window.cache.set('token', response.data.token)
        window.cache.set('rule', response.data.rules)
        this.$router.push('/index/main')
      }).catch(err => {
        console.log(err)
      })
    }
  },
  data () {
    return {
      form: {
        username: '',
        password: ''
      },
      rules: {
        username: [
          {required: true, message: '请输入用户名', trigger: 'blur'},
          {pattern: /^[a-zA-Z][a-zA-Z0-9]{5,17}$/, message: '以字母开头,长度在6-18之间,只能包含字符,数字和下划线'}
        ],
        password: [
          {required: true, message: '请输入密码', trigger: 'blur'},
          {pattern: /^(\w){6,20}$/, message: '只能输入6-20个字母、数字、下划线'}
        ]
      }
    }
  }
}
</script>



<style>
.body {
  top:0;
  left:0;
  position: absolute;
  width: 100%;
  height: 100%;
  background: url(../../assets/img/body_bg.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  overflow: hidden
}
.login{
    width: 381px;
    min-height: 339px; 
    background-color: #fff;
    box-shadow: 7px 7px 7px rgba(0,0,0,.4);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index:999;
}
.logo{
    height: 82px;
}
.item-input{
    height: 72px;
    box-sizing: border-box;
    padding: 17px 24px;
    border-left: 6px solid #fff;
    border-right: 6px solid #04b3c4;
}
.item-input.active{
    border-left: 6px solid #4e8ff7;
    border-right: 6px solid #fff;
}
.item-input.last{
    border-right: 6px solid #fff;
    padding-bottom: 10px;
}
.item-input.last.button{
    height: 55px;
    padding-top: 0
}
.item-input .item-input-icon{
    display: inline-block;
    vertical-align: top;
    border-top: 1px #ccc solid;
    border-bottom: 1px #ccc solid;
    border-left: 1px #ccc solid;
    width: 37px;
    height: 37px;
    line-height: 35px;
    text-align: center;
    color: #ccc;
    box-sizing: border-box;
}
.item-input .item-input-input{
    display: inline-block;
    vertical-align: top;
    box-sizing: border-box;
    border-top: 1px #ccc solid;
    border-bottom: 1px #ccc solid;
    border-right: 1px #ccc solid;
    height: 37px;
    width: 284px;
}
.item-input .item-input-input .el-input{
    height: 100%;
}
.item-input .item-input-input .el-form-item__error{
    left: -37px;
}
.item-input input{
    padding: 0;
    margin: 0;
    border: none;
    background: none;
    width: 100%;
    height: 100%;
    outline: none;
}
.item-input .el-checkbox__inner,.item-input .el-button{
    border-radius: 0px;
}
.item-input .el-button{
    width: 100%;
}

</style>
