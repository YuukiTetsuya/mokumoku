<?php
require_once './vendor/autoload.php';

$from = 'bdcrew1234@gmail.com';

// 送信設定
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
    ->setUsername($from)
    ->setPassword('gymrgtasuku');

// 送信設定をもとにメール送信のインスタンスを作成
$mailer = new Swift_Mailer($transport);

// メッセージを作成
$message = (new Swift_Message('件名'))
    ->setFrom([$from => '送信者名 (省略可)'])
    ->setTo(['bdcrew1234@gmail.com' => '受信者名 (省略可)'])
    ->setBody("こんにちは!\nこれはテスト送信です。\nTLSで暗号化しています。")
    ->addPart('<p>tttt</p><p>tddttt</p>', 'text/html');
// メールを送信する
if ($mailer->send($message)) {
    echo 'メールを送信しました。';
}