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
            $('[name="' + iframeClass + active + '"]').show();


            if (IframeList[active].left < tabMarginLeft) {
                tabMarginLeft = IframeList[active].left - 38;
            } else if ((IframeList[active].left + IframeList[active].width) > ($(tabbox).width() + tabMarginLeft + 38)) {
                tabMarginLeft = IframeList[active].left - 38;
            }

            $(tab).css({ marginLeft: -tabMarginLeft });
        },
        removeIframe = function(item) {
            var active = IframeList.exists(item);
            if (active === false) {
                return false;
            }

            $('.tab-a-' + active).remove();
            $('[name="' + iframeClass + active + '"]').remove();
            IframeList.splice(active, 1);
        };

    Iframe.prototype.show = function(e) {
        e.preventDefault();
        var $this = $(this),
            active = false,
            item = {
                "href": $this.attr('href'),
                "title": $this.text(),
            };

        if (item.href == 'undefined' || item.href == '' || item.title == '' || item.href == 'javascript:void(0);') {
            console.error('href error!');
            return false;
        }

        if ((active = IframeList.exists(item)) === false) {
            active = IframeList.push(item) - 1;

            var d = $("<a>", {
                href: 'javascript:void(0);',
                "class": 'tab-a-' + active,
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
            var f = $("<iframe>", { "class": iframeClass, name: iframeClass + active, width: "100%", height: '100%', src: item.href, frameborder: 0 });

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
            if (this[i].href == item.href && this[i].title == item.title) {
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

    $.fn.TabIframe = TabIframe
}(jQuery)
