<?php
require_once 'app/Controller/MySmarty.class.php';
require_once 'app/Controller/AgendasBaseController.class.php';
require_once 'app/utility/Agendas.php';

use app\Controller\AgendasBaseController;
use app\Controller\MySmarty;

$s = new MySmarty();
$agendaBase = new AgendasBaseController(2);

$agendaBase->setAgendas(10);
$agendaBase->setAgendas(1);

$s->assign('agendas', $agendas);
$s->assign('titleView', 'もくもくデータベース');

/*  テンプレート変数$変数名の使い方 二次元配列となっており、下記で出力可
    $変数名.[id番号].[カラム名] */
$s->assign('tenAgendas', $agendaBase->getTenAgendas());
$s->assign('oneAgendas', $agendaBase->getOneAgendas());
$s->d();
