$(function(){
	$.upload_image();
	//checkbox全选
	$(".all_checkbox").change(function(){		
		if($(this).attr('checked')){
			$(".item_checkbox").attr("checked" , true);
		}else{
			$(".item_checkbox").attr("checked" , false);
		}
	});
	//提交删除checkbox
	$(".del_checkbox").click(function(){
		var data 	=	[];
		$(".item_checkbox").each(function(i){			
			if($(this).attr('checked')){
				data.push($(this).val());
			}				
		});
		// console.log(data);
		if(data.length == 0)
			return false;
		$.post($(this).data('url') , {ids:data} , function(data){
			if(data.error > 0){
				$.colorbox({html:"<div class='mess'>未知错误！</div>"});
			}else{
				$.colorbox({html:"<div class='mess'>删除成功！</div>",onClosed:function(){
					location.href	=	data.url;
				}});
			}
		});
	});

	//左边收缩
	$("#side_switch").click(function(){
		$(".left").hide();
		$(".right_body").css('margin-left',0);
		$(this).hide();
		$("#side_switchl").show();
	});
	//左边弹出
	$("#side_switchl").click(function(){
		$(".left").show();
		$(".right_body").css('margin-left',200);
		$(this).hide();
		$("#side_switch").show();
	});
	

	//table切换
	$('ul.title_info li').bind('click',function(){
		$(this).table()
	});

	
})



