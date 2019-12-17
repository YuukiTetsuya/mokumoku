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
        'ssi    d' => 'SSID',
        'pass' => 'PASS',
    ]
);
$s->assign('leftlogo', '左サイトロゴ');
$s->assign('rightlogo', '右サイトMENU');
$s->d();
