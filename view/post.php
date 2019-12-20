<?php
require_once 'app/utility/MySmartyAutoload.php';
require_once 'app/model/get_agendas.php';

$s = new MySmarty();
$agenda = new Agendas();
$s->assign('create', 'もくもく会が作成されました');
/*
    テンプレート変数$agendas 使い方 二次元配列となっており、下記で出力可
    $agendas.[id番号].[カラム名]
*/
$s->assign('agendas', $agenda->getAgendas());
$s->assign('stylesHeader', '../webroot/css/header.css');
$s->assign('stylesFooter', '../webroot/css/footer.css');
$s->assign('styles', '../webroot/css/styles.css');
$s->assign('js', '../webroot/js/index.js');
$s->d();
