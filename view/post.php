<?php
require_once 'app/Controller/MySmarty.class.php';
require_once 'app/Controller/AgendasPostController.class.php';
require_once 'app/utility/Agendas.php';

use app\Controller\AgendasPostController;
use app\Controller\MySmarty;

// insert_agendasからユニークなpost_idが正しくidキーで送られていれば、その値を渡す
if (isset($_GET['id'])) {
    $post_id = $_GET['id'];
} else {
    $post_id = null;
}

$s = new MySmarty();
$agendaPost = new AgendasPostController($post_id);

$s->assign('agendas', $agendas);
$s->assign('post', $agendaPost->getPostAgendas());
// 作成時のみ、作成をお知らせするメッセージを追加
session_start();
if ($_SESSION['created']) {
    $s->assign('create', 'もくもく会が作成されました');
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

$s->d();
