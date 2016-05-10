(function($){
	$.confirm = function(params){
		var buttonHTML = '';
		$.each(params.buttons,function(name,obj){
			// Generating the markup for the buttons:
			buttonHTML += '<a href="#" class="button btn ng-scope ng-binding btn-primary '+obj['class']+'">'+name+'<span></span></a>';
			if(!obj.action){
				obj.action = function(){};
			}
		});
		
		var markup = [
			'<div class="modal-dialog" id="confirmBox">',
				'<div class="modal-content">',
					'<div class="console-message-dialog ng-scope">',
						'<div class="modal-header">',
							'<button type="button" class="close">×</button>',
							'<h5 class="modal-title ng-binding">',params.title,'</h5>',
						'</div>',
						'<div class="modal-body clearfix">',
							'<div class="col-sm-1 text-center fl">',
								'<span class="text-size-32 ',params.icon,' text-warning"></span>',
							'</div>',
							'<div class="col-sm-11 breakall">',
								'<p ng-bind-html="message" class="ng-binding">',
									,params.message,
								'</p>',
							'</div>',
						'</div>',
						'<div class="modal-footer">',
						buttonHTML,
						'</div></div></div></div>'
		].join('');

		//alert(markup);
		//$(markup).hide().appendTo('body').fadeIn();
		//parent.layer.msg($(markup));
		parent.layer.open({
			type: 1,
			title: false,
			area: ['600px', '199px'],		// 窗口大小
			closeBtn: 0,					// 关闭按钮是否打开
			time: 0,                    	// 设置多长时间关闭  例如：3000
			content: markup,
			success: function(layero, index){
				//console.log(layero.find('.btnOK'));
	            layero.find('.btnOK').on('click', function(){
	                $.post(params.dataUrl, {
	                	id: params.dataUid, 
	                	type: params.dateType,
	                	tip: params.tipName,
	                	status: params.dataStatus,
	                	alluid: params.allUid
	                }, function(data) {
	                	parent.layer.close(index);
	                	// console.log(data);
	                	// console.log(textStatus);
	                	// console.log(xhr);
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

	            layero.find('.btnCancel,.close').on('click', function(){
	                parent.layer.close(index);
	            });
	        }
		});
	}
})(jQuery);