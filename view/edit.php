<?php

require_once 'app/Controller/MySmarty.class.php';
require_once 'app/utility/getTitle.php';
require_once 'app/utility/getRecord.php';
require_once 'app/utility/sessionCreate.php';

// use app\Controller\AgendasEditController;
use app\Controller\MySmarty;

$s = new MySmarty();

if ($getRecord['user_id'] !== $_SESSION['currentUser']['user_id']) {
    $_SESSION['validated']['edit'] = true;
    header("location: show?id=${getRecord['post_id']}");
};

$s->assign('token', $_SESSION['token']);
$s->assign('agendas', $agendas);
$s->assign('post', $getRecord);
$s->assign('wifimsg', '下記を入力してください（片方のみ可）');
$s->d();
