<?php
require_once 'config.php';
require_once 'app/utility/Encode.php';

class Agendas
{
    // agendasテーブルを全取得するメソッド
    public function getAllAgendas()
    {
        try {
            $db = getDb();
            $stt = $db->prepare('SELECT * FROM agendas');
            $stt->execute();
            $i = 1;
            // agendsテーブルからfetchし、二次元配列[id番号][カラム名]に代入
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
            // エラー時;
            "エラーが発生しました:{$e->getMessage()}";
        }
        return $item;
    }
}
