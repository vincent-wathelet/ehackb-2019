$(function() {
    // fade in navbar after scrolling
    $("header").hide();
    $(function () {
        $(window).scroll(function () {

            if ($(this).scrollTop() > 500) {
                $('header').fadeIn(500);
            } else {
                $('header').fadeOut(500);
            }
        });
    });

    menuActiveState();
    closeMenuOnClick();
});

function menuActiveState() {
    $(window).scroll(function () {
        var scrollDistance = $(window).scrollTop() + 100;
        $('section').each(function (i) {
            if ($(this).position().top <= scrollDistance) {
                if (i == 1) {
                    $('header li a.active').removeClass('active');
                }
                $('header li a.active').removeClass('active');
                $('header li a').eq(i).addClass('active');
            }
        });
    }).scroll();
}

function closeMenuOnClick() {
    $('.navbar-nav>li>a').on('click', function () {
        $('.navbar-collapse').collapse('hide');
    });
}

