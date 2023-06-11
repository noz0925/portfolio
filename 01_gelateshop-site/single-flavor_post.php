<?php
  get_header();

  /*

    Template Name: フレーバー詳細ページ

  */

  global $post;
  $page_slug = $post->post_type;
  $parent_slug = str_replace('_post', '', $page_slug);

  //flavorページid取得
  $parent = get_page_by_path($parent_slug);
  $parent_id = $parent->ID;
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
        <section class="p-flavor-post">
          <div class="p-flavor-post-inner">
            <figure class="p-flavor-post-figure">
              <img src="<?= get_field('flavor_img'); ?>" alt="" class="p-flavor-post-figure-img">
            </figure>
            <div class="p-flavor-post-contents">
              <div class="p-flavor-post-heading">
                <?php
                  $terms = get_the_terms($post->ID, $parent_slug.'_category');
                  if(!empty($terms)):
                ?>
                  <ul class="p-flavor-post-heading-category">
                    <?php
                      foreach($terms as $term):
                      $cat_color = get_field('cat_color', $parent_slug.'_category'.'_'.$term->term_id);
                    ?>
                      <li class="p-flavor-post-heading-category-item" style="background-color:<?= $cat_color; ?>">
                        <span class="p-flavor-post-heading-category-item-text"><?= $term->name; ?></span>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                <?php endif; ?>
                <div class="p-flavor-post-heading-name">
                  <p class="p-flavor-post-heading-name-en"><?= get_field('flavor_name_en'); ?></p>
                  <p class="p-flavor-post-heading-name-ja"><?= get_field('flavor_name_ja'); ?></p>
                </div>
              </div>
              <div class="p-flavor-post-desc">
                <div class="p-flavor-post-desc-text"><?= get_field('flavor_desc'); ?></div>
                <dl class="p-flavor-post-desc-allergy">
                  <dt class="p-flavor-post-desc-allergy-title"><?= get_field('flavor_desc2_title'); ?></dt>
                  <dd class="p-flavor-post-desc-allergy-text"><?= get_field('flavor_desc2_text'); ?></dd>
                </dl>
              </div>
            </div>
          </div>
          <p class="p-flavor-post-btn c-btn">
            <a href="<?= esc_url( home_url('/'.$parent_slug )); ?>" class="p-flavor-post-btn-link c-btn-link"><?= get_field('btn_text', $parent_id);?></a>
          </p>
        </section>
    </div>
  </main>
</div>
<?php get_footer(); ?>