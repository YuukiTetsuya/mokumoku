<?php
require_once 'app/Controller/MySmarty.class.php';
require_once 'app/utility/getTitle.php';
require_once 'app/utility/getRecord.php';
require_once 'app/utility/sessionDestroy.php';

use app\Controller\MySmarty;

$s = new MySmarty();

// セッションを完全に破棄（作成フラグとtokenを空にする）
sessionDestroy();

$s->assign('agendas', $agendas);
$s->assign('post', $getRecord);
$s->assign('create', $created);
$s->assign('update', $updated);

$s->d();
