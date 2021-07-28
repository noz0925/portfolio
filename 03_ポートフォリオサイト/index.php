<?php get_header(); ?>

<!-- work visual -->
<section class="c-contents p-work-visual">
            <div class="c-contents__inner">
                <div class="c-contents__top p-work-visual__top">
                    <h2 class="c-contents__title p-work-visual__title">
                        <?php the_title(); ?>
                    </h2>
                </div>
                <div class="c-contents__main p-work-visual__main">
                    <figure>
                        <?php
                            $work_img = scf::get('img');
                            echo wp_get_attachment_image($work_img,'large');
                        ?>
                    </figure>
                </div>
                <div class="c-contents__bottom p-work-visual__bottom">
                    <p class="c-btn p-work-visual__btn">
                        <a href="<?php $work_link = scf::get('link'); echo $work_link ?>" target="_blank">
                            サイトを見る
                        </a>
                    </p>
                    <p class="c-btn p-work-visual__btn p-work-visual__btn--github">
                        <a href="<?php $work_link = scf::get('github_link'); echo $work_link ?>" target="_blank">
                            コードを見る
                            <span>(GitHub)</span>
                        </a>
                    </p>
                </div>
            </div>
        </section>

        <!-- 制作概要 -->
        <section class="c-contents p-work-contents">
            <div class="c-contents__inner">
                <div class="c-contents__top p-work-contents__top">
                    <h3 class="c-contents__title p-work-contents__title">
                        制作概要
                    </h3>
                </div>
                <div class="c-contents__main c-contents__text p-work-contents__main">
                    <p class="p-work-contents__text">
                        <?php
                            $work_overview = scf::get('overview');
                            echo nl2br($work_overview);
                        ?>
                    </p>
                    <dl class="p-work-contents__text">
                        <dt>＜デザインに関して＞</dt>
                        <dd>
                            <?php
                                $work_o_design = scf::get('design');
                                echo nl2br($work_o_design);
                            ?>
                        </dd>
                    </dl>
                    <dl class="p-work-contents__text">
                        <dt>＜コーディングに関して＞</dt>
                        <dd>
                            <?php
                                $work_o_coding = scf::get('coding');
                                echo nl2br($work_o_coding);
                            ?>
                        </dd>
                    </dl>
                </div>
            </div>
        </section>

        <!-- 制作期間 -->
        <section class="c-contents p-work-contents">
            <div class="c-contents__inner">
                <div class="c-contents__top p-work-contents__top">
                    <h3 class="c-contents__title p-work-contents__title">
                        制作期間
                    </h3>
                </div>
                <div class="c-contents__main c-contents__text p-work-contents__main">
                    <table class="p-work-contents__table">
                        <tr>
                            <th class="p-work-contents__table--item">
                                デザイン：
                            </th>
                            <td>
                                <?php
                                    $work_p_design = scf::get('period_design');
                                    echo $work_p_design;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th class="p-work-contents__table--item">
                                コーディング：
                            </th>
                            <td>
                                <?php
                                    $work_p_coding = scf::get('period_coding');
                                    echo $work_p_coding;
                                ?>  
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>

        <!-- 使用言語　＆　使用ツール -->
        <section class="c-contents p-work-contents">
            <div class="c-contents__inner">
                <div class="c-contents__top p-work-contents__top">
                    <h3 class="c-contents__title p-work-contents__title">
                        使用言語　＆　使用ツール
                    </h3>
                </div>
                <div class="c-contents__main c-contents__text p-work-contents__main">
                    <?php
                        $work_tools = scf::get('tools');
                        echo nl2br($work_tools);
                    ?>
                </div>
            </div>
        </section>

        <!-- work一覧 -->
        <section class="c-contents p-work-list">
            <div class="c-contents__inner">
                <div class="c-contents__top p-work-list__top">
                    <h3 class="c-contents__title p-work-list__title">
                        work一覧
                    </h3>
                </div>
                <div class="c-contents__main p-work-list__main">
                    <p class="c-contents__text p-work-list__text">
                        クリックすると他のworkの詳細に飛びます。
                    </p>
                    <div class="c-grid__col3">
                        <?php
                            $work = new WP_Query([
                                'post_type' => 'post',
                                'posts_per_page' => -1,
                                'post__not_in' => array($post->ID)
                            ]);
                        ?>
                        <?php if($work->have_posts()):while($work->have_posts()):$work->the_post();?>
                        <div class="p-top-works__item p-work-list__item">
                            <a href="<?php the_permalink(); ?>">
                                <span class="p-top-works__mask">
                                    <?php
                                        $attachment_id = get_post_thumbnail_id($post_id);
                                        $attachment = wp_get_attachment_image_src($attachment_id,'full');
                                        echo '<img src="'.$attachment[0].'"width="100%" height="auto" />';
                                    ?>
                                    <span class="p-top-works__name">
                                        <?php the_title(); ?>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <?php endwhile;endif; ?>
                    </div>
                </div>
            </div>
        </section>

</main>

<?php get_footer(); ?>