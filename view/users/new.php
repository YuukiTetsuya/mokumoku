<?php

require_once 'app/Controller/MySmarty.class.php';
require_once 'app/utility/sessionCreate.php';

use app\Controller\MySmarty;

$validNew = $_SESSION['new'];

if (isset($_SESSION['createdUser'])) {
    if ($_SESSION['createdUser'] === 'created') {
        $createUserMsg = '会員登録が完了しました';
    } elseif ($_SESSION['createdUser'] === 'nullCreated') {
        $createUserMsg = 'ユーザー名を入力してください';
    } elseif ($_SESSION['createdUser'] === 'overCreated') {
        $createUserMsg = 'ユーザー名は64文字以内にしてください';
    } elseif ($_SESSION['createdUser'] === 'notUnique') {
        $createUserMsg = '同一のユーザー名が存在します';
    }
    if ($_SESSION['createdPass'] === 'nullPass') {
        $createPassMsg = 'パスワードが空です';
    } elseif ($_SESSION['createdPass'] === 'enoughPass') {
        $createPassMsg = 'パスワードは6文字以上を入力してください';
    }
}
$_SESSION['createdUser'] = null;
$_SESSION['createdPass'] = null;

$s = new MySmarty();
$s->assign('titleView', '新規会員登録');
$s->assign('userid', 'ユーザー名');
$s->assign('pass', 'PassWord');
$s->assign('token', $_SESSION['token']);
$s->assign('createUserMsg', $createUserMsg);
$s->assign('createPassMsg', $createPassMsg);
$s->assign('validNew', $validNew);
$s->d();
