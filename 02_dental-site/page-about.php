<?php
/*
Template Name: aboutページ
*/
get_header();

$under_title_en = get_field('under_title_en');
$under_title_ja = get_field('under_title_ja');
$under_title_bg = get_field('under_title_bg');
?>
  <main class="l-main">
    <article class="l-home">
      <div class="p-under-kv">
        <div class="p-under-kv__text">
          <h2 class="p-under-kv__text-item">
            <span class="p-under-kv__text-en"><?= $under_title_en; ?></span>
            <span class="p-under-kv__text-ja"><?= $under_title_ja; ?></span>
          </h2>
        </div>
        <div class="p-under-kv__bg" style="background-image:url('<?= $under_title_bg; ?>');"></div>
      </div>
      <?php
        if( have_rows('about_overview_1') ):
        while( have_rows('about_overview_1') ): the_row();
        $title = get_sub_field('title');
        $text = get_sub_field('text');
        $img = get_sub_field('img');
      ?>
        <section class="p-about-contents">
          <div class="p-about-contents__inner">
            <?php if($title || $text): ?>
              <div class="p-about-contents__text-wrap">
                <h2 class="p-about-contents__title">
                  <?= $title; ?>
                </h2>
                <div class="p-about-contents__text">
                  <?= $text; ?>
                </div>
              </div>
            <?php endif; ?>
            <?php if($img): ?>
              <figure class="p-about-contents__img">
                <img src="<?= $img; ?>" alt="">
              </figure>
            <?php endif; ?>
          </div>
        </section>
      <?php
        endwhile;
        endif;

        if( have_rows('about_overview_2') ):
        while( have_rows('about_overview_2') ): the_row();
        $title = get_sub_field('title');
        $text = get_sub_field('text');
        $img = get_sub_field('img');
      ?>
        <section class="p-about-contents">
          <div class="p-about-contents__inner">
            <?php if($title || $text): ?>
              <div class="p-about-contents__text-wrap">
                <h2 class="p-about-contents__title">
                  <?= $title; ?>
                </h2>
                <div class="p-about-contents__text">
                  <?= $text; ?>
                </div>
              </div>
            <?php endif; ?>
            <?php if($img): ?>
              <figure class="p-about-contents__img">
                <img src="<?= $img; ?>" alt="">
              </figure>
            <?php endif; ?>
          </div>
        </section>
      <?php
        endwhile;
        endif;

        if( have_rows('about_overview_3') ):
        while( have_rows('about_overview_3') ): the_row();
        $title = get_sub_field('title');
        $text = get_sub_field('text');
        $img = get_sub_field('img');
      ?>
        <section class="p-about-contents">
          <div class="p-about-contents__inner">
            <?php if($title || $text): ?>
              <div class="p-about-contents__text-wrap">
                <h2 class="p-about-contents__title">
                  <?= $title; ?>
                </h2>
                <div class="p-about-contents__text">
                  <?= $text; ?>
                </div>
              </div>
            <?php endif; ?>
            <?php if($img): ?>
              <figure class="p-about-contents__img">
                <img src="<?= $img; ?>" alt="">
              </figure>
            <?php endif; ?>
          </div>
        </section>
      <?php
        endwhile;
        endif;

        if( have_rows('about_detail') ):
        while( have_rows('about_detail') ): the_row();
        $title = get_sub_field('title');
        $text = get_sub_field('text');
      ?>
      <section class="p-about-detail">
        <div class="p-about-detail__inner">
          <?php if($title || $text): ?>
            <h2 class="p-about-detail__title">
              <?= $title; ?>
            </h2>
            <div class="p-about-detail__text">
              <?= $text; ?>
            </div>
          <?php endif; ?>
        </div>
      </section>
      <?php
        endwhile;
        endif;
      ?>
    </article>
  </main>
<?php get_footer(); ?>