<?php

session_start();

$name = isset($_SESSION['name'])?$_SESSION['name']:'';
$tel = isset($_SESSION['tel'])?$_SESSION['tel']:'';
$mail = isset($_SESSION['mail'])?$_SESSION['mail']:'';
$qa = isset($_SESSION['qa'])?$_SESSION['qa']:'';

//自動送信メール設定（お客様用）
$m_title = '【ルコラ音楽教室】お問い合わせありがとうございます。【自動送信メール】';
$m_text = <<<text
※本メールは自動送信メールです。

{$name}　様

この度はルコラ音楽教室ホームページよりお問い合わせ頂きありがとうございます。
確認の上、改めて連絡させて頂きますので今しばらくお待ちください。

以下の内容で送信完了いたしましたのでご確認ください。

＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

お名前：
{$name}　様

お電話番号：
{$tel}

メールアドレス：
{$mail}

お問い合わせ内容：
{$qa}

＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

ご返答に数日いただく場合がございます。
ご了承頂きますようお願いいたします。

以上、何卒よろしくお願いいたします。
*ーーーーーーーーーーーーーーーー
ルコラ音楽教室
〒145-0072
東京都大田区田園調布本町5-14 1F
070-8358-0280
toitoi.luchola0602@gmail.com
ーーーーーーーーーーーーーーーー*
text;
$mymail = 'From:itigo-n.endless@hotmail.co.jp';
mb_language('Japanese');
mb_internal_encoding('UTF-8');
mb_send_mail($mail,$m_title,$m_text,$mymail);

//自動送信メール設定（自分用）
$a_mail = 'itigo-n.endless@hotmail.co.jp';
$a_title = '【アラート】お問い合わせがありました【自動送信メール】';
$a_text = <<<text

ご担当者様

ルコラ音楽教室ホームページよりお問い合わせがありました。
下記ご確認の上、対応頂きますようお願いいたします。

＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

お名前：
{$name}　様

お電話番号：
{$tel}

メールアドレス：
{$mail}

お問い合わせ内容：
{$qa}

＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

以上、よろしくお願いいたします。
text;

mb_language('Japanese');
mb_internal_encoding('UTF-8');
mb_send_mail($a_mail,$a_title,$a_text,$mymail);

header('Location:https://intp.site/415/luchola/contact/thanks.php');

?>