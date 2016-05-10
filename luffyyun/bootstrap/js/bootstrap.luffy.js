/**
 * tabiframe 
 * tabiframe(this);
 * <a href="main1.html" data-title="首页">首页</a>
 * @author luffy<luffyzhao@vip.126.com>
 * @dateTime 2016-04-14T14:07:51+0800
 */
function TabIframe(a){var f,g,h,i,j,b=$(a).attr("href"),c="undefined"==$(a).data("title")?$(a).data("title"):$(a).text(),d=$.md5(b),e=$('iframe[name="'+d+'"');$(".page-tabs .tabs a").removeClass("active"),$(".L_iframe").hide(),$(".page-tabs .tabs").css({left:38}),e.length?(e.show(),$('.page-tabs a[href="'+b+'"]').addClass("active")):(f=$("<a>",{href:b,"class":"active",html:c,click:function(a){a.preventDefault(),TabIframe(this),$(this).siblings().removeClass("active"),$(this).addClass("active")}}),$("<i>",{"class":"fa fa-times-circle",click:function(a){var b,c;a.preventDefault(),b=$(this).parent("a").attr("href"),c=$.md5(b),$(this).parent("a").remove(),$('iframe[name="'+c+'"').remove()}}).appendTo(f),f.appendTo(".page-tabs .tabs"),$("<iframe>",{"class":"L_iframe",name:d,width:"100%",height:"100%",src:b,frameborder:0}).appendTo(".viewFramework-product")),g=$('.page-tabs a[href="'+b+'"]').position(),h=g.left,i=$(".page-tabs").innerWidth(),j=-(g.left-38),i<h+$('.page-tabs a[href="'+b+'"]').innerWidth()&&$(".page-tabs .tabs").css({left:j}),0>h&&$(".page-tabs .tabs").css({left:j})}