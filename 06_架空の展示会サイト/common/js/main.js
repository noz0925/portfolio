//画面幅768px未満の場合、キービジュアルを背景画像としてランダムで1枚表示
$(window).on('load', () => {
    if (window.matchMedia('(max-width: 768px)').matches) {
        $('.p-key-visual__list img').remove();
        let imgList = new Array(
            'common/img/mainvisual1.jpg',
            'common/img/mainvisual2.jpg',
            'common/img/mainvisual3.jpg'
        );
        let random = Math.floor(Math.random() * imgList.length);
        let randomImg = imgList[random];
        console.log(randomImg);
        $('.p-key-visual__list').css({
            'background-image': 'url(' + randomImg + ')',
        });
    }
});

//ヘッダークリックアクション
$('.js-header-btn').on('click', () => {
    $('.js-header-btn').toggleClass('active');
});

//スクロールアクション
$(window).on('scroll', () => {
    let scroll = $(window).scrollTop();
    let windowHeight = $(window).height();
    let topTitle = $('.p-top-title').offset().top;
    let infoHeight = $('.p-top-info').offset().top;
    let accessHeight = $('.p-top-access__title').offset().top;
    let contactHeight = $('.p-top-contact').offset().top;

    //キービジュアルがスクロールに応じて拡大する
    if (window.matchMedia('(min-width: 769px)').matches) {
        $('.p-key-visual__list img').css({
            'width': 100 / 3 + scroll / 10 + '%'
        });
        //画面幅768px未満の場合、上記で表示された背景画像を拡大する
    } else if (window.matchMedia('(max-width: 768px)').matches) {
        $('.p-key-visual__list').css({
            'transform': 'scale(' + (100 + scroll / 10) / 100 + ')',
            'top': -(scroll / 50) + '%',
        });
    }

    //タイトル位置にきたらヘッダーが表示される
    if (scroll > topTitle) {
        $('.js-header-show').addClass('active');
    } else {
        $('.js-header-show').removeClass('active');
    }

    //インフォメーション位置にきたらコンタクト右メニューが表示される
    //コンタクト位置にきたら隠れる
    if (scroll > infoHeight && scroll < contactHeight - windowHeight) {
        $('.js-header-contact-show').addClass('active');
    } else {
        $('.js-header-contact-show').removeClass('active');
    }

    //タイトル表示トリガー
    $('.js-contents-fade-in').each((i, el) => {
        let titleFadeIn = $(el).offset().top;
        if (scroll > titleFadeIn - windowHeight + 200) {
            $(el).addClass('active');
        }
    });

    //ギャラリー画像フェードイントリガー
    $('.js-gallery-fade-in').each((i, el) => {
        let galleryFadeIn = $(el).offset().top;
        if (scroll > galleryFadeIn - windowHeight + 200) {
            $(el).addClass('active');
        }
    });

    //アクセス背景表示トリガー
    if (scroll > accessHeight - windowHeight && scroll < contactHeight - windowHeight) {
        $('.p-top-access__bg').fadeIn(500);
    } else {
        $('.p-top-access__bg').fadeOut(500);
    }
});