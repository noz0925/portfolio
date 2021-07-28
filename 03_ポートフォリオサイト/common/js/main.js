//ヘッダー ハンバーガーメニュー ----------------------
$('.l-header__btn').on('click', () => {
    $('.js-btn-trigger').toggleClass('active');
});
$('.l-header__nav--item a').on('click', () => {
    $('.js-btn-trigger').removeClass('active');
});

//ロード時フェードイン ------------------------------
$(window).on('load', () => {
    $('.js-header-fade-in').addClass('fade-in').delay(1000).queue(() => {
        $('.js-main-fade-in').addClass('fade-in');
    });
});

//スクロール アクション -----------------------------
let prev = 0;

$(window).on('scroll', () => {
    let scroll = $(window).scrollTop();
    let windowHeight = $(window).innerHeight();
    let visualHeight = $('.p-key-visual').height();
    if ($('body').hasClass('home')) {
        var workScroll = $('#t-works').offset().top;
    }

    //to top
    //キービジュアルより下の時ヘッダーが隠れる
    //ただし.js-btn-triggerがactiveの時は動作しない
    if (!$('.js-btn-trigger').hasClass('active')) {
        if (scroll > visualHeight || scroll > 1000) {
            $('.js-to-top').addClass('active');
            $('.js-header-hide').addClass('hide');
        } else {
            $('.js-to-top').removeClass('active');
        }
    }

    //上にスクロールするとヘッダーが出現する
    if (0 > scroll - prev) {
        $('.js-header-hide').removeClass('hide');
    }
    prev = scroll;

    //フェードイン
    $('.js-fade-in').each((i, el) => {
        let fadeIn = $(el).offset().top;
        if (scroll > fadeIn - windowHeight + 300) {
            $(el).addClass('active');
        }
    });

    //workのフェードイン
    if (scroll > workScroll - windowHeight + 300) {
        $('.js-work-fade-in').each((i, el) => {
            $(el).delay(300 * i).animate({
                opacity: 1,
                top: '0'
            }, 500);
        });
    }
});