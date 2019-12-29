<?php
require_once 'app/Controller/MySmarty.class.php';
require_once 'app/Controller/AgendasBaseController.class.php';
require_once 'app/utility/getTitle.php';
require_once 'app/utility/sessionCreate.php';

use app\Controller\AgendasBaseController;
use app\Controller\MySmarty;

// ページネーション用変数の初期化
$current = 0;
$getPaging = [];
$paging = 0;

$s = new MySmarty();
$agendaBase = new AgendasBaseController(1);
$agendaBase->setAgendas(1);
$agendaBase->setAgendas(10);

$s->assign('agendas', $agendas);
$s->assign('token', $_SESSION['token']);
$s->assign('titleView', 'もくもくデータベース');
$s->assign('findmokumoku', 'もくもく会名で検索');

/*  テンプレート変数$変数名の使い方 二次元配列となっており、下記で出力可
    $変数名.[id番号].[カラム名] */
$s->assign('tenAgendas', $agendaBase->getTenAgendas());
$s->assign('oneAgendas', $agendaBase->getOneAgendas());
$s->assign('paging', $paging);
$s->assign('getPaging', $agendaBase->getPagePrevNext());
$s->d();
