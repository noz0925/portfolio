<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php if( is_home() || is_front_page() ): ?>
      <?php bloginfo('name'); ?>
    <?php else: ?>
      <?php wp_title(); ?>|<?php bloginfo('name'); ?>
    <?php endif; ?>
  </title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/layout.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<?php wp_head(); ?>

<?php
  global $logo_img_pc, $logo_img_sp, $site_title_ja, $site_title_en;
  $front_page_id = get_option('page_on_front');
  if(have_rows('header',$front_page_id)):
  while(have_rows('header',$front_page_id)): the_row();
  $top_bg_img = get_sub_field('top_bg_img');
  $logo_img_pc = get_sub_field('logo_img_pc');
  $logo_img_sp = get_sub_field('logo_img_sp');
  $site_title_ja = get_sub_field('site_title_ja');
  $site_title_en = get_sub_field('site_title_en');
?>
<body <?php body_class(); ?> <?php if( is_home() || is_front_page() ){ echo 'style="background-image:url('.$top_bg_img.');"' ;} ?>>
<header class="l-header" id="header-origin">
  <div class="p-header">
    <div class="p-header__logo">
      <h1 class="p-header__logo-inner">
        <img src="<?= $logo_img_pc; ?>" alt="<?= $site_title_ja; ?>" class="p-header__logo-img pc">
        <img src="<?= $logo_img_sp; ?>" alt="<?= $site_title_ja; ?>" class="p-header__logo-img sp">
        <?php if( $site_title_ja || $site_title_en ): ?>
          <p class="p-header__logo-text">
            <span class="p-header__logo-ja"><?= $site_title_ja; ?></span>
            <span class="p-header__logo-en"><?= $site_title_en; ?></span>
          </p>
        <?php endif; ?>
      </h1>
    </div>
    <?php get_template_part('component/menu'); ?>
  </div>
</header>
<header class="l-header" id="header-clone">
  <div class="p-header">
    <div class="p-header__logo">
      <h1 class="p-header__logo-inner">
        <a href="<?= esc_url(home_url('/')); ?>" class="p-header__logo-link">
          <img src="<?= $logo_img_sp; ?>" alt="<?= $site_title_ja; ?>" class="p-header__logo-img">
          <p class="p-header__logo-text">
            <span class="p-header__logo-ja"><?= $site_title_ja; ?></span>
            <span class="p-header__logo-en"><?= $site_title_en; ?></span>
          </p>
        </a>
      </h1>
    </div>
    <?php get_template_part('component/menu'); ?>
  </div>
</header>
<?php
  endwhile;
  endif;
?>