<?php
require_once 'app/Controller/MySmarty.class.php';
require_once 'app/utility/getTitle.php';
require_once 'app/utility/createPostId.php';
require_once 'app/utility/sessionCreate.php';

// 削除フラグがある場合、削除メッセージを表示
$deletemsg = '';
if ($_SESSION['deleted'] == 'true') {
    $deletemsg = '投稿は削除されました';
};
$_SESSION['deleted'] = 'false';

use app\Controller\MySmarty;

$s = new MySmarty();

$s->assign(
    'agendas',
    $agendas
);
$s->assign(
    'frontValue',
    $frontValue
);

$s->assign('post_id', $post_id);
$s->assign('token', $_SESSION['token']);
$s->assign('deletemsg', $deletemsg);
$s->assign('wifimsg', '下記を入力してください（片方のみ可）');
$s->assign('titleView', 'MokuMokuAppへようこそ');
$s->d();
