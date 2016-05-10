$(function(){
    $('#submit').on('click', function(event) {
        AjaxSubmit();
    });

    $("select[name='level']").change(function(){
        var level=$(this).val();
        $("select[name='pid']>option").attr("disabled","disabled");
        if(level==0){
            $("select[name='pid']>option[value='0']").removeAttr("disabled").attr("selected","selected");
        }else if(level==1){
            $("select[name='pid']>option[level='1']").removeAttr("disabled");
        }else if(level==2){
            $("select[name='pid']>option[level='2']").removeAttr("disabled");
        }else if(level==3){
            $("select[name='pid']>option[level='3']").removeAttr("disabled");
        }else{
            $("select[name='pid']>option[level='4']").removeAttr("disabled");
        }
    });
});
/*
 *
 * @function: 判断浏览器类型是否是Safari、Firefox、ie、chrome浏览器
 * @return: true或false
 *
 */
function isSafari(){
    var userAgent = navigator.userAgent.toLowerCase();
    if(userAgent.indexOf("safari") > -1 && userAgent.indexOf("chrome") < 0){
        return true;
    }
    return false;
}

function isChrome(){
   if(navigator.userAgent.indexOf("Chrome") !== -1) {
        return true;
   }
   return false;
}

function isFirefox(){
    if(navigator.userAgent.indexOf("Firefox")>0){
        return true;
    }
    return false;
}

function isMSIE9(){
    if(navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion.split(";")[1].replace(/[ ]/g,"")=="MSIE9.0"){
        return true;
    }
    return false;
}

function isMSIE8(){
    if(navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion.split(";")[1].replace(/[ ]/g,"")=="MSIE8.0"){
        return true;
    }
    return false;
}

function isMSIE7(){
    if(navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion.split(";")[1].replace(/[ ]/g,"")=="MSIE7.0"){
        return true;
    }
    return false;
}

function percentage(num, total) {
    return (Math.round(num / total * 10000) / 100.00 + "%");// 小数点后两位百分比
}

function checkAll(name){
    var el = document.getElementsByTagName('input');
    var len = el.length;
    for(var i=0; i<len; i++){
        if((el[i].type=="checkbox") && (el[i].name==name)){
            el[i].checked = true;
        }
    }
    getCheckAll($("#tab tbody input[type='checkbox']:checked"));
    $(".checkbox-post").prop("checked",true);
    $(".allbutton").removeAttr("disabled");
}

function clearAll(name){
    var el = document.getElementsByTagName('input');
    var len = el.length;
    for(var i=0; i<len; i++){
        if((el[i].type=="checkbox") && (el[i].name==name)){
            el[i].checked = false;
        }
    }
    $(".checkbox-post").removeProp('checked').val("");
    $(".allbutton").attr("disabled","disabled");
}

function getCheckAll(elm){
    var checkedVal = "";
    elm.each(function(index, el) {
        checkedVal += $(this).val()+",";
    });
    $(".checkbox-post").val(checkedVal);
}

/**
 * [newRemind 标题闪烁]
 * @param  {[type]} pageTitle  [原页面的标题]
 * @param  {[type]} showRemind [闪烁时显示的东东：如【新提醒】]
 * @param  {[type]} hideRemind [闪烁时隐藏的东东：如【　　　】]
 * @param  {[type]} time       [闪烁间隔的时间]
 */
function newRemind(pageTitle, showRemind, hideRemind, time) {
    if (newRemindFlag == 1) {
        document.title = showRemind + pageTitle;
        newRemindFlag = 2;
    } else {
        document.title = hideRemind + pageTitle;
        newRemindFlag = 1;
    }

    setTimeout("newRemind('" + pageTitle + "','" + showRemind + "','" + hideRemind + "'," + time + ")", time);
}

/**
 * 通用AJAX提交
 * @param  {string} url    表单提交地址
 * @param  {string} formObj    待提交的表单对象或ID
 */
function AjaxSubmit(url,formObj){
    if(!formObj||formObj==''){
        var formObj= $('#formData');
    }
    //console.log(formObj);
    if(!url||url==''){
        var url=document.URL;
    }
    //console.log(url);
    $(formObj).ajaxSubmit({
        url:url,
        type:"POST",
        success:function(data, st) {
            //                var data = eval("(" + data + ")");
            if(data.status==1){
                parent.layer.open({
                    type: 1,
                    title: false,
                    closeBtn: 0, //不显示关闭按钮
                    scrollbar: false,
                    shade: 0,
                    time: 2000, //2秒后自动关闭
                    offset: '55px',
                    shift: 5,
                    content: '<div class="HTooltip bounceInDown animated" style="width:350px;padding:7px;text-align:center;position:fixed;right:7px;background-color:#5cb85c;color:#fff;z-index:100001;box-shadow:1px 1px 5px #333;-webkit-box-shadow:1px 1px 5px #333;font-size:14px;">'+data.info+'</div>', //iframe的url，no代表不显示滚动条
                });
            }else{
                parent.layer.open({
                    type: 1,
                    title: false,
                    closeBtn: 0, //不显示关闭按钮
                    scrollbar: false,
                    shade: 0,
                    time: 2000, //2秒后自动关闭
                    offset: ['55px','100%'],
                    shift: 6,
                    content: '<div class="HTooltip bounceInDown animated" style="width:350px;padding:7px;text-align:center;position:fixed;right:7px;background-color:#D84C31;color:#fff;z-index:100001;box-shadow:1px 1px 5px #333;-webkit-box-shadow:1px 1px 5px #333;font-size:14px;">'+data.info+'</div>', //iframe的url，no代表不显示滚动条
                });
                //my_error(data.info);
            }

            if(data.url&&data.url!=''){
                setTimeout(function(){
                    location.href=data.url;
                },2000);
            }
            if(data.url==''){
                setTimeout(function(){
                    location.reload();
                },1000);
            }
        }
    });
    return false;
}
