<?php
require_once 'app/Controller/MySmarty.class.php';
require_once 'app/utility/sessionCreate.php';

use app\Controller\MySmarty;

$s = new MySmarty();
$s->assign('titleView', '新規会員登録');
$s->assign('userid', 'ユーザー名');
$s->assign('pass', 'PassWord');
$s->assign('rightmenu', 'ログイン');
$s->d();
