<?php
require_once 'app/Controller/MySmarty.class.php';
require_once 'app/utility/Agendas.php';

use app\Controller\MySmarty;

$s = new MySmarty();

$s->assign(
    'agendas',
    $agendas
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
$s->assign('titleView', 'MokuMokuAppへようこそ');
$s->d();
