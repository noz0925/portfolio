    <footer class="l-footer">
      <div class="p-footer">
          <div class="p-footer-inner">
            <div class="p-footer-wrap">
              <?php
                $front_page_id = get_option('page_on_front');
  
                if( have_rows('top_access', $front_page_id) ):
                while( have_rows('top_access', $front_page_id) ): the_row();
              ?>
                <div class="p-footer-top">
                  <div class="p-footer-logo">
                    <a href="<?= esc_url( home_url('/') ); ?>" class="p-footer-info-logo-link">
                      <?php if(get_sub_field('logo_img_footer')): ?>
                        <img src="<?= get_sub_field('logo_img_footer'); ?>" alt="" class="p-footer-info-logo-link-img">
                      <?php endif; ?>
                    </a>
                  </div>
                  <div class="p-footer-nav">
                    <?php include(get_template_directory() . '/component/menu.php'); ?>
                  </div>
                </div>
                <div class="p-footer-bottom">
                  <?php
                    if( have_rows('info') ):
                    while( have_rows('info') ): the_row();
                  ?>
                    <ul class="p-footer-info">
                      <?php
                        if( have_rows('info_sns') ):
                        while( have_rows('info_sns') ): the_row();
                        if(get_sub_field('info_sns_instagram') || get_sub_field('info_sns_twitter') || get_sub_field('info_sns_facebook') || get_sub_field('info_sns_line')):
                      ?>
                        <li class="p-footer-info-item">
                          <ul class="p-footer-sns">
                            <?php if(get_sub_field('info_sns_instagram')): ?>
                              <li class="p-footer-sns-item"><a href="<?= get_sub_field('info_sns_instagram'); ?>" target='_blank' rel='noopener noreferrer' class="p-footer-sns-link"><i class="fa-brands fa-instagram"></i></a></li>
                            <?php endif; ?>
                            <?php if(get_sub_field('info_sns_twitter')): ?>
                              <li class="p-footer-sns-item"><a href="<?= get_sub_field('info_sns_twitter'); ?>" target='_blank' rel='noopener noreferrer' class="p-footer-sns-link"><i class="fa-brands fa-twitter"></i></a></li>
                            <?php endif; ?>
                            <?php if(get_sub_field('info_sns_facebook')): ?>
                              <li class="p-footer-sns-item"><a href="<?= get_sub_field('info_sns_facebook'); ?>" target='_blank' rel='noopener noreferrer' class="p-footer-sns-link"><i class="fa-brands fa-facebook"></i></a></li>
                            <?php endif; ?>
                            <?php if(get_sub_field('info_sns_line')): ?>
                              <li class="p-footer-sns-item"><a href="<?= get_sub_field('info_sns_line'); ?>" target='_blank' rel='noopener noreferrer' class="p-footer-sns-link"><i class="fa-brands fa-line"></i></a></li>
                            <?php endif; ?>
                          </ul>
                        </li>
                      <?php
                        endif;
                        endwhile;
                        endif;
                      ?>
                    </ul>
                  <?php
                    endwhile;
                    endif; 
                  ?>
              <?php
                endwhile;
                endif; 
              ?>
                <?php
                  if( have_rows('common', $front_page_id) ):
                  while( have_rows('common', $front_page_id) ): the_row();
                ?>
                  <div class="p-footer-copy">
                    <span class="p-footer-copy-text"><?= get_sub_field('copy'); ?></span>
                  </div>
                <?php
                  endwhile;
                  endif; 
                ?>
              </div>
            </div>
          </div>
      </div>
    </footer>
  </div><!-- /.l-container-left -->
</div><!-- /.l-container -->
<?php /*<link href="https://fonts.googleapis.com/css2?family=Cardo:wght@700&display=swap" rel="stylesheet">*/ ?>
<?php /*<link href="https://fonts.googleapis.com/css2?family=Emblema+One&family=Shippori+Mincho:wght@700&display=swap" rel="stylesheet">*/ ?>
<link href="https://fonts.googleapis.com/css2?family=Cardo:wght@400;700&family=Shippori+Mincho:wght@700&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/85188/jquery.wavify.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/ofi.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>
<?php wp_footer(); ?>
</html>