$(document).ready(function () {

    $(".slider").HSlider({
        easing: "ease",
        animationTime: 400,
        pagination: false,
        description: true
    });

    $(document).bind('mousewheel DOMMouseScroll', function (event) {
        event.preventDefault();
        setTimeout(function () {
            $('#menu a').removeClass('active');
            $('#menu').find('a[href="#' + $('.section.active').attr('data-index') + '"]').addClass('active');
        }, 401);
    });

    $('#menu a').click(function (e) {
        $('#menu a').removeClass('active');
        $(this).addClass('active');
    });    

    $(".wrapper-hover .modal-button").click(function () {
        $(".wrapper-modal .form").slideToggle(function () {
            return false;
        });
    });

    /*marketing tabs*/
    $('.marketing__tab-content').each(function (i) {
        if (i != 0) {
            $(this).hide()
        }
        $(this).find('.tab_content4').each(function (i) {
            if (i != 0) {
                $(this).hide();                
            }
        });
        $(this).find('.marketing__content--tabs a').each(function (i) {
            if (i == 0) {
                $(this).addClass('active active1');
            }
        });       
        
    });
    $(document).on('click', '.marketing__tabs a', function (e) {
        e.preventDefault();
        var tabId = $(this).attr('href');
        $('.marketing__tabs a').removeClass('active');
        $(this).addClass('active');
        $('.marketing__tab-content').hide();
        $(tabId).fadeIn();
    });
    /*close marketing tabs*/

    $(document).on('click', '.marketing__content--tabs a', function (e) {
        e.preventDefault();
        var wrapper = $(this).closest('.marketing__content_wrap'),
            tabId = $(this).attr('href');
        wrapper.find('.marketing__content--tabs a').removeClass('active active1');
        $(this).addClass('active active1');
        wrapper.find('.tab_content4').hide();
        $(tabId).fadeIn();
    });

    /*open header modal*/
    $(document).on('click', '#modal-header-callback, #contacts-callback', function (event) {
        event.preventDefault();
        $('#modal5').css('display', 'block').animate({opacity: 1}, 200);
    });
    $(document).on('click', '.modal_close', function () {
        $('#modal5').animate({opacity: 0}, 200).css('display', 'none');
    });
    /*close header modal*/

    /*open packages modal*/
    $(document).on('click', '.open_modal', function (event) {
        event.preventDefault();
        var trigger = $(this).attr('href');     
        $(trigger).css('display', 'block').animate({opacity: 1}, 200);
        $('.head').hide();
        $('.marketing__nav').hide();
    });
    $(document).on('click', '.modal_close', function () {
        $(this).closest('.modal_div').animate({opacity: 0}, 200).css('display', 'none');
        $('.head').show();
        $('.marketing__nav').show();
    });
    /*close packages modal*/
});
var layer, w, h;

function init() {
    w = (window.innerWidth || document.documentElement.clientWidth) * 0.5;
    h = (window.innerHeight || document.documentElement.clientHeight) * 0.5;
    layer = document.getElementById('melody-note');
    parallaxMove();
}

function parallaxMove() {
    var centerX = w - layer.offsetWidth * 0.5;
    var centerY = h - layer.offsetHeight * 0.5;

    var x0 = layer.offsetLeft;
    var y0 = layer.offsetTop;

    function getX(e) {
        return x0 + (e.pageX - centerX) * 0.2;
    }

    function getY(e) {
        return y0 + (e.pageY - centerY) * 0.2;
    }

    document.onmousemove = function (e) {

        var x = getX(e);
        var y = getY(e);

        layer.style.left = x + "px";
        layer.style.top = y + "px";

    }
}
window.onload = function () {
    init();
};
