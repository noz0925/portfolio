<?php
  global $post;
  $page_slug = $post->post_type;
  
  if(is_page()){
    $page_id = $post->ID;
  }
  if(is_category()){
    $parent_slug = strpos($page_slug, '_post') ? str_replace('_post', '', $page_slug) : 'blog';
    $parent = get_page_by_path($parent_slug);
    $page_id = $parent->ID;
  }
  if(is_single()){
    $parent_slug = strpos($page_slug, '_post') ? str_replace('_post', '', $page_slug) : 'blog';
    $parent = get_page_by_path($parent_slug);
    $page_id = $parent->ID;
  }

  if( have_rows('under_header', $page_id) ):
  while( have_rows('under_header', $page_id) ): the_row();
?>
  <div class="p-page-kv">
    <div class="p-page-kv-bg">
      <span class="p-page-kv-bg-img pc" style="background-image:url('<?= get_sub_field('img_pc'); ?>');"></span>
      <span class="p-page-kv-bg-img sp" style="background-image:url('<?= get_sub_field('img_sp'); ?>');"></span>
    </div>
    <div class="p-page-kv-title">
      <div class="p-page-kv-title-text">
        <span class="p-page-kv-title-text-en"><?= get_sub_field('title_en'); ?></span>
        <span class="p-page-kv-title-text-ja"><?= get_sub_field('title_ja'); ?></span>
      </div>
    </div>
  </div>
<?php
  endwhile;
  endif;
?>