<!-- header -->
<?php get_header(); ?>

<?php get_template_part('under'); ?>

<div class="cal2">
        <!-- メイン -->
        <main>

            <!-- set price -->
            <div class="set_price" id="set_price">
                <section class="inner">
                    <div>
                        <h2 class="title_3 t_font">
                            set price
                        </h2>
                        <p>
                            いろんなフレーバーを楽しみたい方にお得なセットプライス♪
                        </p>
                        <h3>waffle</h3>
                        <div class="set_waffle">
                            <div>
                                <p>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/w_2flavor.png" alt="2フレーバーワッフル">
                                </p>
                                <dl>
                                    <dt>
                                        2flavor
                                    </dt>
                                    <dd>
                                        650yen
                                    </dd>
                                </dl>
                            </div>
                            <div>
                                <p>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/w_3flavor.png" alt="3フレーバーワッフル">
                                </p>
                                <dl>
                                    <dt>
                                        3flavor
                                    </dt>
                                    <dd>
                                        730yen
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <h3>cup</h3>
                        <div class="set_cup">
                            <div>
                                <p>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/c_2flavor.png" alt="2フレーバーカップ">
                                </p>
                                <dl>
                                    <dt>
                                        2flavor + wafer
                                    </dt>
                                    <dd>
                                        500yen
                                    </dd>
                                </dl>
                            </div>
                            <div>
                                <p>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/c_3flavor.png" alt="3フレーバーカップ">
                                </p>
                                <dl>
                                    <dt>
                                        3flavor + wafer
                                    </dt>
                                    <dd>
                                        650yen
                                    </dd>
                                </dl>
                            </div>
                        </div>
                </section>
            </div>

            <!-- flavor -->
            <div class="flavor" id="flavor">
                <section class="inner">
                    <h2 class="title_3 t_font">
                        flavor
                    </h2>
                    <p>
                        クリックするとフレーバーの詳細をご覧いただけます♪
                    </p>
                    <ul>
                    <?php if(have_posts()):while(have_posts()):the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                                <span><?php the_title(); ?></span>
                                <span><?php echo SCF::get('price'); ?></span>
                            </a>
                        </li>
                    <?php endwhile;endif; ?>
                        <!-- <li>
                            <a href="#">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flavor_02.png" alt="">
                                <span>cafe latte</span>
                                <span>350yen</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flavor_03.png" alt="">
                                <span>vanilla</span>
                                <span>350yen</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flavor_04.png" alt="">
                                <span>宇治抹茶</span>
                                <span>400yen</span>
                            </a>
                        </li> -->
                        <!-- <li>
                            <a href="#">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flavor_05.png" alt="">
                                <span>deepmint</span>
                                <span>450yen</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flavor_06.png" alt="">
                                <span>grape</span>
                                <span>420yen</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flavor_07.png" alt="">
                                <span>mint</span>
                                <span>380yen</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flavor_08.png" alt="">
                                <span>fresh lemon</span>
                                <span>380yen</span>
                            </a>
                        </li> -->
                        <!-- <li>
                            <a href="#">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flavor_09.png" alt="">
                                <span>milk tea</span>
                                <span>420yen</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flavor_10.png" alt="">
                                <span>chocolate</span>
                                <span>400yen</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flavor_11.png" alt="">
                                <span>berry</span>
                                <span>380yen</span>
                            </a>
                        </li> -->
                        <!-- <li>
                            <a href="#">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flavor_12.png" alt="">
                                <span>ラムネ</span>
                                <span>350yen</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flavor_13.png" alt="">
                                <span>黒胡麻</span>
                                <span>380yen</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flavor_14.png" alt="">
                                <span>blood orange</span>
                                <span>400yen</span>
                            </a>
                        </li> -->
                        <!-- <li>
                            <a href="#">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flavor_15.png" alt="">
                                <span>blueberry yogurt</span>
                                <span>450yen</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flavor_16.png" alt="">
                                <span>fresh orange</span>
                                <span>380yen</span>
                            </a>
                        </li> -->
                    </ul>
                </section>
            </div>

            <!-- topping -->
            <div class="topping" id="topping">
                <section class="inner">
                    <h2 class="title_3 t_font">
                        topping
                    </h2>
                    <p>
                        All 50yen♪<br>
                        さまざまなトッピングで見た目も楽しい♪
                    </p>
                    <div>
                        <dl>
                            <dt>pistachio</dt>
                            <dd>
                                テキストテキストテキストテキストテキストテキストテキスト<br>
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            </dd>
                        </dl>
                        <dl>
                            <dt>raspberry crisp</dt>
                            <dd>
                                テキストテキストテキストテキストテキストテキストテキスト<br>
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            </dd>
                        </dl>
                        <dl>
                            <dt>sprinkles</dt>
                            <dd>
                                テキストテキストテキストテキストテキストテキストテキスト<br>
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            </dd>
                        </dl>
                        <dl>
                            <dt>chocolate sauce</dt>
                            <dd>
                                テキストテキストテキストテキストテキストテキストテキスト<br>
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            </dd>
                        </dl>
                        <dl>
                            <dt>OREO</dt>
                            <dd>
                                テキストテキストテキストテキストテキストテキストテキスト<br>
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            </dd>
                        </dl>
                    </div>
                </section>
            </div>

        </main>

        <?php get_template_part('sidebar'); ?>

    </div>

    <!-- footer -->
    <?php get_footer(); ?>