<?php
namespace app\Controller;

require_once 'app/Model/Agendas.class.php';
require_once 'app/utility/Encode.php';
require_once 'app/utility/sessionDestroy.php';

use app\Model\Agendas;

// ユーザが投稿したidに対応するレコードを返すコントローラ
class AgendasPostController extends Agendas
{
    private $post = 0;
    public $post_id = 0;

    public function __construct()
    {
        // insertAgendasからユニークなpost_idが正しくidキーで送られていれば、その値を渡す
        if (isset(($_GET['id']))) {
            $this->post_id = e($_GET['id']);
        } else {
            $this->post_id = null;
        };
    }

    public function setPostAgendas($param)
    {
        $this->post = parent::selectWhereAgendas($param);
    }

    public function getPostAgendas()
    {
        session_start();
        // 作成時のみ、作成をお知らせするメッセージを追加
        if ($_SESSION['created'] == 'true') {
            global $created;
            $created = 'もくもく会が作成されました';
        };
        // 更新時のみ、更新をお知らせするメッセージを追加
        if ($_SESSION['updated'] == 'true') {
            global $updated;
            $updated = 'もくもく会が更新されました';
        };
        // セッションを破棄する
        sessionDestroy();

        // GETしたidと同じpost_idのレコードを返す
        return $this->post;
    }
}
