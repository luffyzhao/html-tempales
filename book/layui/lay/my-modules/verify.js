layui.define(['jquery','form'], function(exports){
     var form = layui.form()
        $ = layui.jquery;
        //自定义验证规则
      form.verify({
        role: [/(.+){3,10}/,'用户组名称必须3到10位']
        ,pass: [/(.+){6,12}$/, '密码必须6到12位']
        ,content: function(value){
          layedit.sync(editIndex);
        }
      });
});