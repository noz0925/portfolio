<?php get_header(); ?>
  <main class="l-main">
    <article class="l-home">
      <?php
        if( have_rows('top_kv') ):
        while( have_rows('top_kv') ): the_row();
        $top_kv_img_pc_1 = get_sub_field('top_kv_img_pc_1');
        $top_kv_img_sp_1 = get_sub_field('top_kv_img_sp_1');
        $top_kv_img_pc_2 = get_sub_field('top_kv_img_pc_2');
        $top_kv_img_sp_2 = get_sub_field('top_kv_img_sp_2');
        $top_kv_img_pc_3 = get_sub_field('top_kv_img_pc_3');
        $top_kv_img_sp_3 = get_sub_field('top_kv_img_sp_3');
        $top_kv_text = get_sub_field('top_kv_text');
      ?>
        <div class="p-top-kv">
            <div class="p-top-kv__inner swiper" id="p-top-kv__swiper">
                <ul class="p-top-kv__list swiper-wrapper">
                  <?php if($top_kv_img_pc_1): ?>
                    <li class="p-top-kv__item swiper-slide">
                        <span class="p-top-kv__img pc" style="background-image: url('<?= $top_kv_img_pc_1; ?>');"></span>
                        <?php if($top_kv_img_sp_1): ?>
                          <span class="p-top-kv__img sp" style="background-image: url('<?= $top_kv_img_sp_1; ?>');"></span>
                        <?php endif; ?>
                    </li>
                  <?php endif; ?>
                  <?php if($top_kv_img_pc_2): ?>
                    <li class="p-top-kv__item swiper-slide">
                      <span class="p-top-kv__img pc" style="background-image: url('<?= $top_kv_img_pc_2; ?>');"></span>
                      <?php if($top_kv_img_sp_2): ?>
                        <span class="p-top-kv__img sp" style="background-image: url('<?= $top_kv_img_sp_2; ?>');"></span>
                      <?php endif; ?>
                    </li>
                  <?php endif; ?>
                  <?php if($top_kv_img_pc_3): ?>
                    <li class="p-top-kv__item swiper-slide">
                        <span class="p-top-kv__img pc" style="background-image: url('<?= $top_kv_img_pc_3; ?>');"></span>
                        <?php if($top_kv_img_sp_3): ?>
                          <span class="p-top-kv__img sp" style="background-image: url('<?= $top_kv_img_sp_3; ?>');"></span>
                        <?php endif; ?>
                    </li>
                  <?php endif; ?>
                </ul>
            </div>
            <?php if($top_kv_text): ?>
              <p class="p-top-kv__text-wrap">
                  <?= $top_kv_text; ?>
              </p>
            <?php endif; ?>
        </div>
      <?php
        endwhile;
        endif;

        if( have_rows('top_contents') ):
        while( have_rows('top_contents') ): the_row();
        $top_contents_item_1 = get_sub_field('top_contents_item_1');
        $top_contents_item_2 = get_sub_field('top_contents_item_2');
        $top_contents_item_3 = get_sub_field('top_contents_item_3');
        if(get_sub_field('top_contents_toggle')):
      ?>
        <section class="p-top-contents">
            <ul class="p-top-contents__list">
              <?php if($top_contents_item_1['top_contents_item_1_link'] || $top_contents_item_1['top_contents_item_1_text'] || $top_contents_item_1['top_contents_item_1_img']): ?>
                <li class="p-top-contents__card">
                    <a href="<?= $top_contents_item_1['top_contents_item_1_link']; ?>" class="p-top-contents__card-wrap">
                        <figure class="p-top-contents__figure">
                            <img src="<?= $top_contents_item_1['top_contents_item_1_img']; ?>" class="p-top-contents__img" alt="">
                        </figure>
                        <div class="p-top-contents__text-wrap">
                            <span class="p-top-contents__text"><?= $top_contents_item_1['top_contents_item_1_text']; ?></span>
                            <span class="p-top-contents__icon"><i class="fa-solid fa-angle-right"></i></span>
                        </div>
                    </a>
                </li>
              <?php endif; ?>
              <?php if($top_contents_item_2['top_contents_item_2_link'] || $top_contents_item_2['top_contents_item_2_text'] || $top_contents_item_2['top_contents_item_2_img']): ?>
                <li class="p-top-contents__card">
                    <a href="<?= $top_contents_item_2['top_contents_item_2_link']; ?>" class="p-top-contents__card-wrap">
                        <figure class="p-top-contents__figure">
                            <img src="<?= $top_contents_item_2['top_contents_item_2_img']; ?>" class="p-top-contents__img" alt="">
                        </figure>
                        <div class="p-top-contents__text-wrap">
                            <span class="p-top-contents__text"><?= $top_contents_item_2['top_contents_item_2_text']; ?></span>
                            <span class="p-top-contents__icon"><i class="fa-solid fa-angle-right"></i></span>
                        </div>
                    </a>
                </li>
              <?php endif; ?>
              <?php if($top_contents_item_3['top_contents_item_3_link'] || $top_contents_item_3['top_contents_item_3_text'] || $top_contents_item_3['top_contents_item_3_img']): ?>
                <li class="p-top-contents__card">
                    <a href="<?= $top_contents_item_3['top_contents_item_3_link']; ?>" class="p-top-contents__card-wrap">
                        <figure class="p-top-contents__figure">
                            <img src="<?= $top_contents_item_3['top_contents_item_3_img']; ?>" class="p-top-contents__img" alt="">
                        </figure>
                        <div class="p-top-contents__text-wrap">
                            <span class="p-top-contents__text"><?= $top_contents_item_3['top_contents_item_3_text']; ?></span>
                            <span class="p-top-contents__icon"><i class="fa-solid fa-angle-right"></i></span>
                        </div>
                    </a>
                </li>
              <?php endif; ?>
            </ul>
        </section>
      <?php
        endif;
        endwhile;
        endif;

        if( have_rows('top_treatment') ):
        while( have_rows('top_treatment') ): the_row();
        $top_treatment_title = get_sub_field('top_treatment_title');
        if(get_sub_field('top_treatment_toggle')):
      ?>
        <section class="p-top-treatment">
            <h2 class="p-top-treatment__title c-title"><?= $top_treatment_title; ?></h2>
            <ul class="p-top-treatment__list">
              <?php
                $args = array(
                  'post_type' => 'treatment_post',
                  'posts_per_page' => -1
                );
                $wp_query = new WP_Query($args);
                $count = 1;
                if(have_posts()):
                while(have_posts()):the_post();
                $treatment = get_field('treatment');
              ?>
                <li class="p-top-treatment__item">
                    <a href="<?= esc_url(home_url('/treatment/')); ?>#sec_<?= $count; ?>" class="p-top-treatment__link">
                        <figure class="p-top-treatment__figure">
                            <img src="<?= $treatment['treatment_icon_img']; ?>" class="p-top-treatment__img" alt="">
                            <figcaption class="p-top-treatment__figcaption">
                              <?= $treatment['treatment_name']; ?>
                              <span class="p-top-treatment__icon"><i class="fa-solid fa-angle-right"></i></span>
                            </figcaption>
                        </figure>
                    </a>
                </li>
              <?php
                $count++;
                endwhile;
                endif;
                wp_reset_postdata();
                wp_reset_query();
              ?>
            </ul>
        </section>
      <?php
        endif;
        endwhile;
        endif;
        
        if( have_rows('top_news') ):
        while( have_rows('top_news') ): the_row();
        $top_news_title = get_sub_field('top_news_title');
        if(get_sub_field('top_news_toggle')):
      ?>
        <section class="p-top-news">
            <div class="p-top-news__inner">
                <h2 class="p-top-news__title c-title"><?= $top_news_title; ?></h2>
                <div class="p-top-news__list">
                  <?php
                    $args = array(
                      'post_type' => 'post',
                      'posts_per_page' => 4
                    );
                    $wp_query = new WP_Query($args);
                    if(have_posts()):
                    while(have_posts()):the_post();
                  ?>
                    <a href="<?php the_permalink(); ?>" class="c-news__link">
                        <dl class="c-news__item">
                            <dt class="c-news__title"><?= the_time('Y年m月d日'); ?></dt>
                            <dd class="c-news__text"><?php the_title(); ?></dd>
                        </dl>
                    </a>
                  <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
                    wp_reset_query();
                  ?>
                </div>
                <p class="c-btn p-top-news__btn">
                    <a href="<?= esc_url(home_url('/news/')); ?>" class="c-btn__link p-top-news__link">
                        <span class="c-btn__text p-top-news__link-text">一覧を見る</span>
                    </a>
                </p>
            </div>
        </section>
      <?php
        endif;
        endwhile;
        endif;
      ?>
    </article>
  </main>
<?php get_footer(); ?>