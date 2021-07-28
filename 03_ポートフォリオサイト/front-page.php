<?php get_header(); ?>

        <!-- profile -->
        <section class="c-contents p-top-top-profile" id="t-profile">
            <div class="c-contents__inner">
                <div class="c-contents__top js-fade-in">
                    <h2 class="c-contents__title p-top-profile__title">
                        profile
                    </h2>
                </div>
                <div class="c-contents__main c-flex js-fade-in">
                    <figure class="c-contents__img c-flex__box2">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/profile.jpg" alt>
                    </figure>
                    <div class="p-top-profile__contents-wrap c-flex__box2">
                        <dl class="p-top-profile__contents">
                            <dt class="p-top-profile__text--name">
                                兵藤　希
                            </dt>
                            <dd class="c-contents__text">
                                大学卒業後、これまで事務職に従事しておりました。<br>
                                趣味で絵を描いていたところからものづくりを仕事にしたいと考え転職を決意。<br>
                                以前から興味のあったWEBデザインのスキルを習得する為、職業訓練校にてデザインツールやHTML5＆CSS3・Javascript・WordPressを学びました。<br>
                                職業訓練修了後、現在も独学で学習を続けアウトプットしながらWEBデザイナー、コーダーを目指して転職活動中です。
                            </dd>
                        </dl>
                        <dl class="p-top-profile__contents">
                            <dt class="p-top-profile__text--large">
                                資格
                            </dt>
                            <dd class="c-contents__text">
                                2021年4月 Webクリエイター能力認定試験エキスパート合格
                            </dd>
                        </dl>
                        <dl class="p-top-profile__contents">
                            <dt class="p-top-profile__text--large">
                                趣味
                            </dt>
                            <dd class="c-contents__text">
                                絵を描くこと。漫画を読むこと。
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </section>

        <!-- skill -->
        <section class="c-contents p-top-skill" id="t-skill">
            <div class="c-contents__inner">
                <div class="c-contents__top js-fade-in">
                    <h2 class="c-contents__title p-top-skill__title">
                        skill
                    </h2>
                </div>
                <div class="c-contents__main js-fade-in">
                    <ul class="c-contents__text p-top-skill__text">
                        <li>HTML5&CSS3やJavascriptを使用してのサイトコーディング</li>
                        <li>サイトのWordPress実装</li>
                        <li>レスポンシブ対応のWEBサイトデザイン</li>
                    </ul>
                    <div class="p-top-skill__skills-wrap">
                        <h3 class="p-top-skill__subtitle">
                            使用可能言語＆ツール
                        </h3>
                        <div class="p-top-skill__skills c-grid__col4">
                            <figure class="p-top-skill__item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/skill_01.png" alt>
                                <figcaption>HTML5＆CSS3</figcaption>
                            </figure>
                            <figure class="p-top-skill__item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/skill_02.png" alt>
                                <figcaption>SCSS</figcaption>
                            </figure>
                            <figure class="p-top-skill__item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/skill_03.jpg" alt>
                                <figcaption>Javascript(+jQuery)</figcaption>
                            </figure>
                            <figure class="p-top-skill__item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/skill_04.png" alt>
                                <figcaption>WordPress</figcaption>
                            </figure>
                            <figure class="p-top-skill__item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/skill_05.jpg" alt>
                                <figcaption>photoshop</figcaption>
                            </figure>
                            <figure class="p-top-skill__item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/skill_06.jpg" alt>
                                <figcaption>illustrator</figcaption>
                            </figure>
                            <figure class="p-top-skill__item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/skill_07.jpg" alt>
                                <figcaption>XD</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- works -->
        <section class="c-contents p-top-works" id="t-works">
            <div class="c-contents__inner">
                <div class="c-contents__top js-fade-in">
                    <h2 class="c-contents__title p-top-works__title">
                        works
                    </h2>
                </div>
                <div class="c-contents__main c-grid__col3 js-fade-in">
                    <?php
                        $work = new WP_Query([
                            'post_type' => 'post',
                            'posts_per_page' => -1
                        ]);
                    ?>
                    <?php if($work->have_posts()):while($work->have_posts()):$work->the_post(); ?>
                        <div class="p-top-works__item js-work-fade-in">
                            <a href="<?php the_permalink(); ?>">
                                <span class="p-top-works__mask">
                                    <?php
                                        $attachment_id = get_post_thumbnail_id($post_id);
                                        $attachment = wp_get_attachment_image_src($attachment_id,'full');
                                        echo '<img src="'.$attachment[0].'"width="100%" height="auto" />';
                                    ?>
                                    <span class="p-top-works__name"><?php the_title(); ?></span>
                                </span>
                            </a>
                        </div>
                    <?php endwhile;endif; ?>
                </div>
            </div>
        </section>

        <!-- contact -->
        <section class="c-contents p-top-contact" id="t-contact">
            <div class="c-contents__inner">
                <div class="c-contents__top js-fade-in">
                    <h2 class="c-contents__title p-top-contact__title">
                        contact
                    </h2>
                </div>
                <div class="c-contents__main p-top-contact__main js-fade-in">
                    <p class="c-contents__text">
                        お問い合わせはメールフォームからお願いいたします。
                    </p>
                    <p class="c-btn">
                        <a href="<?php echo home_url('/'); ?>contact/">
                            メールフォーム
                        </a>
                    </p>
                </div>
            </div>
        </section>
    </div>

    <?php get_footer(); ?>