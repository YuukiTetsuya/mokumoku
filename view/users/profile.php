<?php
require_once 'app/Controller/MySmarty.class.php';
require_once 'app/utility/Encode.php';
require_once 'app/utility/sessionCreate.php';

use app\Controller\MySmarty;

// ログイン時のメッセージを記憶
if (isset($_SESSION['login'])) {
    $loginFlg = e($_SESSION['login']['logined']);
} elseif (isset($_SESSION['logout'])) {
    $loginFlg = e($_SESSION['logout']['logouted']);
}
$_SESSION['login'] = null;
$_SESSION['logout'] = null;

$s = new MySmarty();

$s->assign('titleView', 'プロフィール');
$s->assign('userid', 'ユーザー名');
$s->assign('loginTime', '最新ログイン日時');
$s->assign('logoutTime', '最新ログアウト日時');
$s->assign('pass', 'PassWord');
$s->assign('token', $_SESSION['token']);
$s->assign('loginFlg', $loginFlg);
$s->d();
