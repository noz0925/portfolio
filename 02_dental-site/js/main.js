/*==================
ローディング処理
==================*/
var bar = new ProgressBar.Circle(loading_text, {
  strokeWidth: 4,
  easing: 'easeInOut',
  duration: 1400,
  color: '#fff',
  trailWidth: 0,
  svgStyle: null,
  text: {
    style: {
      position:'absolute',
      left:'50%',
      top:'50%',
      padding:'0',
      margin:'0',
      transform:'translate(-50%,-50%)',
      'font-size':'1.2rem',
      color:'#fff',
    },
    autoStyleContainer: false
  },
  step: function(state, bar) {
    bar.setText(Math.round(bar.value() * 100) + ' %');
  }
});
bar.animate(1.0, function () {
  $("#loading").delay(500).fadeOut(800);
});

/*==================
TOPページKVスライダー
==================*/
if($('#p-top-kv__swiper .swiper-wrapper').length == 1){
  let kvswiper = new Swiper('.swiper',{
    direction: 'vertical',
    loop: true,
    effect: 'fade',
    autoheight: true,
    autoplay:{
        delay:5000,
        disableOnInteraction: false,
    },
    speed: 2000,
  });
};

/*==================
ハンバーガーボタン
==================*/
$('.js-header__btn').on('click',function(){
  $(this).toggleClass('is-active');
  $('.p-header__nav').toggleClass('is-active');
});
$('.p-header__subnav-link').on('click', function(){
  $('.p-header__btn').removeClass('is-active');
  $('.p-header__nav').removeClass('is-active');
});
//1秒後に予約ボタンが右からフェードイン
$(window).on('load resize',function(){
  $('.p-reserve-btn').delay(1000).queue(function(){
    $(this).addClass('is-active');
  });
});

let kv_target = $('#header-origin').offset().top;
let kv_height = $('#header-origin').height();
let footer_target = $('#footer').offset().top;
let footer_height = $('#footer').height();
$(window).on('scroll',function(){
  //PC時KV下を過ぎたらクローンヘッダーが出現
  let scroll = $(this).scrollTop();
  if( scroll > (kv_target + kv_height) ){
    $('#header-clone').addClass('is-active');
  }else{
    $('#header-clone').removeClass('is-active');
  }  
  //footerトップがインしたら予約ボタンがフェードアウト
  if( scroll > (footer_target - footer_height) ){
    $('#p-reserve-btn').removeClass('is-active');
  }else{
    $('#p-reserve-btn').addClass('is-active');
  }
});
//SP時ハンバーガー内アコーディオン処理
$(function(){
  $('.p-header__subnav-btn').on('click', function(){
    $(this).toggleClass('is-accordion');
    $('.p-header__subnav-list').slideToggle();
  });
  $(window).on('resize',function(){
    if($('.p-header__subnav-btn').css('pointer-events') == 'none'){
      $('.p-header__subnav-list').attr('style','');
    }
  });
});

/*==================
ヘッダー分アンカーリンクの位置を調整
==================*/
let header_height = 70;
//ページ外リンク
let url_hash = location.hash;
if(url_hash !== '') {
  $('body,html').stop().scrollTop(0);
    setTimeout(function(){
    let target = $(url_hash);
    let position = target.offset().top - header_height;
    $('body,html').stop().animate({scrollTop:position}, 10);
    }, 10);
}
//ページ内リンク
//#が含まれるhrefをクリックしたら
$('a[href*="#"]').on('click', function(){
  let location_href = location.href;
  let href= $(this).attr("href");
  let href_arr = href.split('/');
  let href_last = href_arr.splice(-1)[0];
  if(location_href.indexOf('treatment') !== -1){    //
    let target = (href.indexOf('http') !== -1) ? href_last : href;
    let position = $(target).offset().top - header_height;
    $('body,html').stop().animate({scrollTop:position}, 10);
    return false;
  };
});

/*==================
スタッフ募集　タブアクション
==================*/
function get_hash_id (hash_id_name){
  if(hash_id_name){
    $('.p-recruit__info-tab-item').find('a').each(function() {
      let id_name = $(this).attr('href');
      if(id_name == hash_id_name){
        let parent_elm = $(this).parent();
        $('.p-recruit__info-tab-item').removeClass("is-active");
        $(parent_elm).addClass("is-active");
        $(".p-recruit__info-main-item").removeClass("is-active");
        $(hash_id_name).addClass("is-active");
      }
    });
  }
}

$('.p-recruit__info-tab-item-link').on('click', function() {
  let id_name = $(this).attr('href');
  get_hash_id (id_name);
  return false;
});

$(window).on('load', function () {
  $('.p-recruit__info-tab-item:first-child').addClass("is-active");
  $('.p-recruit__info-main-item:first-child').addClass("is-active");
  let hash_name = location.hash;
  get_hash_id (hash_name);
});