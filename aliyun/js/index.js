$(function(){
	var time = self.setInterval(function() {
		$("#today").html(Date());
	}, 1000);
	
	//选项卡切换
	var tabs = $(".nav-tabs li");
	$('.nav-tabs li').each(function(index, el) {
		$(this).click(function(event) {
			//alert('mt'+index);
			tabs.removeClass('active');
			$('#formData .install').addClass('hidden');
			tabs.eq(index).addClass('active');
			$('.mt'+index).removeClass('hidden');
		});
	});

	var sidebar = $('#sidebar-left');
	$(window).resize(function(){
		var w = $(window).width();
		if (w < 1600) {
		    sidebar.removeClass('viewFramework-sidebar-full');
		    sidebar.addClass('viewFramework-sidebar-mini');
		    $('#time').toggleClass('hidden');
		}else{
			sidebar.addClass('viewFramework-sidebar-full');
			sidebar.removeClass('viewFramework-sidebar-mini');
		}
	}).trigger('resize');

	/*缩进中间边栏*/
	$('#sidebar-icon').on('click', function(event) {
		if (sidebar.hasClass('viewFramework-sidebar-full')) {
		    sidebar.removeClass('viewFramework-sidebar-full');
		}else{
			sidebar.addClass('viewFramework-sidebar-full');
		}
		sidebar.toggleClass('viewFramework-sidebar-mini');
		$('#time').toggleClass('hidden');
	});

	/*缩进左边边栏*/
	$('#icon-left').on('click', function(event) {
		$('#sidebal-middle').toggleClass("viewFramework-product-col-1");
	});

	$('.show-tip').on('click', function(event) {
		if ($(this).text()=='关闭操作提示') {
		    $(this).text('展开操作提示')
		}else{
			$(this).text('关闭操作提示')
		}
		$('#tip').toggleClass('hidden');
	});

	/*点击左边切换边栏*/
	$("#sidebar").on('click', 'li.nav-item', function(event) {
		event.preventDefault();
		/* Act on the event */
		var $this = $(this),$thisa = $this.children('a'),submenu = $thisa.attr("data-submenu");
		$("#sidebar").find('li.nav-item').removeClass('active');
		$this.find('.ng-isolate-scope').addClass('active');
		if(submenu){
			if($thisa.attr("data-count") == 0){
				var url = $thisa.attr("data-url");
				$('#sidebal-middle').removeClass("viewFramework-product-col-1");
				$('#icon-left').addClass('hidden');
				$("#mainFrame").attr("src",url);
				return false;
			}
			$('#icon-left').removeClass('hidden');
			$('#sidebal-middle').addClass("viewFramework-product-col-1");
			var subm = $("#product-nav-list .submenu-"+submenu);
			var submLi = subm.children('li');				
			if(submLi.length > 0){
				submLi.find('.ng-isolate-scope').removeClass('active')
				var iframeSrc = submLi.eq(0).find('.ng-isolate-scope').addClass('active').find('a').attr("data-url");
				subm.removeClass('hidden').siblings('ul').addClass('hidden');
				showNavbar(iframeSrc);
			}else{
				hiddenNavbar($thisa.attr("href"));
			}
		}else{
			hiddenNavbar($thisa.attr("href"));
		}
	});

	var sidem = $("#sidebal-middle"),mainFrame = $("#mainFrame");

	$("#product-nav-list").on('click', 'a', function(event) {
		var $this = $(this),url = $this.attr("data-url");
		$this.parents(".ng-isolate-scope").addClass('active').parents("li").siblings('li').find('.ng-isolate-scope').removeClass('active');
		mainFrame.attr("src",url);
	});

	$('#nomenu').on('click', function(event) {
		parent.layer.msg('没有菜单！',{
			type: 0,
			shade: [0.8, '#393D49'],
		});
		var $this = $(this),url = $this.attr("data-url");
		mainFrame.attr("src",url);
		return false;
	});

	function hiddenNavbar (iframeSrc) {
		sidem.children('.ng-scope').addClass('hidden');
		sidem.removeClass('viewFramework-product-col-1');
		mainFrame.attr("src",iframeSrc);
	}

	function showNavbar (iframeSrc) {
		sidem.children('.ng-scope').removeClass('hidden');
		sidem.addClass('viewFramework-product-col-1');
		mainFrame.attr("src",iframeSrc);
	}

	$('.checkChild').on('click', function(event) {
		$('.ishidden').toggleClass('hidden');
	});

	/**
	 * [意见窗口]
	 */
	$('.feedback-trigger-text').on('click', function(event) {
		$('#message').removeClass('hidden');
		/* Act on the event */
	});

	/**
	 * [关闭窗口]
	 */
	$('.feedback-close').on('click', function(event) {
		$('#message').addClass('hidden');
		/* Act on the event */
	});

	/**
	 * [退出]
	 */
	$('#loginOut').on({
		mouseover:function(){
			$(this).addClass('open');
		},
		mouseout:function(){
			$(this).removeClass('open');
		}
	});

	/**
	 * [弹出通知]
	 */
	$('.dropdown').on('click', function(event) {
		$(this).toggleClass('open');
		/* Act on the event */
	});

	/**
	 * [tab 全选/反选]
	 */
	var tab = $("#tab"),tabTbody = tab.children('tbody');
	var inputCheckbox = tabTbody.find('.checkbox-input');
	inputCheckbox.on('click', function(event) {
		var checkTr = tabTbody.find("input[type='checkbox']:checked");
		var checkLength = checkTr.length;
		if(checkLength != inputCheckbox.length){
			// 如果没有选择全部就取消全选
			$(".check-all").prop('checked',false);
		}
		if(checkLength > 1){
			// 选择的选框大于1时
			getCheckAll(checkTr);
			$(".checkbox-post").prop("checked",true);
			$(".allbutton").removeAttr("disabled");
		}else{
			$(".checkbox-post").removeProp('checked').val("");
			$(".allbutton").attr("disabled","disabled");
		}
	});
})