<?php
require_once 'app/utility/MySmartyAutoload.php';

$s = new MySmarty();
$s->assign(
    'agendas',
    [
        'title' => 'もくもく会概要',
        'mokumokuname' => 'もくもく会名',
        'schedule' => 'タイムスケジュール',
        'contents' => 'コンテンツ',
        'rule' => 'ルール',
        'wifi' => 'WiFi情報',
        'ssid' => 'SSID',
        'pass' => 'PASS',
    ]
);
$s->assign(
    'frontValue',
    [
        'mokumokuname' => '例：まったりもくもく会',
        'schedule' => '13:00〜18:00',
        'contents' => 'アイスブレイクあります',
        'rule' => '迷惑行為禁止',
        'ssid' => 'mokumokuwifi',
        'pass' => 'moku-123',
]
);
$s->assign('wifimsg', '下記を入力してください（片方のみ可）');
$url = $_SERVER['REQUEST_URI'];
if ($url == '/mokumoku/') {
    $s->assign('stylesHeaderIndex', 'webroot/css/header.css');
    $s->assign('stylesFooterIndex', 'webroot/css/footer.css');
    $s->assign('stylesIndex', 'webroot/css/styles.css');
    $s->assign('slickIndex', 'webroot/css/slick.css');
    $s->assign('jsIndex', 'webroot/js/index.js');
    $s->assign('jsSlickIndex', 'webroot/js/slick.js');
} else {
    $s->assign('stylesHeader', '../webroot/css/header.css');
    $s->assign('stylesFooter', '../webroot/css/footer.css');
    $s->assign('styles', '../webroot/css/styles.css');
    $s->assign('js', '../webroot/js/index.js');
    $s->assign('jsSlick', '../webroot/js/slick.js');
}
$s->d();
