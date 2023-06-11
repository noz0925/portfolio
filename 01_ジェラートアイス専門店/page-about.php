<?php
  get_header();

  /*

    Template Name: 当店について

  */

  global $post;
  $page_id = $post->ID;
?>
<div class="l-container-left">
  <main class="l-main is-about">
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
        if( have_rows('about_overview') ):
        while( have_rows('about_overview') ): the_row();
        if(get_sub_field('toggle')):
        
        $about_overview_img = get_sub_field('about_overview_img');
      ?>
        <section class="p-about-overview">
          <div class="p-about-overview-inner">
            <div class="p-about-overview-figure js-left-fade-in">
              <div class="p-about-overview-figure-inner swiper">
                <ul class="p-about-overview-figure-list swiper-wrapper">
                  <li class="p-about-overview-figure-item swiper-slide">
                    <span class="p-about-overview-figure-img pc" style="background-image:url('<?= $about_overview_img['img_pc_1']; ?>');"></span>
                    <span class="p-about-overview-figure-img sp" style="background-image:url('<?= $about_overview_img['img_sp_1']; ?>');"></span>
                  </li>
                  <?php if($about_overview_img['img_pc_2']): ?>
                    <li class="p-about-overview-figure-item swiper-slide">
                      <span class="p-about-overview-figure-img pc" style="background-image:url('<?= $about_overview_img['img_pc_2']; ?>');"></span>
                      <span class="p-about-overview-figure-img sp" style="background-image:url('<?= $about_overview_img['img_sp_2']; ?>');"></span>
                    </li>
                  <?php endif; ?>
                  <?php if($about_overview_img['img_pc_3']): ?>
                    <li class="p-about-overview-figure-item swiper-slide">
                      <span class="p-about-overview-figure-img pc" style="background-image:url('<?= $about_overview_img['img_pc_3']; ?>');"></span>
                      <span class="p-about-overview-figure-img sp" style="background-image:url('<?= $about_overview_img['img_sp_3']; ?>');"></span>
                    </li>
                  <?php endif; ?>
                </ul>
                <div class="p-about-overview-figure-pagination swiper-pagination"></div>
                <div class="p-about-overview-circle">
                  <div class="p-about-overview-circle-inner">
                    <p class="p-about-overview-circle-text"><?= get_sub_field('title_en'); ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-about-overview-content js-right-fade-in">
              <div class="p-about-overview-content-text">
                <?= get_sub_field('text'); ?>
              </div>
            </div>
          </div>
        </section>
      <?php
        endif;
        endwhile;
        endif;
      
        if( have_rows('about_quality') ):
        while( have_rows('about_quality') ): the_row();
        if(get_sub_field('toggle')):
        
        $about_quality_img = get_sub_field('about_quality_img');
      ?>
        <section class="p-about-quality">
          <h2 class="p-about-quality-heading c-top-heading js-bottom-fade-in">
            <span class="p-about-quality-heading-en c-top-heading-en"><?= get_sub_field('title_en'); ?></span>
            <span class="p-about-quality-heading-ja c-top-heading-ja"><?= get_sub_field('title_ja'); ?></span>
          </h2>
          <div class="p-about-quality-content js-bottom-fade-in">
            <div class="p-about-quality-content-figure">
              <img src="<?= $about_quality_img['img_pc_1']; ?>" alt="" class="p-about-quality-content-figure-img pc">
              <img src="<?= $about_quality_img['img_sp_1']; ?>" alt="" class="p-about-quality-content-figure-img sp">
            </div>
            <div class="p-about-quality-content-text">
              <?= get_sub_field('text'); ?>
            </div>
            <div class="p-about-quality-content-figure">
              <img src="<?= $about_quality_img['img_pc_2']; ?>" alt="" class="p-about-quality-content-figure-img pc">
              <img src="<?= $about_quality_img['img_sp_2']; ?>" alt="" class="p-about-quality-content-figure-img sp">
            </div>
            <div class="p-about-quality-content-figure">
              <img src="<?= $about_quality_img['img_pc_3']; ?>" alt="" class="p-about-quality-content-figure-img pc">
              <img src="<?= $about_quality_img['img_sp_3']; ?>" alt="" class="p-about-quality-content-figure-img sp">
            </div>

          </div>
        </section>
      <?php
        endif;
        endwhile;
        endif;
      
        if( have_rows('about_message') ):
        while( have_rows('about_message') ): the_row();
        if(get_sub_field('toggle')):
        
        $about_message_img = get_sub_field('about_message_img');
        $about_message_profile = get_sub_field('about_message_profile');
      ?>
        <section class="p-about-message">
          <div class="p-about-message-inner">
            <div class="p-about-message-top">
              <div class="p-about-message-top-profile js-bottom-fade-in">
                <h2 class="p-about-message-top-heading c-top-heading">
                  <span class="p-about-message-top-heading-en c-top-heading-en"><?= get_sub_field('title_en'); ?></span>
                  <span class="p-about-message-top-heading-ja c-top-heading-ja"><?= get_sub_field('title_ja'); ?></span>
                </h2>
                <div class="p-about-message-top-profile-content">
                  <p class="p-about-message-top-profile-position"><?= $about_message_profile['position']; ?></p>
                  <p class="p-about-message-top-profile-name"><?= $about_message_profile['name']; ?></p>
                  <p class="p-about-message-top-profile-career-text"><?= $about_message_profile['career_text']; ?></p>
                </div>
              </div>
              <div class="p-about-message-top-figure js-left-fade-in">
                <img class="p-about-message-top-figure-img pc" src="<?= $about_message_img['img_pc']; ?>" alt="">
                <img class="p-about-message-top-figure-img sp" src="<?= $about_message_img['img_sp']; ?>" alt="">
              </div>
            </div>
            <div class="p-about-message-bottom js-right-fade-in">
              <p class="p-about-message-bottom-text"><?= $about_message_profile['massage_text']; ?></p>
            </div>
          </div>
        </section>
      <?php
        endif;
        endwhile;
        endif;
      ?>
    </div>
  </main>
</div>
<?php get_footer(); ?>