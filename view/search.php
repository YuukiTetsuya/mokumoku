<?php
require_once 'app/Controller/MySmarty.class.php';
require_once 'app/utility/getRecordFind.php';
require_once 'app/utility/getTitle.php';
require_once 'app/utility/sessionCreate.php';
require_once 'app/utility/Encode.php';

use app\Controller\MySmarty;

$findmsg = '';
$keyword = e($_GET['keyword'])."の検索結果";
if ($_SESSION['finded'] == 'true') {
    $findmsg = count($getRecordFind).'件見つかりました';
};


$s = new MySmarty();
$s->assign('agendas', $agendas);
$s->assign('token', $_SESSION['token']);
$s->assign('titleView', $keyword);
$s->assign('findmokumoku', 'もくもく会名で検索');
$s->assign('findAgendas', $getRecordFind);
$s->assign('findmsg', $findmsg);
$s->d();
