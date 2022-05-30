$(window).on("scroll load resize", function(){

    const header_height = 100
    const scroll = $(window).scrollTop();

    if (scroll > header_height) {
        $('.header').addClass('scroll_on');
    } else {
        $('.header').removeClass('scroll_on');
    }
});

let id = false;

$(window).on("scroll touchmove",function(){
    $('.header').css('top','-100px');

    if(id) clearTimeout(id);

    id = setTimeout(function(){
        $('.header').css('top','0');
    },400);
});