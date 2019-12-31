<?php
require_once 'app/Controller/MySmarty.class.php';
require_once 'app/utility/sessionCreate.php';
require_once 'app/utility/Encode.php';

use app\Controller\MySmarty;

// ログイン時のメッセージを記憶
if (isset($_SESSION['login'])) {
    $logined = e($_SESSION['login']['logined']);
    $useridNo =  e($_SESSION['login']['useridNo']);
    $passwordNo = e($_SESSION['login']['passwordNo']);
}
$_SESSION['login'] = null;

$s = new MySmarty();
$s->assign('titleView', 'ログイン');
$s->assign('userid', 'ユーザー名');
$s->assign('pass', 'PassWord');
$s->assign('token', $_SESSION['token']);
$s->assign('logined', $logined);
$s->assign('useridNo', $useridNo);
$s->assign('passwordNo', $passwordNo);
$s->d();
