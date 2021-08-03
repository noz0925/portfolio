//ヘッダークリックアクション
$('.js-header-btn').on('click', () => {
    $('.js-header-btn').toggleClass('active');
});

//キービジュアルを過ぎたらヘッダーが現れる
let windowHeight = $(window).height();
const topTitle = $('.p-top-title').offset().top;
console.log(topTitle);
$('window').on('scroll', () => {

});