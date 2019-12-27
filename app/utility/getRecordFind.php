<!-- id値のレコード取得用 -->
<?php
require_once 'app/Controller/AgendasFindController.class.php';

use app\Controller\AgendasFindController;

$agendaFind = new AgendasFindController();

// GETしたレコードの件数を取得する
$agendaFind->setFindAgendas($agendaFind->search, 10);
// GETした検索結果に当てはまるレコードを全て取得
$getRecordFind = $agendaFind->getFindAgendas();
