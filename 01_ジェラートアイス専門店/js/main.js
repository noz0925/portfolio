/*-----------------------
ハンバーガーボタン
-----------------------*/
$('.js-header-btn').click(function(){
  $('.p-header').toggleClass('active');
  $('body').toggleClass('active');
});

/*-----------------------
SP時　ヘッダーロゴテキスト　スクロール位置によって色変更
-----------------------*/
if($('body').hasClass('home')){
  var wave_scroll = $('.p-top-wave').offset().top;
}else{
  var wave_scroll = $('.p-page-wave').offset().top;
}
$(window).scroll(function(){
  var scroll = $(window).scrollTop();
  if(scroll > wave_scroll){
    $('.p-header-sp .p-header-logo-link').addClass('is-black');
  }else{
    $('.p-header-sp .p-header-logo-link').removeClass('is-black');
  }
});

/*-----------------------
波アニメーション
-----------------------*/
//トップ
$('#top_wave').wavify({
  height: 60,
  bones: 3,
  amplitude: 25,
  color: '#cdf0ea',
  speed: .2
});
//下層
$('#page_wave').wavify({
  height: 40,
  bones: 3,
  amplitude: 25,
  color: '#cdf0ea',
  speed: .2
});

/*-----------------------
トップ　KV　スライド
-----------------------*/
let swiper_kv = new Swiper('.p-top-kv-slide', {
  loop: true,
  effect: 'fade',
  allowTouchMove: false,
  speed: 2000,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
});

/*-----------------------
トップ　フレーバー　スライド
-----------------------*/
let swiper_flavor = new Swiper('.p-top-flavor-list', {
  loop: true,
  slidesPerView: 3,
  speed: 6000,
  autoplay: {
    delay: 0,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints:{
    768:{
      slidesPerView: 5
    }
  }
});

/*-----------------------
トップ　ブログ　スライド
-----------------------*/
//画面幅767px以下からswiper
let swiper_blog;
$(window).on('load resize', function(){
  let width = $(window).width();
  if(width <= 767){
    if(swiper_blog){
      return;
    }else{
      swiper_blog = new Swiper('.p-top-blog-content', {
        loop: true,
        slidesPerView: 1.2,
        spaceBetween: 10,
        centeredSlides: true,
        speed: 1000,
        autoplay: {
          delay: 3000,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
      });
    }
  }else{
    if(swiper_blog){
      swiper_blog.destroy();
      swiper_blog = undefined;
    }
  }
});

/*-----------------------
当店について　概要　円形文字アニメーション
-----------------------*/
//テキスト分割
const before_about = $('.p-about-overview-circle-text');
const text_about = before_about.text();
const textArray_about = text_about.split('');

let after_about = '';
$.each(textArray_about,function(index,val){
  after_about += "<span class='text'>" + val + "</span>";
});  

before_about.html(after_about);

const textcnt = textArray_about.length;
const circleR = ($('.p-about-overview-circle').height()) / 2;
const fontH = ($('.p-about-overview-circle-inner').height());
const dist = circleR - fontH;

$('span.text').each(function(index) {
  const num = index + 1;
  const radX = Math.sin(360 / textcnt * num * (Math.PI / 180));
  const radY = Math.sin((90 - (360 / textcnt * num)) * (Math.PI / 180));
  $(this).css('transform', 'translate(' + dist * radX + 'px, ' + -(dist * radY) + 'px) rotate(' + 360 / textcnt * num + 'deg)');
});

/*-----------------------
当店について　概要　スライド
-----------------------*/
let swiper_about = new Swiper('.p-about-overview-figure-inner', {
  loop: true,
  effect: 'fade',
  allowTouchMove: false,
  speed: 2000,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});

/*-----------------------
フレーバー　一覧　カテゴリータブアクション
-----------------------*/
$(window).on('load', function(){
  $('.js-flavor-list').hide();
  $('.js-flavor-list:first').show();
  $('.js-cat-tab li:first-child');

  $('.js-cat-tab li').on('click', function(){
    const content_id = $(this).find('a').attr('href');
    $('.js-flavor-list').hide();
    $(content_id).show();
    return false;
  });
});

/*-----------------------
スクロールアニメーション
-----------------------*/
//consoleのスクロールエラーを非表示
gsap.config({
  nullTargetWarn: false,
});

//ローディングアニメーション
//テキスト分割
const before_loading = $('.js-loader .p-loader-inner');
const text_loading = before_loading.text();
const textArray_loading = text_loading.split('');

let after_loading = '';
$.each(textArray_loading,function(index,val){
  after_loading += "<span class='text'>" + val + "</span>";
});  

before_loading.html(after_loading);

const loadingAmime = gsap.timeline();
loadingAmime.to('.js-loader .text', {
  y: 10,
  autoAlpha: 0,
  stagger: .1,
});
loadingAmime.to('.js-loader .p-loader-inner', {
  scale: 0,
  ease: 'power4.out',
  duration: 1,
});
loadingAmime.to('.js-loader', {
  autoAlpha: 0,
  duration: 2,
});

//下からフェードイン
const bottomAnime = gsap.utils.toArray(".js-bottom-fade-in").forEach(function(target){
  gsap.fromTo(target, {
    y: 50,
    autoAlpha: 0,
  },
  {
    y: 0,
    autoAlpha: 1,
    duration: 1,
    scrollTrigger:{
      trigger: target,
      start: 'top bottom',
    }
  }
  );
});

//左からフェードイン
const leftAnime = gsap.utils.toArray(".js-left-fade-in").forEach(function(target){
  gsap.fromTo(target, {
    xPercent: -100,
  },
  {
    xPercent: 0,
    duration: 1.5,
    scrollTrigger:{
      trigger:target,
      start: 'top bottom',
    }
  }
  );
});

//右からフェードイン
const rightAnime = gsap.utils.toArray(".js-right-fade-in").forEach(function(target){
  gsap.fromTo(target, {
    xPercent: 100,
  },
  {
    xPercent: 0,
    duration: 1.5,
    scrollTrigger:{
      trigger:target,
      start: 'top bottom',
    }
  }
  );
});








