<?php
namespace app\model;

require_once 'config.php';
require_once 'app/utility/Encode.php';

use \PDO;
use \PDOException;

class Agendas
{
    // 投稿されたpost_idを引数で受け取り、該当するレコードを取得する
    public function selectWhereAgendas(string $post_id)
    {
        try {
            $db = getDb();
            $stt = $db->prepare('SELECT * FROM agendas WHERE post_id = :post_id');
            $stt->bindParam(':post_id', $post_id, PDO::PARAM_INT);
            $stt->execute();
            while ($data = $stt->fetch(PDO::FETCH_ASSOC)) {
                $item['id'] = e($data['id']);
                $item['mokumokuname'] = e($data['mokumokuname']);
                $item['schedule'] = e($data['schedule']);
                $item['contents'] = e($data['contents']);
                $item['rule'] = e($data['rule']);
                $item['ssid'] = e($data['ssid']);
                $item['pass'] = e($data['pass']);
                $item['post_id'] = e($data['post_id']);
            };
        } catch (PDOException $e) {
            "エラーが発生しました:{$e->getMessage()}";
        }
        return $item;
    }

    // agendasテーブルを降順ソートし、引数に指定した最新○件のレコードを取得する
    public function selectDescAgendas(int $limit)
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
                $item[$i]['post_id'] = e($data['post_id']);
                $i++;
            };
        } catch (PDOException $e) {
            "エラーが発生しました:{$e->getMessage()}";
        }
        return $item;
    }
}
