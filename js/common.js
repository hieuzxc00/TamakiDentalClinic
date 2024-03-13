// WINDOW LOAD
$(window).bind('load', function() {
    "use strict";
    // ANCHOR LINK
    function anchorLink(el) {
        var p = $(el).offset();
        var offset_PC = 110;
        var offset_SP = 60;
        if ($(window).width() > 750) {
            $('html,body').animate({ scrollTop: p.top - offset_PC }, 400);
        } else {
            $('html,body').animate({ scrollTop: p.top - offset_SP }, 400);
        }
    }

    // ANCHOR FROM OTHER PAGE
    var hash = location.hash;
    if (hash && $(hash).length > 0) {
        anchorLink(hash);
    }

    // ANCHOR IN PAGE
    $('a[href^="#"]').click(function() {
        var get_ID = $(this).attr('href');
        if ($(get_ID).length) {
            anchorLink(get_ID);
            // CLOSE SP NAV
            if ($('body').hasClass('open-nav')) {
                $('#menu-toggle').trigger('click');
            }
            return false;
        }
    });
    // =========== END - ANCHOR LINK ============


    // SCROLL TO MAIL FORM
    if ($('#fmail-section').length) {
        var params = location.search;
        if (params.search('mode') >= 0) {
            var form_position = $('#fmail-section').offset().top;
            form_position = parseInt(form_position);
            if ($(window).width() > 750) {
                $('html,body').animate({ scrollTop: form_position - 0 }, 400);
            } else {
                $('html,body').animate({ scrollTop: form_position - 0 }, 400);
            }
        }
    }
    // =========== END - SCROLL TO MAIL FORM ============


    // LAZY LOAD RESOURCE
    $('[data-href]').each(function() {
        var _this = $(this);
        var href = $(this).data('href');
        setTimeout(function() {
            _this.attr('href', href);
        }, 3000);
    });
    $('[data-src]').each(function() {
        var _this = $(this);
        var src = $(this).data('src');
        setTimeout(function() {
            _this.attr('src', src);
        }, 3000);
    });
    // =========== END - LAZY LOAD RESOURCE ============
});



// WINDOW LOAD/SCROLL
$(window).bind('load scroll', function() {
    // TO-TOP
    // if ($(this).scrollTop() >= 500) {
    //     $('.to-top').addClass('show');
    // } else {
    //     $('.to-top').removeClass('show');
    // }
    // =========== END - TO-TOP ============
});



// DOCUMENT READY
$(document).ready(function() {
    "use strict";

    // MENU TOGGLE SP
    $('#menu-toggle').click(function() {
        $(this).toggleClass('open');
        $('body').toggleClass('open-nav');
    });
    // $(document).on('mousedown touchstart', function(e) {
    //     if ($(e.target).closest("#gnavi, #menu-toggle").length === 0) {
    //         if ($('body').hasClass('open-nav')) {
    //             $('#menu-toggle').trigger('click');
    //         }
    //     }
    // });
    // =========== END - MENU TOGGLE SP ============

    // SUB NAV SP SLIDE TOGGLE
    $('.gnavi .has label').click(function() {
        var screenWidth = $(window).width();
        if (screenWidth <= 750) {
            $(this).toggleClass('open');
            $(this).next().stop().slideToggle(200);
        }
    });
    // =========== END - SUB NAV SP SLIDE TOGGLE ============



    // CHANGE TAB
    $('[data-tab]').click(function() {
        var group = $(this).data('tab-group');
        var index = $(this).data('tab');
        $('[data-tab][data-tab-group="' + group + '"].active').removeClass('active');
        $(this).addClass('active');

        $('[data-tab-content][data-tab-group="' + group + '"].active').removeClass('active');
        $('[data-tab-content="' + index + '"][data-tab-group="' + group + '"]').addClass('active');
    });
    // =========== END - CHANGE TAB ============



    // ACCORDION
    $(".accordion-button").click(function(e) {
        e.preventDefault();
        $(this).toggleClass("open");
        var accordion_ID = $(this).attr('id');
        var accordion_content = $('[data-accordion-for="' + accordion_ID + '"]');
        accordion_content.stop().slideToggle(200);
    });
    // =========== END - ACCORDION ============
    $(window).bind('load scroll', function() {
        var hMain = $('.idx-mainvisual').outerHeight();
        var hMain02 = $('#top_info').outerHeight();
        var hFoot = $('footer').outerHeight();
        var pTop = $(this).scrollTop();
        var bottom = $('.idx-sliderfix').outerHeight();
        var ww = $(window).width();
        if (pTop > 0) {
            $('header').addClass("fixed");

        } else {
            $('header').removeClass("fixed");
        }
        $('.to-top').addClass('show');
        if (ww <= 750) {
            if (pTop > hMain - 90) {
                $(".idx-sliderfix").fadeIn();
                $('.to-top').addClass('show');
            } else {
                $(".idx-sliderfix").fadeOut();
                $('.to-top').removeClass('show');
            }
            $("footer").css('margin-bottom', bottom);

        } else {}
    });
    var imgs = $('.idx-pro-cir, .idx-list-pro li'),
        playState = '-webkit-animation-play-state';

    setInterval(function() {
        $(imgs).css("-webkit-animation-play-state", "paused");
        setTimeout(function() {
            $(imgs).css("-webkit-animation-play-state", "running");
        }, 1000);
    }, (7000));
    // var imgs = $('.idx-pro-cir, .idx-list-pro li'),
    //     playState = '-webkit-animation-play-state';

    // imgs.click(function() {
    //     imgs.css(playState, function(i, v) {
    //         return v === 'paused' ? 'running' : 'paused';
    //     });
    //     $('body').toggleClass('paused', $(this).css(playState) === 'paused');
    // });
    $('.idx-box-toggle .btn').click(function() {
        $(".idx-box-toggle").toggleClass("active")
    });
    //UNDER READ MORE
    $('.udr-btn-more, .udr-btn-more-bottom').click(function() {
        var $parent = $(this).parent();
        var $target = $(this).hasClass('udr-btn-more') ? $parent.prev() : $parent.next();
        $target.slideToggle(400);
        $(this).toggleClass('active');
        if ($(this).hasClass('udr-btn-more')) {
            $(this).html($(this).hasClass('active') ? '<span>コンパクト</span>' : '<span>さらに見る</span>');
        }
    });
});