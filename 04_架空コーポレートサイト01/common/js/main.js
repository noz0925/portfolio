//ハンバーガーメニュートリガー　----------------
$('.l-header__button').on('click', () => {
    $('.js-btn-trigger').toggleClass('active');
});

//p-key-visualを過ぎたら背景色がつく
const visual_area = $('.p-key-visual').height();
const bottom_visual_area = $('.p-bottom-visual').height();
const header_area = $('.l-header').height();
$(window).on('scroll', () => {
    let scroll = $(window).scrollTop();
    if (scroll > visual_area - header_area || scroll > bottom_visual_area - header_area) {
        $('.js-header-trigger').addClass('active');
    } else {
        $('.js-header-trigger').removeClass('active');
    }
});

//スライダー　-----------------------------
//スライド定義
let slideNumber = 1;
let allSlide = [1, 2, 3];

setInterval(slider, 5000);

//スライダー処理
function slider() {

    slideNumber++;

    if (slideNumber > 3) {
        slideNumber = 1;
    };

    //対象のスライドを表示する
    $('.p-key-visual__slide-item--' + slideNumber).animate({ opacity: 1 }, 1000);

    //他のスライドは非表示
    for (let i = 1; i <= allSlide.length; i++) {
        if (i !== slideNumber) {
            $('.p-key-visual__slide-item--' + i).animate({ opacity: 0 }, 1000);
        };
    };

};