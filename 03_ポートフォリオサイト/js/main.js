//ハンバーガーメニュー
$('.js-header-btn').on('click', function(){
  $('.p-header-nav, .p-header-btn, body').toggleClass('is-active');
});
$('.p-header-nav-item-link').on('click', function(){
  $('.p-header-nav, .p-header-btn, body').removeClass('is-active');
});

//アンカーリンク先移動の際、ハンバーガーメニューの高さ分調整する
  var headerHeight = (window.matchMedia('(max-width:767px)').matches) ? 50 : 100;
  $('[href^="#"]').click(function(){
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top-headerHeight; 
    $("html, body").animate({scrollTop:position}, 10, "swing");
    return false;
  });

//ローディングアニメーション
$(window).on('load', function(){
  $('.js-load').addClass('is-loaded');
});

//スクロールアニメーション
$(window).on('scroll', function(){
  $('.js-anime-trigger').each(function(){
    var pos = $(this).offset().top;
    var scroll = $(window).scrollTop();
    var height = $(window).height();
    if(scroll > pos - height + height/5){
      var heading_anime = $(this).children('.js-heading-anime');
      var contents_anime = $(this).children('.js-contents-anime');
      heading_anime.addClass('is-active').delay(1000).queue(function(){
        contents_anime.addClass('is-active').dequeue();
      });
    }
  });
});

//アコーディオン
$('.js-accordion-title').on('click tap',function(){
  $(this).parent().toggleClass('is-active');
  $(this).next().slideToggle();
});

//work箇所スライダー
const work_swiper = new Swiper('.js-work-swiper', {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 20,
  centeredSlides: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints:{
    768: {
      slidesPerView: 1.2,
      spaceBetween: 40,
    }
  }
});