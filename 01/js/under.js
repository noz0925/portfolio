//下層ページ　スマホ版ハンバーガーメニュー処理
$('.nav_btn').on('click', function () {
    $('.nav_btn p').toggleClass('on');
    $('header nav').toggleClass('on');
    $('header nav .nav_body').delay(5000).toggleClass('on');
});

//下層ページ　コンテンツフェードイン処理
$(window).on('scroll', function () {
    let t_scroll = $(window).scrollTop();
    let w_height = $(window).height();
    $('.f_i').each(function () {
        let t_position = $(this).offset().top;
        if (t_scroll > t_position - w_height + 150) {
            $(this).addClass('on');
        }
    });
});