<?php
require_once 'app/Controller/MySmarty.class.php';
require_once 'app/utility/getTitle.php';
require_once 'app/utility/createPostId.php';
require_once 'app/utility/sessionCreate.php';

use app\Controller\MySmarty;

$s = new MySmarty();

$s->assign(
    'agendas',
    $agendas
);
$s->assign(
    'frontValue',
    $frontValue
);

$s->assign('post_id', $post_id);
$s->assign('token', $_SESSION['token']);
$s->assign('wifimsg', '下記を入力してください（片方のみ可）');
$s->assign('titleView', 'MokuMokuAppへようこそ');
$s->d();
