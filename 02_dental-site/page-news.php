<?php
/*
Template Name: newsページ
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

      <section class="p-news">
        <div class="p-news__list">
          <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $the_query = new WP_Query( array(
              'post_status' => 'publish',
              'paged' => $paged,
              'posts_per_page' => 10, // 表示件数
              'orderby'     => 'date',
              'order' => 'DESC'
          ) );
            if($the_query->have_posts()):
            while($the_query->have_posts()):$the_query->the_post();
          ?>
            <dl class="p-news__item">
              <a href="<?php the_permalink(); ?>" class="p-news__link">
                <dt class="p-news__date"><?= the_time('Y年m月d日'); ?></dt>
                <dd><h2><?php the_title(); ?></h2></dd>
              </a>
            </dl>
          <?php
            endwhile;
          ?>
          <div class="c-pagenation">
            <?php 
            if ($the_query->max_num_pages > 1) {
                echo paginate_links(array(
                  'base' => get_pagenum_link(1) . '%_%',
                  'format' => 'page/%#%/',
                  'current' => max(1, $paged),
                  'prev_text' => '<i class="fa-solid fa-angle-left"></i>',
                  'next_text' => '<i class="fa-solid fa-angle-right"></i>',
                  'mid_size' => 1,
                  'total' => $the_query->max_num_pages
                ));
            }
            ;?>
            </div>
          <?php
            else:
          ?>
            <div class="p-news__list-none">
              新着記事が見つかりません。更新まで今しばらくお待ちください。
            </div>
          <?php
            endif;
            wp_reset_postdata();
            wp_reset_query();
          ?>
        </div>
      </section>
    </article>
  </main>
<?php get_footer(); ?>