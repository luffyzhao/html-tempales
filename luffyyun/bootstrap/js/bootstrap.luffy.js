+ function($) {
    'use strict';
    var tab = ".content-tabs .tabs",
        tabbox = ".content-tabs",
        tabMarginLeft = 0,
        iframeBox = '.viewFramework-product',
        iframeClass = 'L_iframe',
        IframeList = new Array,
        Iframe = function(el) {
            $(el).on('click', this.show);
        },
        showIframe = function(item) {
            var active = IframeList.exists(item);
            if (active === false) {
                return false;
            }

            $(tab).find('a').removeClass('active');
            $(tab).find('a').eq(active).addClass('active');
            $('.' + iframeClass).hide();
            $('[name="' + iframeClass + item.id + '"]').show();


            if (IframeList[active].left < tabMarginLeft) {
                tabMarginLeft = IframeList[active].left;
            } else if ((IframeList[active].left + IframeList[active].width) > ($(tabbox).width() + tabMarginLeft)) {
                tabMarginLeft = IframeList[active].left;
            }

            // console.log($(tab).find('a').eq(active).position());
            $(tab).css({ marginLeft: -tabMarginLeft });
        },
        removeIframe = function(item) {
            var active = IframeList.exists(item);
            if (active === false) {
                return false;
            }

            $('.tab-a-' + item.id).remove();
            $('[name="' + iframeClass + item.id + '"]').remove();
            IframeList.splice(active, 1);

            if(active != 0){
                showIframe(IframeList[active - 1]);
            }
        },
        rollleft = function() {
            return this.each(function() {
                $(this).bind('click', function(e) {
                    if (tabMarginLeft > 0 && tabMarginLeft > $(tabbox).width()) {
                        tabMarginLeft = tabMarginLeft - $(tabbox).width();
                    } else {
                        tabMarginLeft = 0;
                    }
                    $(tab).css({ marginLeft: -tabMarginLeft });
                });
            });
        },
        rollright = function () {
             return this.each(function() {
                $(this).bind('click', function(e) {
                    if($(tab).width() - tabMarginLeft > $(tabbox).width()){
                        tabMarginLeft = tabMarginLeft + $(tabbox).width();
                    }

                    $(tab).css({ marginLeft: -tabMarginLeft });
                });
            });
        };

    Iframe.prototype.show = function(e) {
        e.preventDefault();
        var $this = $(this),
            active = false,
            item = {
                "href": $this.attr('href'),
                "title": $this.text(),
                "id" : $this.data('id')
            };

        if (item.href == 'undefined' || item.href == '' || item.title == '' || item.href == 'javascript:void(0);') {
            console.error('href error!');
            return false;
        }

        if ((active = IframeList.exists(item)) === false) {
            active = IframeList.push(item) - 1;

            var d = $("<a>", {
                href: 'javascript:void(0);',
                "class": 'tab-a-' + item.id,
                html: item.title,
                click: function() {
                    e.preventDefault();
                    $(this).trigger('cilck.tab.show', [item]);
                }
            });
            var c = $("<i>", {
                "class": "fa fa-times-circle",
                click: function() {
                    e.preventDefault();
                    $(this).trigger('cilck.tab.close', [item]);
                }
            });
            var f = $("<iframe>", { "class": iframeClass, name: iframeClass + item.id, width: "100%", height: '100%', src: item.href, frameborder: 0 });

            c.appendTo(d);
            d.appendTo(tab);
            f.appendTo(iframeBox);

            IframeList[active].left = d.position().left;
            IframeList[active].width = d.width();

            d.bind('cilck.tab.show', function(e, a) {
                showIframe(a);
            });

            c.bind('cilck.tab.close', function(e, a) {
                removeIframe(a);
            });
        }

        $(tab).find('a').eq(active).trigger('cilck.tab.show', [item]);
    }

    if (typeof Array.prototype.exists == 'undefined') Array.prototype.exists = function(item) {
        for (var i = this.length - 1; i >= 0; i--) {
            if (this[i].id == item.id) {
                return i;
            }
        }
        return false;
    }

    function TabIframe(option) {
        return this.each(function() {
            new Iframe(this);
        })
    }

    $.fn.TabIframe = TabIframe;

    $.fn.rollleft = rollleft;
    $.fn.rollright = rollright;
    
    
}(jQuery)
