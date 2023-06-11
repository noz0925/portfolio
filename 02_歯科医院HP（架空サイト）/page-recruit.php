<?php
/*
Template Name: recruitページ
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
      $recruit_overview = get_field('recruit_overview');
      ?>
        <section class="p-recruit__overview">
          <div class="p-recruit__overview-inner">
            <div class="p-recruit__overview-text">
              <p class="p-recruit__overview-text-large"><?= $recruit_overview['recruit_overview_text_large']; ?></p>
              <p class="p-recruit__overview-text-small"><?= $recruit_overview['recruit_overview_text_small']; ?></p>
            </div>
            <?php if($recruit_overview['recruit_overview_img']): ?>
              <figure class="p-recruit__overview-figure">
                <img src="<?= $recruit_overview['recruit_overview_img']; ?>" alt="" class="p-recruit __overview-img">
              </figure>
            <?php endif; ?>
          </div>
        </section>
      <?php
        $args = array(
          'post_type' => 'recruit_post',
          'posts_per_page' => -1
        );
        $wp_query = new WP_Query($args);
        if(have_posts()):
      ?>
        <section class="p-recruit__info">
          <div class="p-recruit__info-inner">
            <div class="p-recruit__info-tab">
              <ul class="p-recruit__info-tab-list">
                <?php
                  $count_tab = 1;
                  while(have_posts()):the_post();
                  $recruit_detail = get_field('recruit_detail');
                ?>
                  <li class="p-recruit__info-tab-item">
                    <a href="#sec_<?= $count_tab; ?>" class="p-recruit__info-tab-item-link"><?= $recruit_detail['recruit_name']; ?></a>
                  </li>
                <?php
                  $count_tab++;
                  endwhile;
                ?>
              </ul>
            </div>
            <div class="p-recruit__info-main">
              <ul class="p-recruit__info-main-list">
                <?php
                  $count_main = 1;
                  while(have_posts()):the_post();
                  $recruit_detail = get_field('recruit_detail');
                ?>
                  <li class="p-recruit__info-main-item" id="sec_<?= $count_main; ?>">
                    <div class="p-recruit__info-main-head">
                      <h3 class="p-recruit__info-main-title">
                        <span class="p-recruit__info-main-title-text"><?= $recruit_detail['recruit_name']; ?></span>
                      </h3>
                      <p class="p-recruit__info-main-desc"><?= $recruit_detail['recruit_desc']; ?></p>
                    </div>
                    <table class="p-recruit__info-main-table">
                      <tr class="p-recruit__info-main-tr">
                        <th class="p-recruit__info-main-th">雇用形態</th>
                        <td class="p-recruit__info-main-td"><?= $recruit_detail['recruit_status']; ?></td>
                      </tr>
                      <tr class="p-recruit__info-main-tr">
                        <th class="p-recruit__info-main-th">勤務時間</th>
                        <td class="p-recruit__info-main-td"><?= $recruit_detail['recruit_time']; ?></td>
                      </tr>
                      <tr class="p-recruit__info-main-tr">
                        <th class="p-recruit__info-main-th">休日休暇</th></th>
                        <td class="p-recruit__info-main-td"><?= $recruit_detail['recruit_holiday']; ?></td>
                      </tr>
                      <tr class="p-recruit__info-main-tr">
                        <th class="p-recruit__info-main-th">給与</th>
                        <td class="p-recruit__info-main-td"><?= $recruit_detail['recruit_salary']; ?></td>
                      </tr>
                      <tr class="p-recruit__info-main-tr">
                        <th class="p-recruit__info-main-th">待遇</th>
                        <td class="p-recruit__info-main-td"><?= $recruit_detail['recruit_ treatment']; ?></td>
                      </tr>
                    </table>
                  </li>
                <?php
                  $count_main++;
                  endwhile;
                ?>
              </ul>
            </div>
          </div>
        </section>
        <?php
          endif;
          wp_reset_postdata();
          wp_reset_query();
        ?>
        <?php echo do_shortcode('[mwform_formkey key="348"]'); ?>
    </article>
  </main>
<?php get_footer(); ?>