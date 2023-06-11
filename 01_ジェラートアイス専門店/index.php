<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if( is_home() || is_front_page() ): ?>
    <?php bloginfo('name'); ?>
  <?php else: ?>
    <?php wp_title(); ?>|<?php bloginfo('name'); ?>
  <?php endif; ?>
</head>
<?php wp_head(); ?>

<body <?php body_class(); ?>>
<header class="l-header">
  <div class="p-header">
    <div class="p-header-btn">
      <span class="p-header-btn-line"></span>
    </div>
    <h1 class="p-header-logo">
      <a href="" class="p-header-logo-link">
        glate tokyo
        <img src="" alt="<?php bloginfo('name'); ?>" class="p-header-logo-img">
      </a>
    </h1>
  </div>
</header>
<main class="l-main">
  <div class="p-top-kv">
    <div class="p-top-kv-slide swiper">
      <ul class="p-top-kv-slide-list swiper-wrapper">
        <li class="p-top-kv-slide-item swiper-slide"></li>
      </ul>
    </div>
  </div>
  <?php
    if( have_rows('top_flavor') ):
    while( have_rows('top_flavor') ): the_row();
  ?>
    <section class="p-top-flavor">
      <div class="p-top-flavor-inner">
        <div class="p-top-flavor-content">
          <h2 class="p-top-flavor-heading">
            <div class="p-top-flavor-heading-title-en"><?= get_sub_field('title_en'); ?></div>
            <div class="p-top-flavor-heading-title-ja"></div>
          </h2>
          <div class="p-top-flavor-desc">
            <p class="p-top-flavor-desc-text"></p>
          </div>
        </div>
      </div>
    </section>
  <?php
    endwhile;
    endif;
  ?>
  <section class="p-top-about">
    
  </section>
  <section class="p-top-blog">

  </section>
  <section class="p-top-access">

  </section>
</main>
<footer class="l-footer">

</footer>
</body>
<?php wp_footer(); ?>
</html>