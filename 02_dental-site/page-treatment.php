<?php
/*
Template Name: treatmentページ
*/
get_header();

$under_title_en = get_field('under_title_en');
$under_title_ja = get_field('under_title_ja');
$under_title_bg = get_field('under_title_bg');
?>
  <main class="l-main">
    <article class="l-home">
      <div class="p-under-kv">
        <div class="p-under-kv__text">
          <h2 class="p-under-kv__text-item">
            <span class="p-under-kv__text-en"><?= $under_title_en; ?></span>
            <span class="p-under-kv__text-ja"><?= $under_title_ja; ?></span>
          </h2>
        </div>
        <div class="p-under-kv__bg" style="background-image:url('<?= $under_title_bg; ?>');"></div>
      </div>
      <section class="p-treatment-link">
        <h2 class="p-treatment-link__title c-title"><?= $top_treatment_title; ?></h2>
        <ul class="p-treatment-link__list">
          <?php
            if( have_rows('treatment_top_btn_1') ):
            while( have_rows('treatment_top_btn_1') ): the_row();
            $treatment_top_btn_img = get_sub_field('img');
            $treatment_top_btn_text = get_sub_field('text');
            $treatment_top_btn_anchor = get_sub_field('anchor');
          ?>
            <li class="p-treatment-link__item">
              <a href="#<?= $treatment_top_btn_anchor; ?>" class="p-treatment-link__link">
                <figure class="p-treatment-link__figure">
                  <img src="<?= $treatment_top_btn_img; ?>" class="p-treatment-link__img" alt="">
                  <figcaption class="p-treatment-link__figcaption"><?= $treatment_top_btn_text; ?><span class="p-treatment-link__icon"><i class="fa-solid fa-angle-right"></i></span></figcaption>
                </figure>
              </a>
            </li>
          <?php
            endwhile;
            endif;

            if( have_rows('treatment_top_btn_2') ):
            while( have_rows('treatment_top_btn_2') ): the_row();
            $treatment_top_btn_img = get_sub_field('img');
            $treatment_top_btn_text = get_sub_field('text');
            $treatment_top_btn_anchor = get_sub_field('anchor');
          ?>
            <li class="p-treatment-link__item">
              <a href="#<?= $treatment_top_btn_anchor; ?>" class="p-treatment-link__link">
                <figure class="p-treatment-link__figure">
                  <img src="<?= $treatment_top_btn_img; ?>" class="p-treatment-link__img" alt="">
                  <figcaption class="p-treatment-link__figcaption"><?= $treatment_top_btn_text; ?><span class="p-treatment-link__icon"><i class="fa-solid fa-angle-right"></i></span></figcaption>
                </figure>
              </a>
            </li>
          <?php
            endwhile;
            endif;

            if( have_rows('treatment_top_btn_3') ):
            while( have_rows('treatment_top_btn_3') ): the_row();
            $treatment_top_btn_img = get_sub_field('img');
            $treatment_top_btn_text = get_sub_field('text');
            $treatment_top_btn_anchor = get_sub_field('anchor');
          ?>
            <li class="p-treatment-link__item">
              <a href="#<?= $treatment_top_btn_anchor; ?>" class="p-treatment-link__link">
                <figure class="p-treatment-link__figure">
                  <img src="<?= $treatment_top_btn_img; ?>" class="p-treatment-link__img" alt="">
                  <figcaption class="p-treatment-link__figcaption"><?= $treatment_top_btn_text; ?><span class="p-treatment-link__icon"><i class="fa-solid fa-angle-right"></i></span></figcaption>
                </figure>
              </a>
            </li>
          <?php
            endwhile;
            endif;
          ?>
        </ul>
      </section>
      <?php
        $args = array(
          'post_type' => 'treatment_post',
          'posts_per_page' => -1
        );
        $wp_query = new WP_Query($args);
        $count = 1;
        if(have_posts()):
        while(have_posts()):the_post();

        if( have_rows('treatment') ):
        while( have_rows('treatment') ): the_row();
        $treatment_icon = get_sub_field('treatment_icon_img');
        $treatment_name = get_sub_field('treatment_name');
        $treatment_img = get_sub_field('treatment_img');
      ?>
        <section class="p-treatment-post" id="sec_<?= $count; ?>">
          <div class="p-treatment-post__inner">
            <div class="p-treatment-post__head">
              <figure class="p-treatment-post__head-icon">
                <img src="<?= $treatment_icon; ?>" alt=""  class="p-treatment-post__head-icon-img">
              </figure>
              <h2 class="p-treatment-post__head-title"><?= $treatment_name; ?></h2>
            </div>
            <?php
              if( have_rows('treatment_large') ):
              while( have_rows('treatment_large') ): the_row();
              $title = get_sub_field('title');
              $text = get_sub_field('text');
            ?>
              <div class="p-treatment-post__large">
                <h3 class="p-treatment-post__large-title"><span class="p-treatment-post__large-title-text"><?= $title; ?></span></h3>
                <p class="p-treatment-post__large-text"><?= $text; ?></p>
              </div>
            <?php
              endwhile;
              endif;
            ?>
            <div class="p-treatment-post__small">
              <div class="p-treatment-post__small-wrap">
                <?php
                  if( have_rows('treatment_small_1') ):
                  while( have_rows('treatment_small_1') ): the_row();
                  $title = get_sub_field('title');
                  $text = get_sub_field('text');
                ?>
                  <div class="p-treatment-post__small-item">
                    <h3 class="p-treatment-post__small-title"><?= $title; ?></h3>
                    <p class="p-treatment-post__small-text"><?= $text; ?></p>
                  </div>
                <?php
                  endwhile;
                  endif;
                
                  if( have_rows('treatment_small_2') ):
                  while( have_rows('treatment_small_2') ): the_row();
                  $title = get_sub_field('title');
                  $text = get_sub_field('text');
                ?>
                  <div class="p-treatment-post__small-item">
                    <h3 class="p-treatment-post__small-title"><?= $title; ?></h3>
                    <p class="p-treatment-post__small-text"><?= $text; ?></p>
                  </div>
                <?php
                  endwhile;
                  endif;
                ?>
              </div>
              <figure class="p-treatment-post__small-figure">
                <img src="<?= $treatment_img; ?>" alt="">
              </figure>
            </div>
            <?php
              if( have_rows('treatment_under') ):
              while( have_rows('treatment_under') ): the_row();
              $title = get_sub_field('title');
              $text = get_sub_field('text');
            ?>
              <div class="p-treatment-post__desc">
                <h3 class="p-treatment-post__desc-title"><?= $title; ?></h3>
                <p class="p-treatment-post__desc-text"><?= $text; ?></p>
              </div>
            <?php
              endwhile;
              endif;
            ?>
          </div>
        </section>
      <?php

        endwhile;
        endif;

        $count++;
        endwhile;
        endif;
        wp_reset_postdata();
        wp_reset_query();
      ?>
    </article>
  </main>
<?php get_footer(); ?>