<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N.work</title>
    <?php wp_head(); ?>
</head>

<body id="top" <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- ヘッダー -->
    <header class="l-header js-header-hide js-header-fade-in">
        <div class="l-header__inner">
            <div class="l-header__logo">
                <h1 class="l-header__img">
                    <a href="<?php echo home_url('/'); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/logo.png" alt="N.work">
                    </a>
                </h1>
            </div>
            <div class="l-header__btn js-btn-trigger">
                <span class="l-header__line">
                    <span></span>
                </span>
            </div>
            <nav class="l-header__nav js-btn-trigger">
                <ul class="l-header__nav--inner">
                    <li class="l-header__nav--item"><a href="<?php echo home_url('/'); ?>#t-profile">profile</a></li>
                    <li class="l-header__nav--item"><a href="<?php echo home_url('/'); ?>#t-skill">skill</a></li>
                    <li class="l-header__nav--item"><a href="<?php echo home_url('/'); ?>#t-works">works</a></li>
                    <li class="l-header__nav--item"><a href="<?php echo home_url('/'); ?>#t-contact">contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- メイン -->
    <main class="l-main-container js-main-fade-in">

    <?php if(is_front_page()): ?>
        <!-- キービジュアル -->
        <div class="p-key-visual js-visual-fade-in">
            <div class="p-key-visual__inner">
                <div class="p-key-visual__table">
                    <p class="p-key-visual__text">
                        Nozomi Hyodo's Portfolio
                    </p>
                </div>
            </div>
        </div>

        <!-- スクロール -->
        <div class="p-scroll">
            <p class="p-scroll__inner">
                <span class="p-scroll__text">scroll</span>
            </p>
        </div>
    <?php endif; ?>