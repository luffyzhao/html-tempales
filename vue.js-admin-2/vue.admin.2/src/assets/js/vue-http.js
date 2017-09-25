/**
 * http配置
 */
// 引入axios以及element ui中的loading和message组件
import axios from 'axios'
import { Message } from 'element-ui'
// 超时时间
axios.defaults.timeout = 5000
axios.defaults.headers.common['Authorization'] = window.cache.get('token')
axios.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded;charset=UTF-8'
axios.defaults.baseURL = 'http://localhost:8080/static/'
axios.defaults.responseType = 'json'
// http请求拦截器
axios.interceptors.request.use(config => {
  return config
}, error => {
  Message.error({
    message: '加载超时'
  })
  return Promise.reject(error)
})
// http响应拦截器
axios.interceptors.response.use(data => {
  return data
}, error => {
  Message.error({
    message: '加载失败'
  })
  return Promise.reject(error)
})

export default {
  login () {
    return axios.get('login.json')
  },
  rule () {
    return axios.get('sule.json')
  }
}
