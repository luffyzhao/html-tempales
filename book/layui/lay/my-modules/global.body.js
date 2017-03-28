layui.define(['layer', 'code', 'form', 'element', 'util', 'laytpl','laypage'], function(exports) {
    var $ = layui.jquery,
        layer = layui.layer,
        form = layui.form(),
        util = layui.util,
        laytpl = layui.laytpl,
        device = layui.device(),
        element = layui.element();

    //阻止IE7以下访问
    if (device.ie && device.ie < 8) {
        layer.alert('Layui最低支持ie8，您当前使用的是古老的 IE' + device.ie + '，你丫的肯定不是程序猿！');
    }

    /**
     * 菜单
     * @method   rule
     * @DateTime 2017-03-24T15:37:34+0800
     * @param    {[type]}                 t [description]
     * @return   {[type]}                   [description]
     */
    layui.rule = function(opt) {
            if (opt.href == 'javascript:;') {
                return false;
            }
            if ($('[lay-id="LAY_preview' + opt.rule + '"]').length == 0) {
                var preview = '<iframe name="LAY_preview_' + opt.rule + '" src="' + opt.href + '" frameborder="0" style="width: 100%; height: 100%; display: inline;"></iframe>';
                element.tabAdd('iframe', {
                    "title": opt.title,
                    "content": preview,
                    "id": 'LAY_preview' + opt.rule
                });
            } else {
                window.frames["LAY_preview_" + opt.rule].location.reload();
            }
            element.tabChange('iframe', 'LAY_preview' + opt.rule);
        }
        /**
         * ajax 成功返回后的数据处理
         * @method   done
         * @DateTime 2017-03-28T13:49:37+0800
         * @param    {[type]}                 $data [description]
         * @return   {Function}                     [description]
         */
    layui.done = function($data) {
        if ($data.code == 0) {
            // 失败不跳转
            layer.msg($data.msg, { icon: 5 });
        } else if($data.code == 1){
            // 成功跳转
            layer.msg($data.msg, { icon: 1 });
            window.location.href = $data.url;
        }
    }
    /**
     * 列表页面数据加载
     * @method   list
     * @DateTime 2017-03-28T16:40:43+0800
     * @param    {[type]}                 el     [description]
     * @param    {[type]}                 params [description]
     * @return   {[type]}                        [description]
     */
    layui.list = function(el,params){
        // 有设置data-elem用elem
        if(typeof(el.data('elem')) != 'undefined'){
            el = $(el.data('elem')).length > 0 ? $(el.data('elem')).eq(0) : el;
        }
        var dataUrl = typeof(el.data('url')) == 'undefined' ? document.URL : el.data('url');
        $.ajax({
            "url": dataUrl,
            "type": 'POST',
            "dataType": 'json',
            "data":params
        }).done(function($data) {
            if($data.code == 1 && $data.data.data.length > 0){
                laytpl(el.next('script.layui-body-table-script').html()).render($data, function(html) {
                    el.html(html);
                });
            }else if($data.code == 0){
                el.html('<tr><td colspan="'+el.prev().find('th').length+'">'+$data.msg+'</td></tr>');
            }else{
                el.html('<tr><td colspan="'+el.prev().find('th').length+'">没有数据了哟！</td></tr>');
            }

            if($data.data.pages.pages > 1){
                var pageCont = el.parents('.layui-table').next('[lay-page]');
                layui.laypage({
                    "cont":pageCont,
                    "curr":$data.data.pages.curr,
                    "pages":$data.data.pages.pages,
                    "jump":function(obj, first){
                        if(first){
                            return true;
                        }
                        params.page = obj.curr;
                        layui.list(el,params);
                    }
                });
            }
        });
    }
    /**
     * ajax 请求准备后，发送前
     * @method
     * @DateTime 2017-03-28T13:57:24+0800
     * @param    {[type]}                 ){                     layer.load(0,{shade:[0.1,"#fff"]});    } [description]
     * @return   {[type]}                     [description]
     */
    $(document).ajaxStart(function() {
        layer.load(0, { shade: [0.1, "#fff"] });
    });
    /**
     * ajax 请求失败
     * @method
     * @DateTime 2017-03-28T13:57:30+0800
     * @param    {[type]}                 ){                     layer.msg("网络错误！！",{icon: 5});    } [description]
     * @return   {[type]}                     [description]
     */
    $(document).ajaxError(function() {
        layer.msg("网络错误！！", { icon: 5 });
    });
    /**
     * 所有回调函数处理完毕后调用
     * @method
     * @DateTime 2017-03-28T13:57:33+0800
     * @param    {[type]}                 ){                     layer.closeAll('loading');    } [description]
     * @return   {[type]}                     [description]
     */
    $(document).ajaxStop(function() {
        layer.closeAll('loading');
    });


    /**
     * 监听保存提交
     * @method
     * @DateTime 2017-03-28T16:57:32+0800
     * @param    {[type]}                 data) {                   var action [description]
     * @return   {[type]}                       [description]
     */
    form.on('submit(save)', function(data) {
        var action = typeof(data.form.action) == 'undefined' ? document.URL : data.form.action,
            method = typeof(data.form.method) == 'undefined' ? 'post' : data.form.method,
            params = JSON.stringify(data.field);
        $.ajax({
            "url": action,
            "type": 'POST',
            "dataType": 'json',
            "data": params,
        }).done(layui.done);
        return false;
    });

    /**
     * 监听搜索提交
     * @method
     * @DateTime 2017-03-28T16:57:24+0800
     * @param    {[type]}                 data) {                   layui.list($(data.elem),data.field);    } [description]
     * @return   {[type]}                       [description]
     */
    form.on('submit(search)', function(data) {
        layui.list($(data.elem),data.field);
        return false;
    });
    /**
     * 删除记录
     * @method
     * @DateTime 2017-03-28T09:44:16+0800
     * @param    {[type]}                 event)            {                   event.preventDefault();                                               layer.confirm("您确定要删除这条记录吗？",{            icon: 3, title:'删除提醒'        } [description]
     * @param    {[type]}                 function(index){                                                window.location.reload();        });    } [description]
     * @return   {[type]}                                   [description]
     */
    $(document).on('click', '[lay-delete]', function(event) {
        event.preventDefault();
        var href = $(this).attr('href');
        /* Act on the event */
        layer.confirm("您确定要删除这条记录吗？", {
            icon: 3,
            title: '删除提醒'
        }, function(index) {
            $.ajax({
                "url": href,
                "type": 'POST',
                "dataType": 'json',
            }).done(layui.done);
        });
    });

    /**
     * 页面加载完毕最后的处理的一些东西
     * @method
     * @DateTime 2017-03-28T14:08:01+0800
     * @param    {[type]}                 event) {                           alert(1);            } [description]
     * @return   {[type]}                        [description]
     */
    $(document).ready(function(event) {
        /**
         * 如果存在 layui-body-table 标签
         * @method   if
         * @DateTime 2017-03-28T14:09:24+0800
         * @param    {[type]}                 $('#layui-body-table').length >             0 [description]
         * @return   {[type]}                                               [description]
         */
        $('.layui-body-table').each(function(index, el) {
            layui.list($(el),{});
        });
    });
    

    util.fixbar();
    exports('global.body', {});
});
