<?php
namespace app\model;

require_once 'config.php';
require_once 'app/utility/Encode.php';

use \PDO;
use \PDOException;

class Agendas
{
    // agendasテーブルを降順ソートし、引数に指定した最新○件のレコードを取得する
    public function selectAgendas(int $limit)
    {
        try {
            $db = getDb();
            $stt = $db->prepare('SELECT * FROM agendas ORDER BY id DESC LIMIT :limit');
            $stt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stt->execute();
            $i = 1;
            // agendsテーブルからfetchし、二次元配列[id番号][カラム名]に代入 降順ソート済の為、最新データほど$iの番号が若い
            while ($data = $stt->fetch(PDO::FETCH_ASSOC)) {
                $item[$i]['id'] = e($data['id']);
                $item[$i]['mokumokuname'] = e($data['mokumokuname']);
                $item[$i]['schedule'] = e($data['schedule']);
                $item[$i]['contents'] = e($data['contents']);
                $item[$i]['rule'] = e($data['rule']);
                $item[$i]['ssid'] = e($data['ssid']);
                $item[$i]['pass'] = e($data['pass']);
                $i++;
            };
        } catch (PDOException $e) {
            "エラーが発生しました:{$e->getMessage()}";
        }
        return $item;
    }
}
