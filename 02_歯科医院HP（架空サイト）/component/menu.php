<div class="p-header__btn js-header__btn">
  <span class="p-header__btn-border"></span>
  <span class="p-header__btn-border"></span>
  <span class="p-header__btn-border"></span>
  <span class="p-header__btn-text">メニュー</span>
</div>
<div class="p-header__nav">
  <ul class="p-header__nav-list">
    <li class="p-header__nav-item"><a href="<?= esc_url(home_url('/')); ?>" class="p-header__nav-link">TOP</a></li>
    <li class="p-header__nav-item"><a href="<?= esc_url(home_url('/about/')); ?>" class="p-header__nav-link">当院について</a></li>
    <li class="p-header__nav-item is-parent"><a href="<?= esc_url(home_url('/treatment/')); ?>" class="p-header__nav-link">治療のご案内</a>
      <ul class="p-header__subnav-list">
        <li class="p-header__subnav-item"><a href="<?= esc_url(home_url('/treatment/#sec_1')); ?>" class="p-header__subnav-link">一般歯科</a></li>
        <li class="p-header__subnav-item"><a href="<?= esc_url(home_url('/treatment/#sec_2')); ?>" class="p-header__subnav-link">予防歯科</a></li>
        <li class="p-header__subnav-item"><a href="<?= esc_url(home_url('/treatment/#sec_3')); ?>" class="p-header__subnav-link">矯正歯科</a></li>
      </ul>
    </li>
    <li class="p-header__nav-item"><a href="<?= esc_url(home_url('/news/')); ?>" class="p-header__nav-link">お知らせ</a></li>
    <li class="p-header__nav-item"><a href="<?= esc_url(home_url('/recruit/')); ?>" class="p-header__nav-link">スタッフ募集</a></li>
    <li class="p-header__nav-item is-reserve"><a href="#" class="p-header__nav-link">WEB予約</a></li>
  </ul>
  <p class="c-btn p-header__reserve-btn">
    <a href="#" class="c-btn__link p-header__reserve-link">
      <span class="c-btn__text p-header__reserve-text">WEB予約</span>
    </a>
  </p>
</div>