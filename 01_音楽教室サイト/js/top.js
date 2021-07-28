//スマホ版ヘッダー　ハンバーガーメニュー
$('.nav_btn').on('click', function () {
    $('.nav_btn p').toggleClass('on');
    $('.top_nav_sp  nav').toggleClass('on');
    $('.top_nav_sp nav .nav_body').delay(5000).toggleClass('on');
});

//topページのロード時処理
$(window).on('load', function () {
    $('body').delay(200).fadeIn(1500).queue(function () {
        $('.key').delay(1000).addClass('on').queue(function () {
            $('.cloud').delay(1000).addClass('on');
        });
    });
});
// });