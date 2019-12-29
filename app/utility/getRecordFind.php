<!-- id値のレコード取得用 -->
<?php
require_once 'app/Controller/AgendasFindController.class.php';

use app\Controller\AgendasFindController;

// ページネーション用変数の初期化
$current = 0;
$getPaging = [];
$paging = 0;
$findAllCnt = 0;

$agendaFind = new AgendasFindController();

// GETしたレコードの件数を取得する
$agendaFind->setFindAgendas($agendaFind->search, 10);
// GETした検索結果に当てはまるレコードを全て取得
$getRecordFind = $agendaFind->getFindAgendas();
$getPagePrevNext = $agendaFind->getPagePrevNext();
