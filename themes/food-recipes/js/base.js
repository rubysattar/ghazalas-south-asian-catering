/**
 * Base js functions
 */
jQuery(document).ready(function(){
    var $container = jQuery('.masonry-container');
    var gutter = 30;
    var min_width = 300;
    $container.imagesLoaded( function(){
        $container.masonry({
            itemSelector : '.box',
            gutterWidth: gutter,
            isAnimated: true,
              columnWidth: function( containerWidth ) {
                var box_width = (((containerWidth - 2*gutter)/3) | 0) ;

                if (box_width < min_width) {
                    box_width = (((containerWidth - gutter)/2) | 0);
                }

                if (box_width < min_width) {
                    box_width = containerWidth;
                }

                jQuery('.box').width(box_width);
				jQuery('.article').css('margin','0px');	
                return box_width;
              }
        });
    });
});

/* Start Menu */
(function ($) {
    var index = 0;
    $.fn.menumaker = function (options) {
        var mainmenu = jQuery(this),
            settings = jQuery.extend({
                title: "",
                breakpoint: 1024,
                format: "dropdown",
                sticky: false
            }, options);
        return this.each(function () {
            mainmenu.prepend('<div id="menu-button" aria-hidden="true">' + settings.title + '</div>');
            jQuery(this).find("#menu-button").on('click', function () {
                jQuery(this).toggleClass('menu-opened');
                var mainmenu = jQuery(this).next('ul');
                if (mainmenu.hasClass('open')) {
                    mainmenu.slideToggle().removeClass('open');
                } else {
                    jQuery('ul.mobile-menu').slideToggle().addClass('open');
                    if (settings.format === "dropdown") {
                        mainmenu.find('ul').show();
                    }
                }
            });
            mainmenu.find('li ul').parent().addClass('has-sub');
            mainmenu.find('li ul').addClass('sub-menu');
            multiTg = function () {
                mainmenu.find(".has-sub").prepend('<span class="submenu-button fa fa-angle-down"></span>');
                mainmenu.find('.submenu-button').on('click', function () {
                    jQuery(this).toggleClass('submenu-opened');
                    if (jQuery(this).siblings('ul').hasClass('open')) {
                        jQuery(this).siblings('ul').slideToggle().removeClass('open');
                    } else {
                        jQuery(this).siblings('ul').slideToggle().addClass('open');
                    }
                });
            };
            if (settings.format === 'multitoggle') multiTg();
            else mainmenu.addClass('dropdown');
            if (settings.sticky === true) mainmenu.css('position', 'fixed');
            resizeFix = function () {
                if (jQuery(window).width() > 1024) {
                    mainmenu.find('ul').show();

                }
                if (jQuery(window).width() <= 1024) {
                    mainmenu.find('#menu-button').removeClass('menu-opened');
                    mainmenu.find('ul').hide().removeClass('open');
                }
            };
            resizeFix();
            return jQuery(window).on('resize', resizeFix);
        });
    };
})(jQuery);

(function ($) {
    jQuery(document).ready(function () {
        jQuery(document).ready(function () {
            jQuery("#mainmenu").menumaker({
                title: "",
                format: "multitoggle"
            });
            var foundActive = false,
                activeElement, linePosition = 0,
                width = 0,
                menuLine = jQuery("#mainmenu #menu-line"),
                lineWidth, defaultPosition, defaultWidth;
            jQuery("#mainmenu > ul > li").each(function () {
                if (jQuery(this).hasClass('current-menu-item')) {
                    activeElement = jQuery(this);
                    foundActive = true;
                }
            });
            if (foundActive != true) {
                activeElement = jQuery("#mainmenu > ul > li").first();
            }
            if (foundActive == true) {
                activeElement = jQuery("#mainmenu > ul > li").first();
            }
            defaultWidth = lineWidth = activeElement.width();
            defaultPosition = linePosition = (activeElement.position())?activeElement.position().left:'';
            menuLine.css("width", lineWidth);
            menuLine.css("left", linePosition);
            jQuery("#mainmenu > ul > li").hover(function () {
                    activeElement = $(this);
                    lineWidth = activeElement.width();
                    linePosition = activeElement.position().left;
                    menuLine.css("width", lineWidth);
                    menuLine.css("left", linePosition);
                },
                function () {
                    menuLine.css("left", defaultPosition);
                    menuLine.css("width", defaultWidth);
                });
        });
        /** Set Position of Sub-Menu **/
        var wapoMainWindowWidth = jQuery(window).width();
        jQuery('#mainmenu ul ul li').mouseenter(function () {
            var subMenuExist = jQuery(this).find('.sub-menu').length;
            if (subMenuExist > 0) {
                var subMenuWidth = jQuery(this).find('.sub-menu').width();
                var subMenuOffset = jQuery(this).find('.sub-menu').parent().offset().left + subMenuWidth;
                if ((subMenuWidth + subMenuOffset) > wapoMainWindowWidth) {
                    jQuery(this).find('.sub-menu').removeClass('submenu-left');
                    jQuery(this).find('.sub-menu').addClass('submenu-right');
                } else {
                    jQuery(this).find('.sub-menu').removeClass('submenu-right');
                    jQuery(this).find('.sub-menu').addClass('submenu-left');
                }
            }
        });
    });
})(jQuery);

/*Mobile Nav*/
function resize() {
    if (jQuery(window).width() <= 1024) {
        jQuery('#mainmenu > ul').addClass('mobile-menu');
    } else {
        jQuery('#mainmenu > ul').removeClass('mobile-menu');
    }
}
jQuery(document).ready(function () {
    jQuery(window).resize(resize);
    resize();  
});
