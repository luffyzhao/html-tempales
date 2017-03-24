layui.define(['layer', 'code', 'form', 'element', 'util','laytpl'], function(exports){
  var $ = layui.jquery
  ,layer = layui.layer
  ,form = layui.form() 
  ,util = layui.util
  ,device = layui.device()
  ,element = layui.element();

  //阻止IE7以下访问
  if(device.ie && device.ie < 8){
    layer.alert('Layui最低支持ie8，您当前使用的是古老的 IE'+ device.ie + '，你丫的肯定不是程序猿！');
  }
  /**
   * 菜单
   * @method   rule
   * @DateTime 2017-03-24T15:37:34+0800
   * @param    {[type]}                 t [description]
   * @return   {[type]}                   [description]
   */
  layui.rule = function(opt){
    if(opt.href=='javascript:;'){
      return false;
    }
    if($('[lay-id="LAY_preview'+opt.rule+'"]').length == 0){
      var preview = '<iframe name="LAY_preview_'+opt.rule+'" src="'+opt.href+'" frameborder="0" style="width: 100%; height: 100%; display: inline;"></iframe>';
      element.tabAdd('iframe', {
        "title":opt.title,
        "content": preview,
        "id":'LAY_preview'+opt.rule
      });
    }else{
      window.frames["LAY_preview_"+opt.rule].location.reload();
    }
    element.tabChange('iframe', 'LAY_preview'+opt.rule);
  } 
  //搜索组件
  form.on('select(component)', function(data){
    layui.rule({
        "rule":$(data.elem).find("option:selected").data('ruleId'),
        "title":$(data.elem).find("option:selected").text(),
        "href":data.value
      });
  });
  

  //窗口scroll
  ;!function(){
    var main = $('.site-tree').parent(), scroll = function(){
      var stop = $(window).scrollTop();
      if($(window).width() <= 750) return;
      var bottom = $('.footer').offset().top - $(window).height();
      if(stop > 61 && stop < bottom){
        if(!main.hasClass('site-fix')){
          main.addClass('site-fix');
        }
        if(main.hasClass('site-fix-footer')){
          main.removeClass('site-fix-footer');
        }
      } else if(stop >= bottom) {
        if(!main.hasClass('site-fix-footer')){
          main.addClass('site-fix site-fix-footer');
        }
      } else {
        if(main.hasClass('site-fix')){
          main.removeClass('site-fix').removeClass('site-fix-footer');
        }
      }
      stop = null;
    };
    scroll();
    $(window).on('scroll', scroll);
  }();
  //点击菜单添加iframe页面
  ;!function(){
    $(document).on('click', 'a[data-rule-id]', function(event) {
      event.preventDefault();
      layui.rule({
        "rule":$(this).data('ruleId'),
        "title":$(this).text(),
        "href" : $(this).attr('href')
      });
    });
  }();
  //自动加载第一个页面
  $('.site-demo-nav [data-rule-id]').eq(0).trigger('click');
  //手机设备的简单适配
  var treeMobile = $('.site-tree-mobile')
  ,shadeMobile = $('.site-mobile-shade')

  treeMobile.on('click', function(){
    $('body').addClass('site-mobile');
  });

  shadeMobile.on('click', function(){
    $('body').removeClass('site-mobile');
  });

  exports('global', {});
});