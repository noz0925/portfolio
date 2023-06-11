<?php
  get_header();

  /*

    Template Name: ブログ一覧

  */

  global $post;
  //カスタム投稿の時
  $slug = $post->post_name;
  //get_page_by_path($slug)
  $custum_post_slug = $slug !=='blog' ? $slug.'_post' : 'post';
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
          $post_query = new WP_Query(
            array(
              'post_type' => $custum_post_slug,
              'posts_per_page' => -1
            )
          );
          if($post_query -> have_posts()):
        ?>
          <section class="p-blog-list">
            <div class="p-blog-list-inner">
              <?php
                while($post_query -> have_posts()): $post_query -> the_post();
                $cat = get_the_category();
              ?>
                <article class="p-blog-item c-post">
                  <a href="<?php the_permalink(); ?>" class="p-blog-item-link c-post-link">
                    <figure class="p-blog-item-figure c-post-figure">
                      <img src="<?= get_field('blog_img'); ?>" alt="" class="p-blog-item-figure-img c-post-figure-img">
                    </figure>
                    <span class="p-blog-item-desc c-post-desc<?php if(strpos($custum_post_slug, '_post') !== false){ echo ' is-'.$custum_post_slug; } ?>">
                      <?php if($cat): ?>
                        <span class="p-top-blog-item-category c-post-desc-category"><?= $cat[0]->name; ?></span>
                      <?php endif; ?>
                      <?php if(strpos($custum_post_slug, '_post') == false): ?>
                        <span class="p-blog-item-date c-post-desc-date"><?= get_the_date(); ?></span>
                      <?php endif; ?>
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
        endif;
        wp_reset_postdata();

        get_sidebar();
        ?>
      </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>