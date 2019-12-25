<?php
namespace app\Controller;

require_once 'app/Model/Agendas.class.php';
require_once 'app/utility/Encode.php';


use app\Model\Agendas;

// ユーザが投稿したidに対応するレコードを返すコントローラ
class AgendasPostController extends Agendas
{
    private $post = 0;
    public $post_id = 0;

    public function __construct()
    {
        // insert_agendasからユニークなpost_idが正しくidキーで送られていれば、その値を渡す
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
        // 作成時のみ、作成をお知らせするメッセージを追加
        session_start();
        if ($_SESSION['created']) {
            global $created;
            $created = 'もくもく会が作成されました';
        };
        // セッション変数とセッションクッキー（ID受け渡しのためのクッキー）とセッション自体を破棄する
        $_SESSION = [];
        if (isset($_COOKIE[session_name()])) {
            $cparam = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 3600,
                $cparam['path'],
                $cparam['domain'],
                $cparam['secure'],
                $cparam['httponly']
            );
        };
        session_destroy();
        // GETしたidと同じpost_idのレコードを返す
        return $this->post;
    }
}
