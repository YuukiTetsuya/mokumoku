<?php
require_once 'app/Controller/MySmarty.class.php';

use app\Controller\MySmarty;

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
$s->d();
