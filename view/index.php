<?php
require_once 'app/utility/MySmartyAutoload.php';

$s = new MySmarty();
$s->assign('message', 'MokuMokuApp');
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
$s->assign('wifimsg', '下記を入力してください（片方のみ可）');
$s->assign('leftlogo', '左サイトロゴ');
$s->assign('rightlogo', '右サイトMENU');
$s->d();
