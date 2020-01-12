<?php
require_once 'app/Controller/MySmarty.class.php';
require_once 'app/utility/getRecordFind.php';
require_once 'app/utility/getTitle.php';
require_once 'app/utility/sessionCreate.php';
require_once 'app/utility/Encode.php';

use app\Controller\MySmarty;

// 検索メッセージの初期化
$findmsg = '';
$query = e($_GET['q']);
if ($_SESSION['finded'] == 'true') {
    if ($findAllCnt >= 1) {
        $findmsg = 'の検索結果　'.$findAllCnt.'件見つかりました';
    } else {
        $findmsg = 'の検索結果は見つかりませんでした';
    }
};

$s = new MySmarty();
$s->assign('agendas', $agendas);
$s->assign('token', $_SESSION['token']);
$s->assign('titleView', $query);
$s->assign('findmokumoku', 'もくもく会名で検索');
$s->assign('findAgendas', $getRecordFind);
$s->assign('findmsg', $findmsg);
$s->assign('paging', $paging);
$s->assign('getPaging', $getPagePrevNext);
$s->d();
