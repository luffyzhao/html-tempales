
axios.defaults.timeout = 5000
axios.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded;charset=UTF-8'
axios.defaults.baseURL = 'http://localhost:8080/static/'
axios.defaults.responseType = 'json'

// http请求拦截器
axios.interceptors.request.use(config => {
  $store.commit('show')
  return config
}, error => {
  $store.commit('hide')
  Message.error({
    message: '加载超时'
  })
  return Promise.reject(error)
})


// http响应拦截器
axios.interceptors.response.use(data => {
  $store.commit('hide')
  return data
}, error => {
  $store.commit('hide')
  Message.error({
    message: '加载失败'
  })
  return Promise.reject(error)
})

Http = {
  login () {
    return axios.get('login.json')
  }
}