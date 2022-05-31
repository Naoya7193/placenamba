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
    $('.header').css('top','-200px');

    if(id) clearTimeout(id);

    id = setTimeout(function(){
        $('.header').css('top','0');
    },400);
});


// ボタンスクロールの実装

//横幅取得・設定
var item_scroll_true = $('#office_item_scroll').outerWidth(true);
var item_scroll_false = $('#office_item_scroll').outerWidth(false);
var item_scroll = $('#office_scroll').outerWidth(false);

var item_scroll_hidden = $('#office_scroll').get(0).scrollWidth;

//コマ数・送りの設定
var feed = item_scroll_true;
var frame = 1;

//カウント初期値
var count = 0;

//スクロール値取得
$('#office_scroll').scroll(function() {
    count = $(this).scrollLeft();
});

//進む
$('#front_button').click(function() {
    var count2 = count + feed;

    $('#office_scroll').animate(
        {scrollLeft:count2},
        600,
    );
});

//戻る
$('#back_button').click(function() {
    var count2 = count - feed;

    if(count == Math.round(item_scroll_hidden - item_scroll)){
        var count2 = count - ((item_scroll_true + item_scroll_true + item_scroll_false) - item_scroll);
    }

    $('#office_scroll').animate(
        {scrollLeft:count2},
        600,
    );

});