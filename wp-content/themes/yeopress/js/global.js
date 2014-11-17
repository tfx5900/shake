var windowsH = 0;
var resetPos = false;
function setPageSize() {
    windowsH = $(window).height();
    if (windowsH < 600) {
        windowsH = 600;
    }
    var windowsW = $(window).width();
    $('.homepage, .homepage .wrapper').css('height', windowsH - 80);
    $('.expertis-page').css('min-height', windowsH - 140);
    $('.homepage video').css('width', windowsW).css('height', 'auto');
    $('.job-full-list').css('height',$(document).height());
    resetPos = true;

}

function highlightURL() {
    var url = window.location.href;
    $('.nav-menu a').each(function () {
        if (url.indexOf($(this).attr('href')) > -1) {
            $(this).addClass('selected');
        }
    });
}

function slide() {
    var boxHeight = windowsH - 80;
    var currentTop = parseInt($('.slides').css('top').replace('px',''), 10);
    var size = $('.slides .slide').size();
    var maxLength = - boxHeight * size;
    var move = 0;
    if (currentTop - boxHeight > maxLength) {
        move = currentTop - boxHeight;
    }
    if (resetPos) {
        move = 0;
        resetPos = false;
    }
    $('.slides').animate({top: move}, 1000);
}

$(function () {
    if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android|webOS|BlackBerry|IEMobile)/)) {
        $('.slide.video').remove();
    }

    setPageSize();
    $.event.add(window, 'resize', setPageSize);
    $.event.add(window, 'load', setPageSize);
    highlightURL();

    $(".nano").nanoScroller({ sliderMinHeight: 70, preventPageScrolling: true });

    //quick fix to hide vertial algin
    $('.people-list .detail-person, .work .text, .people-full-list, .job-full-list').hide();

    if ($('.homepage').is('div')) {
        setInterval(slide, 5000);
    }

    if ($('.award-photos').is('div')) {
        $(".award-photos").owlCarousel({
            autoPlay: true,
            autoplayTimeout: 5000,
            dots: false,
            items : 4,
            itemsDesktop : [1199,4],
            itemsDesktopSmall : [979,3],
            nav: true,
            itemsScaleUp: true,
            center: true,
            loop:true
        });
    }

    if ($('.award-page').is('div')) {
        $('.award-page .content').append($('.really_simple_share'));
    }

    $('.about-page .nav-menu').click(function (e) {
        e.preventDefault();
        if (!$(this).hasClass('selected')) {
            $('.about-page .nav-menu').removeClass('selected');
            $(this).addClass('selected');
            $('.tab:visible').hide();
            $($(this).attr('href')).fadeIn(500);
        }
    });

    $('.people-list a').click(function (e) {
        e.preventDefault();
        // $('.people-full-list').fadeIn(500);
        // $($(this).attr('href')).fadeIn(500);
    });

    $('.people-full-list .close-button, .people-full-list').click(function (e) {
        e.preventDefault();
        $('.people-full-list').fadeOut(500);
        $('.people-full-list .person').fadeOut(500);
    });

    $('.people-full-list .person').click(function (e) {
        e.stopPropagation();
    });

    // $('.expertis-list a').click(function (e) {
    //     e.preventDefault();
    //     $('.expertis-list').fadeOut(500);
    //     $($(this).attr('href')).fadeIn(500);
    // });

    // $('.expertis .big-close-button').click(function () {
    //     $('.expertis').fadeOut(500);
    //     $('.expertis-list').fadeIn(500);
    // });

    $('.job-list a').click(function (e) {
        e.preventDefault();
        $('.job-full-list').fadeIn(500);
        $($(this).attr('href')).fadeIn(500, function(){
            setPageSize();
            $(".nano").nanoScroller({ sliderMinHeight: 70, preventPageScrolling: true });
        });
    });

    $('.job-full-list .job').click(function (e) {
        e.stopPropagation();
    });

    $('.job .close-button, .job-full-list').click(function (e) {
        e.preventDefault();
        $('.job-full-list').fadeOut(500);
        $('.job-full-list .job').fadeOut(500);
        setPageSize();
    });

    $('.work-page .nav-menu-holder').click(function (e) {
        e.preventDefault();
        if (!$(this).hasClass('selected')) {
            var filter = $('.nav-menu', this).attr('slug').substr(1);
            // $('.work-page .nav-menu a.selected').removeClass("selected");
            // $(this).addClass('selected');
            $('.work').hide();
            $('.work.nav-menu').show();
            $('.work.' + filter).show();
        }
    });

    $('.works .work').hover(function () {
        $(this).find('.text').stop(0, 0).fadeIn(500);
    }, function () {
        $(this).find('.text').stop(0, 0).fadeOut(500);
    });

    $('.people-list .person').hover(function () {
        $(this).find('.detail-person').stop(0, 0).fadeIn(500);
    }, function () {
        $(this).find('.detail-person').stop(0, 0).fadeOut(500);
    });

    if ($('.page').is('div')) {
        if ($('.page').attr('data-bg')) {
            $('body').css('background','url('+$('.page').attr('data-bg')+') no-repeat fixed');
            $('body').css('background-size','cover');
        }
    }

    if ($('.contact-page').is('div')) {
        if ($('.bg span').attr('data-type')==='image') {
            $('body').css('background','url('+$('.bg span').attr('data-url')+') no-repeat fixed');
            $('body').css('background-size','cover');
        } else {

        }

    }
});
