<?php

require_once 'app/Controller/MySmarty.class.php';
require_once 'app/utility/sessionCreate.php';

use app\Controller\MySmarty;

if (isset($_SESSION['createdUser'])) {
    if ($_SESSION['createdUser'] == true) {
        $createUserMsg = '会員登録が完了しました';
    }
}
$_SESSION['createdUser'] = false;

$s = new MySmarty();
$s->assign('titleView', '新規会員登録');
$s->assign('userid', 'ユーザー名');
$s->assign('pass', 'PassWord');
$s->assign('token', $_SESSION['token']);
$s->assign('createUserMsg', $createUserMsg);
$s->d();
