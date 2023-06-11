<?php
  get_header();

  /*

    Template Name: フレーバー

  */

  global $post;
  $page_id = $post->ID;
?>
<div class="l-container-left">
  <main class="l-main is-flavor">
    <?php include(get_template_directory().'/component/under_header.php'); ?>
    <div class="p-page-wave">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path id="page_wave" d=""/>
      </svg>
    </div>
    <div class="c-breadcrumbs">
      <?php the_breadcrumbs(); ?>
    </div>
    <div class="p-page-content">
      <?php
        if( have_rows('flavor_overview') ):
        while( have_rows('flavor_overview') ): the_row();
        if(get_sub_field('toggle')):
      ?>
        <section class="p-flavor-overview">
          <div class="p-flavor-overview-bg"  style="background-image:url('<?= get_sub_field('img'); ?>');"></div>
          <div class="p-flavor-overview-content">
            <p class="p-flavor-overview-text"><?= get_sub_field('text'); ?></p>
          </div>
        </section>
      <?php
        endif;
        endwhile;
        endif;

        if( have_rows('flavor_list') ):
        while( have_rows('flavor_list') ): the_row();
        $flavor_slug = $post->post_title.'_post';
        $flavor_cat_slug = $post->post_title.'_category';
      ?>
        <section class="p-flavor-list">
          <div class="p-flavor-list-inner">
            <h2 class="p-flavor-list-heading c-top-heading js-bottom-fade-in">
              <span class="p-flavor-list-heading-en c-top-heading-en"><?= get_sub_field('title_en'); ?></span>
              <span class="p-flavor-list-heading-ja c-top-heading-ja"><?= get_sub_field('title_ja'); ?></span>
            </h2>
            <div class="p-flavor-list-wrap js-bottom-fade-in">
              <div class="p-flavor-list-category">
                <ul class="p-flavor-list-category-list js-cat-tab">
                  <li class="p-flavor-list-category-item">
                    <a href="#is-all" class="p-flavor-list-category-item-link">すべて</a>
                  </li>
                  <?php
                    $flavor_cats = get_terms($flavor_cat_slug);
                    foreach($flavor_cats as $flavor_cat):
                      $flavor_cat_bg_color = get_field('cat_bg_color', $flavor_cat_slug.'_'.$flavor_cat->term_id);
                  ?>
                    <li class="p-flavor-list-category-item" style="background-color:<?= $flavor_cat_bg_color; ?>;">
                      <a href="#is-<?= $flavor_cat->slug; ?>" class="p-flavor-list-category-item-link"><?= $flavor_cat->name; ?></a>
                    </li>
                  <?php
                    endforeach;
                  ?>
                </ul>
              </div>
              <div class="p-flavor-list-items-wrap">
                <?php
                  //flavor_post全ての記事を取得
                  $flavor_query = new WP_Query(
                    array(
                      'post_type'=> $flavor_slug,
                      'posts_per_page'=> -1
                    )
                  );
                  if($flavor_query -> have_posts()):
                ?>
                  <ul class="p-flavor-list-items js-flavor-list" id="is-all">
                    <?php while($flavor_query -> have_posts()): $flavor_query -> the_post(); ?>
                      <li class="p-flavor-list-item">
                        <a href="<?php the_permalink(); ?>" class="p-flavor-list-item-link">
                          <figure class="p-flavor-list-item-figure">
                            <img src="<?= get_field('flavor_thumbnail_img'); ?>" alt="" class="p-flavor-list-item-figure-img">
                          </figure>
                          <?php
                           $cats = get_the_terms($post->ID,$flavor_cat_slug);
                            if($cats):
                          ?>
                            <span class="p-flavor-list-item-category">
                              <?php
                                foreach($cats as $cat):
                                $cat_color = get_field('cat_color', $flavor_cat_slug.'_'.$cat->term_id);
                              ?>
                                <span class="p-flavor-list-item-category-item" style="background-color:<?= $cat_color; ?>">
                                  <span class="p-flavor-list-item-category-item-name"><?= $cat->name; ?></span>
                                </span>
                              <?php
                                endforeach;
                              ?>
                            </span>
                          <?php endif; ?>
                          <span class="p-flavor-list-item-name">
                            <span class="p-flavor-list-item-name-en"><?= get_field('flavor_name_en'); ?></span>
                            <span class="p-flavor-list-item-name-ja"><?= get_field('flavor_name_ja'); ?></span>
                          </span>
                        </a>
                      </li>
                    <?php endwhile; ?>
                  </ul>
                <?php
                  endif;
                  wp_reset_postdata();

                  //flavor_postカテゴリー別の記事を取得
                  foreach ($flavor_cats as $flavor_cat):
                  $flavor_query = new WP_Query(
                    array(
                      'post_type'=> $flavor_slug,
                      'posts_per_page'=> -1,
                      'tax_query'=> array(
                        array(
                          'taxonomy'=> $post->post_title.'_category',
                          'field'=> 'slug',
                          'terms'=> $flavor_cat->slug
                        )
                      )
                    )
                  );
                  //背景色をカテゴリーのACFから取得
                  $flavor_cat_bg_color = get_field('cat_bg_color', $flavor_cat_slug.'_'.$flavor_cat->term_id);

                  if($flavor_query -> have_posts()):
                ?>
                  <ul class="p-flavor-list-items js-flavor-list" id="is-<?= $flavor_cat->slug; ?>"style="background-color:<?= $flavor_cat_bg_color; ?>">
                    <?php
                      while($flavor_query -> have_posts()): $flavor_query -> the_post();
                    ?>
                      <li class="p-flavor-list-item">
                        <a href="<?php the_permalink(); ?>" class="p-flavor-list-item-link">
                          <figure class="p-flavor-list-item-figure">
                            <img src="<?= get_field('flavor_thumbnail_img'); ?>" alt="" class="p-flavor-list-item-figure-img">
                          </figure>
                          <?php
                           $cats = get_the_terms($post->ID,$flavor_cat_slug);
                            if($cats):
                          ?>
                            <span class="p-flavor-list-item-category">
                              <?php
                                foreach($cats as $cat):
                                $cat_color = get_field('cat_color', $flavor_cat_slug.'_'.$cat->term_id);
                              ?>
                                <span class="p-flavor-list-item-category-item" style="background-color:<?= $cat_color; ?>">
                                  <span class="p-flavor-list-item-category-item-name"><?= $cat->name; ?></span>
                                </span>
                              <?php
                                endforeach;
                              ?>
                            </span>
                          <?php endif; ?>
                          <span class="p-flavor-list-item-name">
                            <span class="p-flavor-list-item-name-en"><?= get_field('flavor_name_en'); ?></span>
                            <span class="p-flavor-list-item-name-ja"><?= get_field('flavor_name_ja'); ?></span>
                          </span>
                        </a>
                      </li>
                    <?php
                      endwhile;
                    ?>
                  </ul>
                <?php
                  endif;
                  wp_reset_postdata();
                  endforeach;
                ?>
              </div>
            </div>
          </div>
        </section>
      <?php
        endwhile;
        endif;
      ?>
    </div>
  </main>
</div>
<?php get_footer(); ?>