<?php
  global $logo_img_pc, $logo_img_sp, $site_title_ja, $site_title_en;
  $front_page_id = get_option('page_on_front');
  if(have_rows('footer',$front_page_id)):
  while(have_rows('footer',$front_page_id)): the_row();
  $footer_address = get_sub_field('footer_address');
  $footer_tel_num = get_sub_field('footer_tel_num');
  $footer_time = get_sub_field('footer_time');
  $footer_time_table = get_sub_field('footer_time_table');
  $footer_map = get_sub_field('footer_map');
  $footer_copy = get_sub_field('footer_copy');
?>
<footer class="l-footer" id="footer">
  <div class="p-footer">
    <div class="p-footer__info">
      <div class="p-footer__info-inner">
        <div class="p-footer__logo">
          <span class="p-footer__logo-img"><img src="<?= $logo_img_pc; ?>" alt=""></span>
          <?php if( $site_title_ja || $site_title_en ): ?>
            <p class="p-footer__logo-text">
              <span class="p-footer__logo-text-ja"><?= $site_title_ja; ?></span>
              <span class="p-footer__logo-text-en"><?= $site_title_en; ?></span>
            </p>
          <?php endif; ?>
        </div>
        <?php if( $footer_address|| $footer_tel_num || $footer_time ): ?>
          <div class="p-footer__address">
            <?php if($footer_address): ?>
              <address><?= $footer_address; ?></address>
            <?php endif; ?>
            <?php if( $footer_tel_num || $footer_time ): ?>
              <div class="p-footer__address-disc">
                <?php if($footer_tel_num): ?>
                  <span class="p-footer__info-tel-num"><a href="tel:<?= $footer_tel_num; ?>" class="p-footer__info-tel-link"><?= $footer_tel_num; ?></a></span>
                <?php endif; ?>
                <?php if($footer_time): ?>
                  <span class="p-footer__info-tel-text"><?= $footer_time; ?></span>
                <?php endif; ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endif; ?>
        <div class="p-footer__table">
          <?= $footer_time_table; ?>
          <?php
            if( have_rows('footer_reverse') ):
            while( have_rows('footer_reverse') ): the_row();
            $footer_reverse_text = get_sub_field('footer_reverse_text');
            $footer_reverse_link = get_sub_field('footer_reverse_link');
            $footer_reverse_desc = get_sub_field('footer_reverse_desc');
          ?>
            <div class="p-footer__reserve">
              <p class="c-btn p-footer__reserve-btn">
                <a href="<?= $footer_reverse_link; ?>" class="c-btn__link p-footer__reserve-btn-link">
                  <span class="c-btn__text p-footer__reserve-btn-text"><?= $footer_reverse_text; ?></span>
                </a>
              </p>
              <?php if($footer_reverse_desc): ?>
                <span class="p-footer__reserve-disc">
                  <?= $footer_reverse_desc; ?>
                </span>
              <?php endif; ?>
            </div>
          <?php
            endwhile;
            endif;
          ?>
        </div>
      </div>
    </div>
    <div class="p-footer__map">
      <?= $footer_map; ?>
    </div>
  </div>
  <div class="p-copy">
    <p class="p-copy__privacy"><a href="#"><span>▶︎</span>プライバシーポリシー</a></p>
    <p class="p-copy__text"><?= $footer_copy; ?></p>
  </div>
</footer>
<?php
  if( have_rows('footer_reverse_fixed') ):
  while( have_rows('footer_reverse_fixed') ): the_row();
  $footer_reverse_fixed_img_pc = get_sub_field('footer_reverse_fixed_img_pc');
  $footer_reverse_fixed_img_sp = get_sub_field('footer_reverse_fixed_img_sp');
  $footer_reverse_fixed_text_pc = get_sub_field('footer_reverse_fixed_text_pc');
  $footer_reverse_fixed_text_sp = get_sub_field('footer_reverse_fixed_text_sp');
?>
  <div class="p-reserve-btn" id="p-reserve-btn">
    <a href="#" class="p-reserve-btn__link">
      <img src="<?= $footer_reverse_fixed_img_pc; ?>" alt="" class="pc">
      <img src="<?= $footer_reverse_fixed_img_sp ?>" alt="" class="sp">
      <span class="p-reserve-btn__text">
        <span class="p-reserve-btn__text-item pc"><?= $footer_reverse_fixed_text_pc; ?></span>
        <span class="p-reserve-btn__text-item sp"><?= $footer_reverse_fixed_text_sp; ?></span>
        <span class="p-reserve-btn__text-item"><i class="fa-solid fa-circle-chevron-right"></i></span>
      </span>
    </a>
  </div>
<?php
  endwhile;
  endif;
?>
<?php
  endwhile;
  endif;
?>
<div id="loading"><div id="loading_text"></div></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/progressbar.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>
<?php wp_footer(); ?>
</html>