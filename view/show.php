<?php
require_once 'app/Controller/MySmarty.class.php';
require_once 'app/utility/getTitle.php';
require_once 'app/utility/getRecord.php';

use app\Controller\MySmarty;

$s = new MySmarty();

// セッションを破棄（作成/更新/削除フラグを空にする）
$_SESSION['created'] = null;
$_SESSION['updated'] = null;
$_SESSION['deleted'] = null;
$_SESSION['validated'] = null;

$s->assign('agendas', $agendas);
$s->assign('post', $getRecord);
$s->assign('create', $created);
$s->assign('update', $updated);
$s->assign('edit', $validatedEdit);
$s->assign('destroy', $validatedDestroy);

// ログインユーザーの投稿のみ編集/削除を表示
if ($getRecord['user_id'] === $_SESSION['currentUser']['user_id']) {
    $s->assign('editmsg', '編集');
    $s->assign('deletemsg', '削除');
}
$s->d();
