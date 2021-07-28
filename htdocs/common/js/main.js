
const imgHeight = $('.c-visual__bg--img').height();
const visualHeight = $('.c-visual').height();

//l-header ハンバーガーメニュー --------------------------
//クリックしたらactiveがついたり消えたりする
$('.js-btn-trigger').on('click', () => {
    $('.js-btn-trigger').toggleClass('active');

    //クリックした時にキービジュアルより下だった場合はcolorもついたり消えたりする
    if ($(window).scrollTop() > visualHeight - 50) {
        $('.js-btn-trigger').toggleClass('color');
    }
});

//top-visualのスクロール値を越えたらヘッダーに色がつく
$(window).on('scroll', () => {
    let scroll = $(window).scrollTop();

    if (scroll > imgHeight - 50) {
        $('.js-bg-trigger-1').addClass('b-active');
    } else {
        $('.js-bg-trigger-1').removeClass('b-active');
    }

    if (scroll > visualHeight - 50) {
        $('.js-bg-trigger-2').addClass('b-active');
    } else {
        $('.js-bg-trigger-2').removeClass('b-active');
    }
});

