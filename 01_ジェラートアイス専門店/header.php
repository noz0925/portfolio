<!DOCTYPE html>
<html lang="en">
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
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<?php wp_head(); ?>

<body <?php body_class(); ?>>
  <div class="p-loader js-loader">
    <div class="p-loader-inner">glate Tokyo</div>
  </div>
  <div class="l-container">
    <header class="l-container-header p-header">
      <div class="p-header-pc">
        <div class="p-header-inner">
          <div class="p-header-btn js-header-btn">
            <span class="p-header-btn-line"></span>
          </div>
          <?php
            if(is_home() || is_front_page()) {
              $title_start = '<h1 class="p-header-logo">';
              $title_end = '</h1>';
            } else {
              $title_start = '<p class="p-header-logo">';
              $title_end =  '</p>';
            }
          ?>
          <?= $title_start; ?>
            <a href="<?= esc_url( home_url('/') ); ?>" class="p-header-logo-link">
              glate Tokyo
            </a>
          <?= $title_end; ?>
          <div class="p-header-sns">
            <?php include(get_template_directory() . '/component/sns.php'); ?>
          </div>
        </div>
        <div class="p-header-nav">
          <?php include(get_template_directory() . '/component/menu.php'); ?>
          <div class="p-header-nav-bg"></div>
        </div>
      </div>
      <div class="p-header-sp">
        <div class="p-header-inner">
          <div class="p-header-btn js-header-btn">
            <span class="p-header-btn-line"></span>
          </div>
          <?= $title_start; ?>
            <a href="<?= esc_url( home_url('/') ); ?>" class="p-header-logo-link">
              glate Tokyo
            </a>
          <?= $title_end; ?>
        </div>
        <div class="p-header-nav">
          <?php include(get_template_directory() . '/component/menu.php'); ?>
          <div class="p-header-sns">
            <?php include(get_template_directory() . '/component/sns.php'); ?>
          </div>
          <div class="p-header-nav-bg"></div>
        </div>
      </div>
    </header>