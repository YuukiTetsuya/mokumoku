<?php

// require_once 'app/Controller/AgendasEditController.class.php';
require_once 'app/Controller/MySmarty.class.php';
require_once 'app/utility/getTitle.php';
require_once 'app/utility/getRecord.php';

// use app\Controller\AgendasEditController;
use app\Controller\MySmarty;

$s = new MySmarty();

$s->assign('agendas', $agendas);
$s->assign('post', $getRecord);

$s->d();
