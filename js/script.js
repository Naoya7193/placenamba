$(window).on("scroll load resize", function(){

    const header_height = 100
    const scroll = $(window).scrollTop();

    if (scroll > header_height) {
        $('.header').addClass('scroll_on');
    } else {
        $('.header').removeClass('scroll_on');
    }
});