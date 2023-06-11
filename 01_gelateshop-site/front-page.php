
<?php get_header(); ?>
  <div class="l-container-left">
    <main class="l-main">
      <?php
        if( have_rows('top_kv') ):
        while( have_rows('top_kv') ): the_row();
      ?>
        <div class="p-top-kv">
          <div class="p-top-kv-slide swiper">
            <ul class="p-top-kv-slide-list swiper-wrapper">
              <li class="p-top-kv-slide-item swiper-slide">
                <div class="p-top-kv-slide-img pc" style="background-image:url('<?= get_sub_field('top_kv_img_pc_1'); ?>');"></div>
                <div class="p-top-kv-slide-img sp" style="background-image:url('<?= get_sub_field('top_kv_img_sp_1'); ?>');"></div>
              </li>
              <?php if(get_sub_field('top_kv_img_pc_2')): ?>
                <li class="p-top-kv-slide-item swiper-slide">
                  <div class="p-top-kv-slide-img pc" style="background-image:url('<?= get_sub_field('top_kv_img_pc_2'); ?>');"></div>
                  <div class="p-top-kv-slide-img sp" style="background-image:url('<?= get_sub_field('top_kv_img_sp_2'); ?>');"></div>
                </li>
              <?php endif; ?>
              <?php if(get_sub_field('top_kv_img_pc_3')): ?>
                <li class="p-top-kv-slide-item swiper-slide">
                  <div class="p-top-kv-slide-img pc" style="background-image:url('<?= get_sub_field('top_kv_img_pc_3'); ?>');"></div>
                  <div class="p-top-kv-slide-img sp" style="background-image:url('<?= get_sub_field('top_kv_img_sp_3'); ?>');"></div>
                </li>
              <?php endif; ?>
            </ul>
          </div>
          <div class="p-top-kv-text">
            <p class="p-top-kv-text-item">
              <?= get_sub_field('top_kv_text'); ?>
            </p>
          </div>
        </div>
        <div class="p-top-wave">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
            <path id="top_wave" d=""/>
          </svg>
        </div>
      <?php
        endwhile;
        endif;

        if( have_rows('top_flavor') ):
        while( have_rows('top_flavor') ): the_row();
        if(get_sub_field('toggle')):
      ?>
        <section class="p-top-flavor">
          <div class="p-top-flavor-inner js-bottom-fade-in">
            <div class="p-top-flavor-content">
              <h2 class="p-top-flavor-heading c-top-heading">
                <span class="p-top-flavor-heading-en c-top-heading-en"><?= get_sub_field('title_en'); ?></span>
                <span class="p-top-flavor-heading-ja c-top-heading-ja"><?= get_sub_field('title_ja'); ?></span>
              </h2>
              <div class="p-top-flavor-desc">
                <p class="p-top-flavor-desc-text"><?= get_sub_field('text'); ?></p>
              </div>
            </div>
          </div>
          <?php if(get_sub_field('flavor_toggle')): ?>
            <?php 
              $flavor_query = new WP_Query(
                array(
                  'post_type'=> 'flavor_post',
                  'posts_per_page' => -1
                )
              );
              if($flavor_query -> have_posts()):
             ?>
              <div class="p-top-flavor-list js-bottom-fade-in swiper">
                <ul class="p-top-flavor-list-inner swiper-wrapper">
                  <?php while($flavor_query -> have_posts()): $flavor_query -> the_post(); ?>
                    <li class="p-top-flavor-list-item swiper-slide">
                      <a href="<?php the_permalink(); ?>" class="p-top-flavor-list-item-link">
                        <span class="p-top-flavor-list-item-link-text"><?= get_field('flavor_name_en'); ?></span>
                        <img src="<?= get_field('flavor_thumbnail_img'); ?>" alt="" class="p-top-flavor-list-item-link-img">
                      </a>
                    </li>
                  <?php endwhile; ?>
                </ul>
            <?php 
              endif;
              wp_reset_postdata();
             ?>
            <?php
              if( have_rows('btn') ):
              while( have_rows('btn') ): the_row();
              $link = $target = '';
              $link = get_sub_field('url') ? get_sub_field('url') : get_sub_field('link');
              if(get_sub_field('anchor')){
                $link = $link.'#'.get_sub_field('anchor');
              }
              if(strpos( $link ,$_SERVER['SERVER_NAME']) == false){
                $target = ' target="_blank" rel="noopener noreferrer"';
              }
              $btn_text = get_sub_field('btn_text');
            ?>
              <p class="p-top-flavor-list-btn c-btn">
                <a href="<?= $link; ?>"<?= $target; ?> class="p-top-flavor-list-btn-link c-btn-link"><?= $btn_text; ?></a>
              </p>
            <?php
              endwhile;
              endif;
            ?>
            <?php endif; ?>
        </section>
      <?php
        endif;
        endwhile;
        endif;

        if( have_rows('top_about') ):
        while( have_rows('top_about') ): the_row();
        if(get_sub_field('toggle')):
      ?>
        <section class="p-top-about">
          <div class="p-top-about-inner">
            <div class="p-top-about-bg js-left-fade-in">
              <span class="p-top-about-bg-img" style="background-image:url('<?= get_sub_field('bg_img'); ?>');"></span>
            </div>
            <div class="p-top-about-content js-right-fade-in">
              <h2 class="p-top-about-heading c-top-heading">
                <span class="p-top-about-heading-en c-top-heading-en"><?= get_sub_field('title_en'); ?></span>
                <span class="p-top-about-heading-ja c-top-heading-ja"><?= get_sub_field('title_ja'); ?></span>
              </h2>
              <div class="p-top-about-desc">
                <p class="p-top-about-desc-text"><?= get_sub_field('text'); ?></p>
              </div>
              <?php
                if( have_rows('btn') ):
                while( have_rows('btn') ): the_row();

                $link = $target = '';
                $link = get_sub_field('url') ? get_sub_field('url') : get_sub_field('link');
                if(get_sub_field('anchor')){
                  $link = $link.'#'.get_sub_field('anchor');
                }
                if(strpos( $link ,$_SERVER['SERVER_NAME']) == false){
                  $target = ' target="_blank" rel="noopener noreferrer"';
                }
                $btn_text = get_sub_field('btn_text');
              ?>
                <p class="p-top-about-btn c-btn">
                  <a href="<?= $link; ?>"<?= $target; ?> class="p-top-about-btn-link c-btn-link"><?= $btn_text; ?></a>
                </p>
              <?php
                endwhile;
                endif;
              ?>
            </div>
          </div>
        </section>
      <?php
        endif;
        endwhile;
        endif;

        if( have_rows('top_blog') ):
        while( have_rows('top_blog') ): the_row();
        if(get_sub_field('toggle')):

        $post_query = new WP_Query(
          array(
            'post_type'=> 'post',
            'posts_per_page' => 3
          )
        );
        if($post_query -> have_posts()):
      ?>
        <section class="p-top-blog">
          <div class="p-top-blog-inner">
            <h2 class="p-top-blog-heading c-top-heading js-bottom-fade-in">
              <span class="p-top-blog-heading-en c-top-heading-en"><?= get_sub_field('title_en'); ?></span>
              <span class="p-top-blog-heading-ja c-top-heading-ja"><?= get_sub_field('title_ja'); ?></span>
            </h2>
            <div class="p-top-blog-content swiper js-bottom-fade-in">
              <div class="p-top-blog-list swiper-wrapper">
                <?php
                  while($post_query -> have_posts()): $post_query -> the_post();
                  $cat = get_the_category();
                ?>
                  <article class="p-top-blog-item c-post swiper-slide">
                    <a href="<?php the_permalink(); ?>" class="p-top-blog-item-link c-post-link">
                      <figure class="p-top-blog-item-figure c-post-figure">
                        <img src="<?= get_field('blog_img'); ?>" alt="" class="p-top-blog-item-figure-img c-post-figure-img">
                      </figure>
                      <span class="p-top-blog-item-desc c-post-desc">
                        <span class="p-top-blog-item-category c-post-desc-category"><?= $cat[0]->name; ?></span>
                        <span class="p-top-blog-item-date c-post-desc-date"><?= get_the_date(); ?></span>
                        <span class="p-top-blog-item-title c-post-desc-title"><?php the_title(); ?></span>
                      </span>
                    </a>
                  </article>
                <?php
                  endwhile;
                ?>
              </div>
              <div class="p-top-blog-pagination swiper-pagination"></div>
              <?php
                if( have_rows('btn') ):
                while( have_rows('btn') ): the_row();

                $link = $target = '';
                $link = get_sub_field('url') ? get_sub_field('url') : get_sub_field('link');
                if(get_sub_field('anchor')){
                  $link = $link.'#'.get_sub_field('anchor');
                }
                if(strpos( $link ,$_SERVER['SERVER_NAME']) == false){
                  $target = ' target="_blank" rel="noopener noreferrer"';
                }
                $btn_text = get_sub_field('btn_text');
              ?>
                <p class="p-top-blog-btn c-btn js-bottom-fade-in">
                  <a href="<?= $link; ?>"<?= $target; ?> class="p-top-blog-btn-link c-btn-link"><?= $btn_text; ?></a>
                </p>
              <?php
                endwhile;
                endif;
              ?>
            </div>
          </div>
        </section>
      <?php
        endif;
        wp_reset_postdata();

        endif;
        endwhile;
        endif;

        if( have_rows('top_access') ):
        while( have_rows('top_access') ): the_row();
        if(get_sub_field('toggle')):
      ?>
        <section class="p-top-access" id="access">
          <div class="p-top-access-inner">
            <div class="p-top-access-content">
              <h2 class="p-top-access-heading c-top-heading js-bottom-fade-in">
                <span class="p-top-access-heading-en c-top-heading-en"><?= get_sub_field('title_en'); ?></span>
                <span class="p-top-access-heading-ja c-top-heading-ja"><?= get_sub_field('title_ja'); ?></span>
              </h2>
              <div class="p-top-access-desc js-right-fade-in">
                <div class="p-top-access-desc-inner">
                  <?php if(get_sub_field('logo_img')): ?>
                    <figure class="p-top-access-desc-logo">
                      <img src="<?= get_sub_field('logo_img'); ?>" alt="" class="p-top-access-desc-logo-img">
                    </figure>
                  <?php endif; ?>
                  <?php
                    if( have_rows('info') ):
                    while( have_rows('info') ): the_row();
                  ?>
                    <ul class="p-top-access-desc-list">
                      <?php if(get_sub_field('info_text')): ?>
                        <li class="p-top-access-desc-item"><?= get_sub_field('info_text'); ?></li>
                      <?php endif; ?>
                      <?php
                        if( have_rows('info_sns') ):
                        while( have_rows('info_sns') ): the_row();
                        if(get_sub_field('info_sns_instagram') || get_sub_field('info_sns_twitter') || get_sub_field('info_sns_facebook') || get_sub_field('info_sns_line')):
                      ?>
                        <li class="p-top-access-desc-item">
                          <ul class="p-top-access-desc-sns">
                            <?php if(get_sub_field('info_sns_instagram')): ?>
                              <li class="p-top-access-desc-sns-item"><a href="<?= get_sub_field('info_sns_instagram'); ?>" target='_blank' rel='noopener noreferrer' class="p-top-access-desc-sns-link">instagram</a></li>
                            <?php endif; ?>
                            <?php if(get_sub_field('info_sns_twitter')): ?>
                              <li class="p-top-access-desc-sns-item"><a href="<?= get_sub_field('info_sns_twitter'); ?>" target='_blank' rel='noopener noreferrer' class="p-top-access-desc-sns-link">twitter</a></li>
                            <?php endif; ?>
                            <?php if(get_sub_field('info_sns_facebook')): ?>
                              <li class="p-top-access-desc-sns-item"><a href="<?= get_sub_field('info_sns_facebook'); ?>" target='_blank' rel='noopener noreferrer' class="p-top-access-desc-sns-link">facebook</a></li>
                            <?php endif; ?>
                            <?php if(get_sub_field('info_sns_line')): ?>
                              <li class="p-top-access-desc-sns-item"><a href="<?= get_sub_field('info_sns_line'); ?>" target='_blank' rel='noopener noreferrer' class="p-top-access-desc-sns-link">line</a></li>
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
                </div>
              </div>
            </div>
            <?php
              $post_query = new WP_Query(
                array(
                  'post_type'=> 'shop_list_post',
                  'posts_per_page' => -1
                )
              );
              if($post_query -> have_posts()):
            ?>
              <div class="p-top-access-list js-bottom-fade-in">
                <div class="p-top-access-list-inner">
                  <?php
                    while($post_query -> have_posts()): $post_query -> the_post();
                  ?>
                    <article class="p-top-access-item c-post">
                      <a href="<?php the_permalink(); ?>" class="p-top-access-item-link c-post-link">
                        <figure class="p-top-access-item-figure c-post-figure">
                          <img src="<?= get_field('blog_img'); ?>" alt="" class="p-top-access-item-figure-img c-post-figure-img">
                        </figure>
                        <span class="p-top-access-item-desc c-post-desc">
                          <span class="p-top-access-item-title c-post-desc-title"><?php the_title(); ?></span>
                        </span>
                      </a>
                    </article>
                  <?php
                    endwhile;
                  ?>
                </div>
              </div>
            <?php
              endif;
              wp_reset_postdata();
            ?>
          </div>
        </section>
      <?php
        endif;
        endwhile;
        endif;
      ?>
    </main>
<?php get_footer(); ?>