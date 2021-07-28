<?php

session_start();

$_SESSION = [];

$name = htmlspecialchars($_POST['name']);
$tel = htmlspecialchars($_POST['tel']);
$mail = htmlspecialchars($_POST['mail']);
$qa = htmlspecialchars($_POST['qa']);

$_SESSION['name'] = $name;
$_SESSION['tel'] = $tel;
$_SESSION['mail'] = $mail;
$_SESSION['qa'] = $qa;

$flg=0;

if(empty($name)){
    $flg=1;
    $_SESSION['name_error'] = 'お名前が未入力です。';
}
if(empty($mail)){
    $flg=1;
    $_SESSION['mail_error'] = 'メールアドレスが未入力です。';
}
if(empty($qa)){
    $flg=1;
    $_SESSION['qa_error'] = 'お問い合わせ内容が未入力です。';
}

if($flg){
    $_SESSION['error'] = '※※※※※エラーが発生しました。入力内容をご確認ください※※※※※';
    header('Location:'.$_SERVER['HTTP_REFERER']);
}

?>


<!DOCTYPE html>
<html lang="ja">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>田園調布の音楽教室♪｜ルコラ音楽教室</title>
    <link rel="stylesheet" href="../css/common/reset.css">
    <link rel="stylesheet" href="../css/common/common.css">
    <link rel="stylesheet" href="../css/common/under.css">
    <link rel="stylesheet" href="../css/asset/animation.css">
    <link rel="stylesheet" href="../css/page/contact.css">
    <link rel="icon" type="image/x-icon" href="img/logo_160x160.png">
</head>


<body id="top" class="contact_c">


    <!-- ヘッダー -->
    <header>
        <div class="h_wrap">
            <div class="inner">
                <div class="header_logo">
                    <p>
                        <a href="../"><img src="../img/logo.png" alt="ルコラ音楽教室"></a>
                    </p>
                </div>
                <div class="nav_btn">
                    <p>
                        <span></span>
                        <span></span>
                        <span></span>
                    </p>
                    <p>
                        <span>MENU</span>
                    </p>
                </div>
                <nav>
                    <div class="nav_body">
                        <ul>
                            <li><a href="../lesson/">レッスン</a></li>
                            <li><a href="../teacher/">講師紹介</a></li>
                            <li><a href="../access/">アクセス</a></li>
                            <li><a href="#" target="_blank">レッスン生専用</a></li>
                            <li><a href="./">お問い合わせ</a></li>
                        </ul>
                        <div class="sns">
                            <p>
                                <a href="https://lineblog.me/luchola_0602/" target="_blank">
                                    LINE BLOG
                                </a>
                            </p>
                            <p>
                                <a href="https://www.instagram.com/luchola0602/" target="_blank">
                                    instagram
                                </a>
                            </p>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>


    <!-- under title -->
    <div class="u_t"></div>


    <!-- メイン -->
    <main>
        <div class="c_overview">
            <section class="inner">
                <h1 class="title01">お問い合わせ</h1>
                <p>
                    入力事項をご確認の上「送信する」ボタンをクリックしてください。<br>
                    ※ご返答に数日かかる場合がございます。お急ぎの方は、お電話よりご連絡ください。
                </p>
            </section>
        </div>
        <div class="c_flow">
            <div class="inner">
                <ul>
                    <li>1.入力</li>
                    <li class="current">2.確認</li>
                    <li>3.送信</li>
                </ul>
            </div>
        </div>
        <div class="c_form">
            <div class="inner">
                    <dl>
                        <dt>
                            <label for="name">お名前</label>
                        </dt>
                        <dd>
                            <?php echo $name; ?>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            <label for="tel">電話番号</label>
                        </dt>
                        <dd>
                            <?php echo $tel; ?>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            <label for="mail">メールアドレス</label>
                        </dt>
                        <dd>
                            <?php echo $mail; ?>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            <label for="qa">お問い合わせ内容</label>
                        </dt>
                        <dd>
                            <?php echo $qa; ?>
                        </dd>
                    </dl>
                    <div class="btn_wrap">
                        <?php if($flg == 1): ?>
                            <p class="btn back">
                                <a href="./">戻る</a>
                            </p>
                        <?php else: ?>
                            <p class="btn back">
                                <a href="index.php">戻る</a>
                            </p>
                            <p class="btn">
                                <a href="send.php">送信する</a>
                            </p>
                        <?php endif; ?>
                    </div>
            </div>
        </div>
    </main>


    <!-- フッター -->
    <footer>
        <div class="f_wrap">
            <div class="inner w300">
                <div class="f_w_w">
                    <div class="f_left">
                        <div class="f_l_w">
                            <div class="f_logo">
                                <p>
                                    <img src="../img/logo.png" alt="フッターロゴ">
                                </p>
                            </div>
                            <div class="f_sns">
                                <p>
                                    <a href="https://www.instagram.com/luchola0602/" target="_blank">
                                        <img src="../img/insta_icon_c.png" alt="フッター_instagram">
                                    </a>
                                </p>
                                <p class="l_b">
                                    <span class="text">
                                        <a href="https://lineblog.me/luchola_0602/" target="_blank">
                                            LINE BLOG
                                        </a>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="f_address">
                            <address>
                                <dl>
                                    <dt>〒145-0072</dt><span></span>
                                    <dd>東京都大田区田園調布本町5-14 1F
                                        <span class="text">
                                            （<a href="https://goo.gl/maps/s6Ac2b1dUorMWTYQ7" target="_blank">地図を開く</a>）
                                        </span>
                                    </dd>
                                    <dd>東急池上線　御嶽山駅から徒歩7分</dd>
                                </dl>
                            </address>
                        </div>
                    </div>
                    <div class="f_right">
                        <div class="f_contact">
                            <p>お問い合わせ先▼</p>
                            <p>☎︎070-8358-0280</p>
                            <p>受付時間：月〜土　10：00〜20：00</p>
                            <p>
                                <a href="#">問い合わせメールフォーム</a>
                            </p>
                        </div>
                        <div class="f_nav">
                            <ul>
                                <li><a href="../lesson/">レッスン</a></li>
                                <li><a href="../teacher/">講師紹介</a></li>
                                <li><a href="../access/">アクセス</a></li>
                                <li><a href="#" target="_blank">レッスン生専用</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="f_copy">
                    <small>&copy;luchola music school</small>
                </p>
            </div>
        </div>
    </footer>


    <!-- script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../js/under.js"></script>
</body>

</html>