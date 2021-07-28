<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>東京のジェラート専門店｜TOKYO GELATO</title>
    <?php wp_head(); ?>
</head>

<body id="top" <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php if(is_front_page()): ?>
        <!-- ローディングアニメーション -->
        <div id="la">
            <div class="la_text t_font">
                <span>T</span>
                <span>O</span>
                <span>K</span>
                <span>Y</span>
                <span>O</span>
                <span class="t_wrap">
                    <span>G</span>
                    <span>E</span>
                    <span>L</span>
                    <span>A</span>
                    <span>T</span>
                    <span>O</span>
                </span>
            </div>
        </div>
    <?php endif; ?>

    <!-- ナビゲーションメニュー -->
    <header>
        <div class="nav_btn">
            <span></span>
            <span></span>
        </div>
        <nav class="nav_body t_font">
            <p>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="">
            </p>
            <ul>
                <li><a href="<?php echo home_url('/'); ?>">top</a></li>
                <li><a href="<?php echo home_url('/'); ?>#about">about</a></li>
                <li><a href="<?php echo home_url('/'); ?>#menu">menu</a></li>
                <li><a href="<?php echo home_url('/'); ?>#si">shop info</a></li>
            </ul>
        </nav>
        <div class="circle-bg"></div>
    </header>

    <?php if(is_front_page()): ?>
        <!-- キービジュアル -->
        <div class="key">
            <h1 class="t_font">TOKYO GELATO</h1>
            <div>
                <div class="gelato_slider">
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
                                    <?php
                                        $image = SCF::get('img');
                                        echo wp_get_attachment_image($image,'large');
                                    ?>
                                </a>
                            </li>
                    <?php endwhile;endif; ?>
                    </ul>
                </div>
            </div>
        </div>

        <!-- スクロール -->
        <div class="scroll">
            <p>
                <span>scroll</span>
            </p>
        </div>
    <?php endif; ?>