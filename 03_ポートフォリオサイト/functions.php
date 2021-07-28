<?php

//ファイルの読み込み ---------------------------------
function enqueue_files(){
    //google icon & font の読み込み
    wp_enqueue_style(
        'google_icon',
        'https://fonts.googleapis.com/icon?family=Material+Icons'
    );

    wp_enqueue_style(
        'google_font',
        'https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap'
    );

    //CSSの読み込み
    wp_enqueue_style(
        'css',
        get_stylesheet_directory_uri().'/common/css/style.css',
        array(),
        filemtime(get_theme_file_path('/common/css/style.css'))
    );

    //scriptの読み込み
    wp_enqueue_script(
        'jq',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',
        array(),
        '',
        true
    );

    wp_enqueue_script(
        'main.js',
        get_stylesheet_directory_uri().'/common/js/main.js',
        array(),
        '',
        true
    );
}

add_action('wp_enqueue_scripts','enqueue_files');

//クラス付与 -------------------------------------
function addclass_body(){
    $class = [];

    if(is_front_page()){
        $class = ['home'];
    }

    if(is_singular('post') or is_404()){
        $class = ['works'];
    }

    if(is_page(['contact','check','thanks'])){
        $class = ['contact'];
    }

    return $class;
}

add_action('body_class','addclass_body');

//WPのファビコンを非表示----------------------------------
function favicon_delete(){
    exit;
}
add_action('do_faviconico','favicon_delete');

//ファビコンの読み込み------------------------------------
function favicon(){
    echo '<link rel="shortcut icon" href="'.get_template_directory_uri().'/common/img/favicon.ico" type="image/x-icon"/>'." \n";
}

add_action('wp_head','favicon');

//アイキャッチの有効化ーーーーーーーーーーーーーーーーーーーーーーーーー
if(function_exists('add_theme_support')){
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(250,9999);//アイキャッチ画像のサイズを指定
}

//メールフォームエラーメッセージーーーーーーーーーーーーーーーーーーーー
function error_message($error,$key,$rule){
    if($key === 'name' && $rule === 'noempty'){
        return 'お名前が入力されていません。';
    }
    if($key === 'email' && $rule === 'noempty'){
        return 'メールアドレスが入力されていません。';
    }
    if($key === 'title' && $rule === 'noempty'){
        return '件名が入力されていません。';
    }
    if($key === 'qa' && $rule === 'noempty'){
        return 'お問い合わせ内容が入力されていません。';
    }
    return $error;
}
add_filter('mwform_error_message_mw-wp-form-35','error_message',10,3);