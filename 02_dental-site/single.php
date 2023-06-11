<?php 
  get_header();

  $page_slug = get_page_by_path('news');
  $page_id = $page_slug -> ID;
  $under_title_en = get_field('under_title_en', $page_id);
  $under_title_ja = get_field('under_title_ja', $page_id);
  $under_title_bg = get_field('under_title_bg', $page_id);
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
        if(have_posts()):
        while (have_posts()) : the_post();
        $post = get_field('post');
      ?>
      <section class="p-news-post">
        <div class="p-news-post__inner">
          <div class="p-news-post__head">
            <span class="p-news-post__date"><?= the_time('Y年m月d日'); ?></span>
            <h2 class="p-news-post__title"><?= $post['post_title']; ?></h2>
          </div>
          <div class="p-news-post__contents">
            <p class="p-news-post__text"><?= $post['post_text_1']; ?></p>
              <figure class="p-news-post__figure">
                <img src="<?= $post['post_img']; ?>" alt="" class="p-news-post__img">
              </figure>
            <p class="p-news-post__text"><?= $post['post_text_2']; ?></p>
          </div>
          <p class="c-btn p-news-post__btn">
            <a href="<?= esc_url(home_url('/news/')); ?>" class="c-btn__link p-news-post__link">
              <span class="c-btn__text p-news-post__link-text">一覧に戻る</span>
            </a>
          </p>
        </div>
      </section>
      <?php
        endwhile;
        endif;
      ?>
    </article>
  </main>
<?php get_footer(); ?>