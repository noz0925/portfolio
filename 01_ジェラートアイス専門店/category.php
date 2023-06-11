<?php
  get_header();

  /*

    Template Name: ブログカテゴリー

  */

  global $post;
  $page_slug = $post->post_type;

  //カスタム投稿の場合は'_post'をとる
  if(strpos($page_slug, '_post') !== false){
    $parent_slug = str_replace('_post', '', $page_slug);
  }else{
    $parent_slug = 'blog';
  }
  $parent = get_page_by_path($parent_slug);
  $parent_id = $parent->ID;
?>
<div class="l-container-left">
  <main class="l-main is-blog">
    <?php include(get_template_directory().'/component/under_header.php'); ?>
    <div class="p-page-wave">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path id="page_wave" d=""/>
      </svg>
    </div>
    <div class="c-breadcrumbs">
      <?php the_breadcrumbs(); ?>
    </div>
    <div class="p-blog p-page-content">
      <div class="p-blog-inner">
        <?php
          if(have_posts()):
        ?>
          <section class="p-blog-list">
            <div class="p-blog-list-inner">
              <?php
                while(have_posts()):the_post();
                $cat = get_the_category();
              ?>
                <article class="p-blog-item c-post">
                  <a href="<?php the_permalink(); ?>" class="p-blog-item-link c-post-link">
                    <figure class="p-blog-item-figure c-post-figure">
                      <img src="<?= get_field('blog_img'); ?>" alt="" class="p-blog-item-figure-img c-post-figure-img">
                    </figure>
                    <span class="p-blog-item-desc c-post-desc">
                      <span class="p-top-blog-item-category c-post-desc-category"><?= $cat[0]->name; ?></span>
                      <span class="p-blog-item-date c-post-desc-date"><?= get_the_date(); ?></span>
                      <span class="p-blog-item-title c-post-desc-title"><?php the_title(); ?></span>
                    </span>
                  </a>
                </article>
              <?php
                endwhile;
              ?>
            </div>
          </section>
        <?php
          wp_reset_postdata();
          endif;

          get_sidebar();
        ?>
      </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>