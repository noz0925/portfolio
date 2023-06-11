<?php
  global $post;

  if(is_page()){
    $page_slug = $post->post_name;
    $custum_post_slug = ($page_slug !== 'blog') ? $page_slug.'_post' : 'post';
  }
  if(is_category()){
    $custum_post_slug = $post->post_type;
  }
  if(is_single()){
    $custum_post_slug = $post->post_type;
  }
?>
  <aside class="p-blog-sidebar">
    <?php
      if(strpos($custum_post_slug, '_post') == false):
      $args = array(
        //'orderby' => 'id',
        //'order' => 'desc',
        'hide_empty' => '0' 
      );
      $cats = get_categories($args);
    ?>
      <dl class="p-blog-sidebar-wrap">
        <dt class="p-blog-sidebar-title">Category</dt>
        <?php foreach($cats as $cat): ?>
          <dd class="p-blog-sidebar-item">
            <a href="<?= get_category_link($cat->term_id) ?>" class="p-blog-sidebar-item-link"><?= $cat->name; ?></a>
          </dd>
        <?php endforeach; ?>
      </dl>
    <?php
      wp_reset_postdata();
      endif;

      if(strpos($custum_post_slug, '_post') == false){
        $title = 'Latest article';
        $posts_per_page = 3;
      }else{
        $title = 'Shop list';
        $posts_per_page = -1;
      }

      $post_query = new WP_Query(
        array(
          'post_type' => $custum_post_slug,
          'posts_per_page' => $posts_per_page
        )
      );

      if($post_query -> have_posts()):
    ?>
      <dl class="p-blog-sidebar-wrap is-article">
        <dt class="p-blog-sidebar-title"><?= $title; ?></dt>
        <?php while($post_query -> have_posts()): $post_query -> the_post(); ?>
          <dd class="p-blog-sidebar-item">
            <a href="<?= the_permalink(); ?>" class="p-blog-sidebar-item-link">
              <?php if(strpos($custum_post_slug, '_post') == false): ?>
                <span class="p-blog-sidebar-item-date"><?= get_the_date(); ?></span>
              <?php endif; ?>
              <span class="p-blog-sidebar-item-title"><?php the_title(); ?></span>
            </a>
          </dd>
        <?php endwhile; ?>
      </dl>
    <?php
      endif;
      wp_reset_postdata();
    ?>
  </aside>
<?php
?>
