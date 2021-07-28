//ローディングアニメーション
$(window).on('load', function () {
    $('#la').delay(2000).fadeOut('slow');
});

//ハンバーガーメニュー
$('header').on('click', function () {
    $(this).toggleClass('on');
});

//スライダー
$('.gelato_slider ul').each(function () {
    let s_width = $(this).width();
    $(this).clone(true).insertBefore(this);
    $(this).clone(true).insertAfter(this);
    $('.gelato_slider').css('width', s_width * 3);
});

//ハンバーガーメニュー色変更　＆　フェードイントリガー & to top

let height = $(window).height();

$(window).on('scroll', function () {
    let scroll = $(this).scrollTop();

    // //ハンバーガーメニュー 色変更
    // if (scroll > a01_scroll && scroll < m_scroll || scroll > si_scroll && scroll < sim_scroll) {
    //     $('.nav_btn').addClass('t_o');
    // } else {
    //     $('.nav_btn').removeClass('t_o');
    // }

    //フェードイントリガー
    $('.f_i').each(function () {
        let f_i_scroll = $(this).offset().top;
        if (scroll > f_i_scroll - height + 300) {
            $(this).addClass('on');
        }
    });

    //ハンバーガーメニュー色変更　＆ to top
    if (scroll > 500) {
        $('.nav_btn').addClass('t_o');
        $('.t_t').addClass('on');
    } else {
        $('.nav_btn').removeClass('t_o');
        $('.t_t').removeClass('on');
    }
});