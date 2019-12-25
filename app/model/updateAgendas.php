<?php
require_once 'config.php';
require_once 'app/utility/sessionDestroy.php';

// CSRF保護対策
session_start();
if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
    die('不正なアクセスが行われました');
}
// セッションを削除
sessionDestroy();

// post_idが送信されているかどうか確認。なければ空を代入(nullはpost_idには入らないので、例外処理される)
if (isset($_POST['post_id'])) {
    $post_id = $_POST['post_id'];
} else {
    $post_id = null;
}

try {
    // db(PDOオブジェクト)に対し、各カラムにユーザー入力値を挿入する
    $db = getDb();
    $id = null;
    if ($_POST['mokumokuname'] == '') {
        $mokumokuname = null;
        header("location: ../../view/edit.php?id=$post_id");
        die('もくもく会名を入力してください');
    } else {
        $mokumokuname = $_POST['mokumokuname'];
    }
    $stt = $db->prepare('UPDATE agendas SET mokumokuname=:mokumokuname, schedule=:schedule, contents=:contents, rule=:rule, ssid=:ssid, pass=:pass post_id=:post_id WHERE post_id = :post_id');
    $stt->bindValue(':mokumokuname', $mokumokuname, PDO::PARAM_STR);
    $stt->bindValue(':schedule', $_POST['schedule'], PDO::PARAM_STR);
    $stt->bindValue(':contents', $_POST['contents'], PDO::PARAM_STR);
    $stt->bindValue(':rule', $_POST['rule'], PDO::PARAM_STR);
    $stt->bindValue(':ssid', $_POST['ssid'], PDO::PARAM_STR);
    $stt->bindValue(':pass', $_POST['pass'], PDO::PARAM_STR);
    $stt->bindValue(':post_id', $post_id, PDO::PARAM_STR);
    $stt->execute();
} catch (PDOException $e) {
    // エラー時;
    print "エラーが発生しました:{$e->getMessage()}";
}

// 更新時のupdatedをtrueにする
session_start();
$_SESSION['updated'] = true;

header("location: ../../view/post.php?id=$post_id");
