<?php
require_once 'app/Controller/MySmarty.class.php';
require_once 'app/utility/getTitle.php';
require_once 'app/utility/getRecord.php';
require_once 'app/utility/sessionDestroy.php';

use app\Controller\MySmarty;

$s = new MySmarty();

// セッションを破棄（作成/更新/削除フラグを空にする）
$_SESSION['created'] = null;
$_SESSION['updated'] = null;
$_SESSION['deleted'] = null;

$s->assign('agendas', $agendas);
$s->assign('post', $getRecord);
$s->assign('create', $created);
$s->assign('update', $updated);

$s->d();
