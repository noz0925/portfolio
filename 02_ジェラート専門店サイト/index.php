<!-- header -->
<?php get_header(); ?>

<?php get_template_part('under'); ?>

<div class="cal2">
        <!-- メイン -->
        <main>

            <?php if(have_posts()):while(have_posts()):the_post(); ?>
                <article class="f_area">
                    <p>
                        <?php
                         $image = SCF::get('img');
                         echo wp_get_attachment_image($image,'large');
                         ?>
                    </p>
                    <div class="f_detail">
                        <h1 class="t_font">
                            <?php the_title(); ?>
                        </h1>
                        <dl>
                            <dt>【価格】</dt>
                            <dd><?php echo SCF::get('price'); ?></dd>
                        </dl>
                        <dl>
                            <dt>【内容】</dt>
                            <dd>
                                <?php echo SCF::get('contents'); ?>
                            </dd>
                        </dl>
                        <dl>
                            <dt>【成分】</dt>
                            <dd>
                                <?php echo SCF::get('component'); ?>
                            </dd>
                        </dl>
                    </div>
                </article>
            <?php endwhile;endif; ?>


            <div class="c_flavor">
                <h2 class="title_3 t_font">
                    flavor
                </h2>
                <p>
                    クリックすると他のフレーバーの詳細をご覧いただけます♪
                </p>
                <ul>
                <?php
                    $flavor = new WP_Query([
                        'post_type' => 'post',
                        'posts_per_page' => -1,
                    ]);
                ?>
                <?php if($flavor->have_posts()):while($flavor->have_posts()):$flavor->the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                                <span><?php the_title(); ?></span>
                                <span><?php echo SCF::get('price'); ?></span>
                            </a>
                        </li>
                <?php endwhile;endif; ?>
                </ul>
            </div>



        </main>

        <?php get_template_part('sidebar'); ?>

    </div>


<!-- footer -->
<?php get_footer(); ?>