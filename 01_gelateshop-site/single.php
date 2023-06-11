<?php
  get_header();

  /*

    Template Name: ブログ記事

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
          while ( have_posts() ) : the_post();
        ?>
          <section class="p-blog-post">
            <div class="p-blog-post-heading">
              <?php if(strpos($page_slug, '_post') == false): ?>
                <div class="p-blog-post-heading-date"><?= get_the_date('Y年m月d日'); ?></div>
              <?php endif; ?>
              <h2 class="p-blog-post-heading-title"><?= get_field('blog_title'); ?></h2>
            </div>
            <?php if(get_field('blog_img')): ?>
              <figure class="p-blog-post-figure"><img src="<?= get_field('blog_img'); ?>" alt="" class="p-blog-post-figure-img"></figure>
            <?php endif; ?>
            <div class="p-blog-post-text"><?= get_field('blog_text'); ?></div>
            <p class="p-blog-post-btn c-btn">
              <a href="<?= esc_url( home_url('/'.$parent_slug )); ?>" class="p-blog-post-btn-link c-btn-link"><?= get_field('btn_text', $parent_id);?></a>
            </p>
          </section>
        <?php
          endwhile;
          endif;
          wp_reset_postdata();

          get_sidebar();
        ?>
      </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>