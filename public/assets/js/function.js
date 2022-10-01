$(document).ready(function() {
    $('#sidebarCollapse').on('click', function() {
        $('#sidebar').toggleClass('active');
        $('#content').toggleClass('active');
    });
});
// 
$(document).ready(function() {
    /*------------------back to top------------------*/
    $(document).on('click', '.back-to-top', function() {
        $("html,body").animate({
            scrollTop: 0
        }, 200);
    });
});

// scroll
$(window).on("scroll", function() {
    var mainMenuTop = $(".header");
    if ($(window).scrollTop() >= 1) {
        mainMenuTop.addClass('navbar-area-fixed');
    } else {
        mainMenuTop.removeClass('navbar-area-fixed');
    }
    // 
    var ScrollTop = $('.back-to-top');
    if ($(window).scrollTop() > 1000) {
        ScrollTop.fadeIn(1000);
    } else {
        ScrollTop.fadeOut(1000);
    }
});

// load
$(window).on('load', function() {

    /*-----------------
        back to top
    ------------------*/
    var backtoTop = $('.back-to-top')
    backtoTop.fadeOut();

});

// 
$('.client-slidee').owlCarousel({
    loop: false,
    margin: 10,
    dots: false,
    responsiveClass: true,
    autoplay: true,
    stopOnHover: false,
    autoplayTimeout: 3000,
    nav: true,
    // navText: ["<div class='nav-button owl-prev'><img class='img-fluid' src='./images/right-long-solid.png' alt='icon'/></div>", "<div class='nav-button owl-next'><img class='img-fluid' src='./images/left-long-solid.png' alt='icon'/></div>"],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        },
        1200: {
            items: 1,
        },
        1400: {
            items: 1,
        },

    }
});