(function($){
	$.get_spec_value_list	=	function(data){		
		$("#SPEC_LIST").html(data);
		$.colorbox.close();
	};
	$.getCategoryAttr		=	function(o){
		var obj 	=	$(o);
		$.post(
			obj.data('url'),
			{id:obj.val()},
			function(data){
				if(data){
					var str 	=	"";
					for(i in data){
						str += '<li>';
						str += '<label>'+data[i].attr_name+'<b>*</b></label>';
						str += '<div class="vocation"><select class="select3 selectattr" name="goods_attr['+data[i].id+']">';
						str += '<option value="">≡ 请选择商品属性 ≡</option>';
						for(j in data[i].attr_value){
							str += '<option value="'+data[i].attr_value[j]+'">'+data[i].attr_value[j]+'</option>';	
						}
						str += '</select></div>';
						str += '</li>';						
					}
					$("#category_attr").html(str);
					$(".selectattr").uedSelect({
						width : 100
					});
				}
			}
			);
	};

	$.clicked	=	function(url){
		location.href=url;
	};

	$.thumbnail	=	function(data){
		$('.thumbnail').attr('href',data.url)
	};

	$.fn.table	=	function(){
		var table = {};
		table.obj	=	$(this);
		table.id 	=	table.obj.data('tab');
		table.class	=	table.obj.data('class');
		$(table.class).hide();
		$(table.id).show();
		table.obj.parent().children().removeClass('cur');
		table.obj.addClass('cur');		
	}

	//上传图片filereader方式 
	$.upload_image	=	function (){
		$(".upload_image").bind("change", function(){
			var obj	=	$(this);		
			this.readOnly = true;		
			var reader = new FileReader();
			reader.onload = function(){
				obj.next().attr("src",obj.data('loading'));
				$.post(obj.data('url'),
				{
					oldimg:obj.data("oldimg"),
					data:this.result				
				},function(data){
					if(data.error == 0){
						$(".upload_image").readOnly = false;
						obj.nextAll('img').attr("src",data.url);	
						obj.nextAll("input[type='hidden']").val(data.img_id);
						obj.data('oldimg',data.img_id);
						$(".upload_image").unbind();
						$.upload_image();
					}else{
						alert("上传失败！");
					}
				},'json');
			}
			reader.readAsDataURL(this.files[0]);
		}, false);
		//表单用ajax提交
		$.submit_for_ajax	=	function(obj){
			var attrObj = "";
			var first	=	false;
			obj.find("input").each(function(){
				var name	=	$(this).attr("name");
				var type	=	$(this).attr("type");
				if(type == 'checkbox' && this.checked){
					if(first)attrObj	+=	"&";
					attrObj	+=	name +"="+ $(this).val() ;
					if(first == false) first = true;
				}
			});
		
			$.post(
				obj.attr("action"),
				attrObj,
				function(data){	
					if(data.error  > 0){
						alert(data.msg);
						return false;
					}
					$(obj.attr("html")).html(data.content);
					$.colorbox.close();
				},
				'json'
			);
			return false;
		};
	}

})(jQuery);