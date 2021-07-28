<?php

//cssの有効化ーーーーーーーーーーーーーーーーーーーーー
//フックになる関数を定義
function tg_enqueue(){

    //google icon fontのcss読み込み
    wp_enqueue_style(
        'google_font',
        'https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@500&display=swap'
    );

    //css読み込み
    wp_enqueue_style(
        'css',
        get_stylesheet_directory_uri().'/css/style.min.css',
        array(),
        filemtime(get_theme_file_path('/css/style.min.css'))
    );

    //jq読み込み
    wp_enqueue_script(
        'google_cdn_jq',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
        array(),
        '',
        true
    );

    //main.js
    wp_enqueue_script(
        'tg_main_js',
        get_stylesheet_directory_uri().'/js/main.js',
        array(),
        '',
        true
    );
}

add_action('wp_enqueue_scripts','tg_enqueue');

//bodyにクラスを追加するーーーーーーーーーーーーーーーー
function addclass_body(){
    $class = [];

    if(is_front_page()){
        $class = ['top'];
    }

    if(is_home() or is_singular('post') or is_404()){
        $class = ['menu'];
    }

    return $class;
}

add_action('body_class','addclass_body');

//scssのコンパイル有効化ーーーーーーーーーーーーーーーー
define('WP_SCSS_ALWAYS_RECOMPILE',true);

//アイキャッチを有効化ーーーーーーーーーーーーーーーーーー
add_theme_support('post-thumbnails');