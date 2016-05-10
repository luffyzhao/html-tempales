$(function(){
	layer.config({
	    extend: 'extend/layer.ext.js',	//注意，目录是相对layer.js根目录。如果加载多个，则 [a.js, b.js, …]
	    //type: 0, 						// 0（信息框，默认）1（页面层）2（iframe层）3（加载层）4（tips层）
	    shift: 0, 						//默认动画风格 动画效果 0-6
	    time: 0,                    	// 设置多长时间关闭  例如：3000
	    fix: false,						// 即鼠标滚动时，层是否固定在可视区域
	    maxmin: false,					// 窗口是否开启最大化
	    shadeClose: false, 				// 点击遮罩层是否关闭弹窗
	    shade: [0.8, '#393D49'],    	// 遮罩层颜色及透明度
	    skin: 'layui-layer-molv'		//默认皮肤
	});

	//分组弹窗
	$('.groupAuth').on('click', function(){
		var dataUrl = $(this).attr('data-url');
	    parent.layer.open({
		    type: 2, 						// 0（信息框，默认）1（页面层）2（iframe层）3（加载层）4（tips层）
		    title: false,               	// 标题
		    //area: ['600px', '359px'],		// 窗口大小
		    area: '600px',
		    closeBtn: 0,					// 关闭按钮是否打开
		    content: dataUrl,
		    success: function(layero, index){
		        var body = parent.layer.getChildFrame('body', index);
		        // console.log(body.html()) //得到iframe页的body内容
		        // body.find('input').val('Hi，我是从父页来的')
		        body.find('.btnOK').on('click', function(){
		        	parent.layer.close(index);
		        	
		        	// fromData = body.find('#GroupForm').serialize();
		        	// console.log(body.find('#GroupForm').serialize());
					var json = body.find('#GroupForm').serializeArray();
		        	//console.log(body.find('#GroupForm').serialize());
		        	var uid = body.attr('data-uid');
		        	//alert(uid);
		        	$.post(dataUrl, {fromData:json, uid:uid}, function(data) {
		        		if (data.status == 1) {
	                	    parent.layer.msg(data.info, {
							    time: 2000 //2秒关闭（如果不配置，默认是3秒）
							});
	                	}else{
	                		parent.layer.msg(data.info, {
							    time: 2000 //2秒关闭（如果不配置，默认是3秒）
							});
	                	}

	                	if(data.url&&data.url!=''){
	                	    setTimeout(function(){
	                	        location.href=data.url;
	                	    },2000);
	                	}
	                	if(data.url==''){
	                	    setTimeout(function(){
	                	        location.href=data.url;
	                	    },1000);
	                	}
		        	});
	            });

	            body.find('.btnCancel,.close').on('click', function(){
	                parent.layer.close(index);
	            });
		    }
		});
	});

	//分组弹窗
	$('.lookReferee').on('click', function(){
		var dataUrl = $(this).attr('data-url');
		parent.layer.open({
		    type: 2, 						// 0（信息框，默认）1（页面层）2（iframe层）3（加载层）4（tips层）
		    title: false,               	// 标题
		    //area: ['600px', '359px'],		// 窗口大小
		    area: '60%',
		    closeBtn: 0,					// 关闭按钮是否打开
		    content: dataUrl,
		    success: function(layero, index){
		        var body = parent.layer.getChildFrame('body', index);
		        // console.log(body.html()) //得到iframe页的body内容
		        // body.find('input').val('Hi，我是从父页来的')
		        body.find('.btnCancel,.close').on('click', function(){
	                parent.layer.close(index);
	            });
		    }
		});
	    console.log(dataUrl);
	});

	//重定向跳转
	$('.redirect').on('click', function(event) {
		var redirect_url = $(this).attr('data-url');
		//alert(redirect_url);
		location.href = redirect_url;
		/* Act on the event */
	});;
	//确认弹窗
	$('.delete').on('click', function(){
		$.confirm({
			'dataUrl'	: $(this).attr('data-url'),
			'dataUid'	: $(this).attr('binding-id'),
			'dateType'	: $(this).attr('date-type'),
			'dataStatus': $(this).attr('data-status'),
			'tipName'	: $(this).text(),
			'allUid'	: $('.all-data').val(),
			'icon'		: 'icon-warning-2',
			'title'		: '温馨提示',
			'message'	: '您确定要'+$(this).text()+'吗？',
			'buttons'	: {
				'确认'	: {
					'class'	: 'btnOK'
				},
				'取消'	: {
					'class'	: 'btnCancel'
				}
			}
		});
	});
})