$(document).ready(function () {

    $(".slider").HSlider({
        easing: "ease",
        animationTime: 400,
        pagination: false,
        description: true
    });

    $(document).bind('mousewheel DOMMouseScroll', function(event) {
        event.preventDefault();
        setTimeout(function() {
            $('#menu a').removeClass('active');
            $('#menu').find('a[href="#'+$('.section.active').attr('data-index')+'"]').addClass('active');
        }, 401);
    });


    $('#menu a').click(function (e) {
        $('#menu a').removeClass('active');
        $(this).addClass('active');
    });

    $('.marketing__content_wrap .button').click(function (e) {
        $('.marketing__content_wrap .button').removeClass('active1');
        $(this).addClass('active1');
    });


    $('.tabs a').click(function (e) {
        $('.tabs a').removeClass('active');
        $(this).addClass('active');
    });

    $(".wrapper-hover .modal-button").click(function () {
        $(".wrapper-modal .form").slideToggle(function () {
            return false;
        });
    });

    $('.tab_content').hide();
    $('.tab_content:first').show();
    $('.tabs li:first').addClass('active');
    $('.tabs li').click(function (event) {
        $('.tabs li').removeClass('active');
        $(this).addClass('active');
        $('.tab_content').hide();
        var selectTab = $(this).find('a').attr("href");
        $(selectTab).fadeIn();
        return false;
    });


    $('.tab_content1').hide();
    $('.tab_content1:first').show();
    $('.tabs1 li:first').addClass('active');
    $('.tabs1 li').click(function (event) {
        $('.tabs1 li').addClass('active');
        $('.tab_content1').hide();
        var selectTab = $(this).find('a').attr("href");
        $(selectTab).fadeIn();
        return false;
    });


    $('.tab_content2').hide();
    $('.tab_content2:first').show();
    $('.tabs2 li:first').addClass('active');
    $('.tabs2 li').click(function (event) {
        $('.tabs2 li').addClass('active');
        $('.tab_content2').hide();
        var selectTab = $(this).find('a').attr("href");
        $(selectTab).fadeIn();
        return false;
    });


    $('.tab_content3').hide();
    $('.tab_content3:first').show();
    $('.tabs3 li:first').addClass('active');
    $('.tabs3 li').click(function (event) {
        $('.tabs3 li').addClass('active');
        $('.tab_content3').hide();
        var selectTab = $(this).find('a').attr("href");
        $(selectTab).fadeIn();
        return false;
    });

    //
    // $('.tab_content4').hide();
    // $('.tab_content4:first').show();
    // $('.tabs4 li:first').addClass('active');
    // $('.tabs4 li').click(function (event) {
    //     $('.tabs4 li').addClass('active');
    //     $('.tab_content4').hide();
    //     var selectTab = $(this).find('a').attr("href");
    //     $(selectTab).fadeIn();
    //     return false;
    // });


    var overlay = $('#overlay');
    var open_modal = $('.open_modal');
    var close = $('.modal_close, #overlay');
    var modal = $('.modal_div');

    open_modal.click(function (event) {
        event.preventDefault();
        var div = $(this).attr('href');
        overlay.fadeIn(400,
            function () {
            $(".head").hide();
                $(div).css('display', 'block').animate({opacity: 1}, 200);
            });
    });

    close.click(function () {
        modal.animate({opacity: 0}, 200,
                function () {
                    $(this).css('display', 'none');
                    overlay.fadeOut(400);
                }
            );
        $(".head").show();
    });



   // EVENTS & PR tabs

    $('.tab_content4').each(function (i) {
        if (i != 0) {
            $(this).hide()
        }
    });
    $(document).on('click', '.tabs4 li a', function (e) {
        e.preventDefault();
        var tabId = $(this).attr('href');
        $('.tabs4 li a').removeClass('active');
        $(this).addClass('active');
        $('.tab_content4').hide(0);
        $(tabId).fadeIn();
    });

});
var layer, w, h;

function init() {
    w = (window.innerWidth  || document.documentElement.clientWidth)  * 0.5;
    h = (window.innerHeight || document.documentElement.clientHeight) * 0.5;
    layer = document.getElementById('melody-note');
    parallaxMove();
}

function parallaxMove() {
    var centerX = w - layer.offsetWidth  * 0.5;
    var centerY = h - layer.offsetHeight * 0.5;

    var x0 = layer.offsetLeft;
    var y0 = layer.offsetTop;

    function getX(e) {
        return x0 + (e.pageX - centerX) * 0.2;
    }

    function getY(e) {
        return y0 + (e.pageY - centerY) * 0.2;
    }

    document.onmousemove = function(e) {

        var x = getX(e);
        var y = getY(e);

        layer.style.left = x + "px";
         layer.style.top  = y + "px";

    }
}
window.onload = function() {
    init();
};
