$(function() {
    var sidebar = $('#sidebar-left');
    $(window).resize(function() {
        var w = $(window).width();
        if (w < 1200) {
            sidebar.removeClass('viewFramework-sidebar-full');
            sidebar.addClass('viewFramework-sidebar-mini');
        } else {
            sidebar.addClass('viewFramework-sidebar-full');
            sidebar.removeClass('viewFramework-sidebar-mini');
        }
    }).trigger('resize');

    /*缩进中间边栏*/
    $('#sidebar-icon').on('click', function(event) {
        if (sidebar.hasClass('viewFramework-sidebar-full')) {
            sidebar.removeClass('viewFramework-sidebar-full');
        } else {
            sidebar.addClass('viewFramework-sidebar-full');
        }
        sidebar.toggleClass('viewFramework-sidebar-mini');
    });

    $('[data-toggle="left-nav"] > li > a').bind('click', function(event) {
        event.preventDefault();
        $(this).parent().siblings().removeClass('active');
        $(this).parent().addClass('active');
    });

    $(".ng-scope").bind('click', function(event) {
        event.preventDefault();
        if(typeof TabIframe == 'undefined'){
            (typeof window.parent.TabIframe) != 'undefined' && window.parent.TabIframe(this);
        }else{
            TabIframe(this);
        }
    });

    $('[data-toggle="left-nav"] a:first').trigger('click');

    $(".content-tabs .roll-left").bind('click', function(event) {
        $(".page-tabs .tabs").css({
            left:38
        });
    });

    $(".content-tabs .roll-right").bind('click', function(event) {

        if($(".page-tabs .tabs a:last").position().left > (-$(".page-tabs .tabs").position().left + $('.page-tabs').innerWidth())){
            $(".page-tabs .tabs").css({
                left:-($(".page-tabs .tabs").position().left + $('.page-tabs').innerWidth())
            });
        }
        
    });
});
