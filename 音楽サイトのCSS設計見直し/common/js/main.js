//スマホ・タブレット閲覧時に:hoverの挙動を無効にする
let touch = 'ontouchstart' in document.documentElement || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0;

if (touch) {
    try {
        for (let si in document.styleSheets) {
            let styleSheet = document.styleSheets[si];
            if (!styleSheet.rules) continue;

            for (let ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
                if (!styleSheet.rules[ri].selectorText) continue;

                if (styleSheet.rules[ri].selectorText.match(':hover')) {
                    styleSheet.deleteRule(ri);
                }
            }
        }
    } catch (ex) { }
}

//sp版　ハンバーガーメニュー
$('.js-btn-trigger').on('click', () => {
    $('.js-btn-trigger').toggleClass('active');
});