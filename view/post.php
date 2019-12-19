<?php
require_once 'app/utility/MySmartyAutoload.php';
require_once 'app/model/get_agendas.php';

$s = new MySmarty();
$get = new getAllAgendas();
$s->assign('create', 'もくもく会が作成されました');
/*
    テンプレート変数$agendas 使い方 二次元配列となっており、下記で出力可
    $agendas.[id番号].[カラム名]
*/
$s->assign('agendas', $get->getAgendas());
$s->assign('stylesHeader', '../webroot/css/header.css');
$s->assign('styles', '../webroot/css/styles.css');

$s->d();
