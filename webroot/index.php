<?php
require_once 'app/Controler/class/MySmarty.class.php';

$s = new MySmarty();
$s->assign('message', 'MokuMokuApp');
$s->assign('agenda', 'アジェンダ入力');
$s->assign('leftlogo', '左サイトロゴ');
$s->assign('rightlogo', '右サイトMENU');
$s->d();
