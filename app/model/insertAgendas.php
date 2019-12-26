<?php
require_once 'config.php';

session_start();
// CSRF保護対策
if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
    die('不正なアクセスが行われました');
}

// post_idが送信されているかどうか確認。なければ空を代入(nullはpost_idには入らないので、例外処理される)
if (isset($_POST['post_id'])) {
    $post_id = $_POST['post_id'];
} else {
    $post_id = null;
}

try {
    // db(PDOオブジェクト)に対し、各カラムにユーザー入力値を挿入する
    $db = getDb();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // トランザクション開始
    $db->beginTransaction();
    $id = null;
    if ($_POST['mokumokuname'] == '') {
        $mokumokuname = null;
        header("location: ../../");
        die('もくもく会名を入力してください');
    } else {
        $mokumokuname = $_POST['mokumokuname'];
    }
    $stt = $db->prepare('INSERT INTO agendas(id, mokumokuname, schedule, contents, rule, ssid, pass, post_id) VALUES(:id, :mokumokuname, :schedule, :contents, :rule, :ssid, :pass, :post_id)');
    $stt->bindParam(':id', $id, PDO::PARAM_INT);
    $stt->bindParam(':mokumokuname', $mokumokuname, PDO::PARAM_STR);
    $stt->bindParam(':schedule', $_POST['schedule'], PDO::PARAM_STR);
    $stt->bindParam(':contents', $_POST['contents'], PDO::PARAM_STR);
    $stt->bindParam(':rule', $_POST['rule'], PDO::PARAM_STR);
    $stt->bindParam(':ssid', $_POST['ssid'], PDO::PARAM_STR);
    $stt->bindParam(':pass', $_POST['pass'], PDO::PARAM_STR);
    $stt->bindParam(':post_id', $post_id, PDO::PARAM_STR);
    $stt->execute();
    // トランザクション終了
    $db->commit();
} catch (PDOException $e) {
    // エラー時;
    $db->rollBack();
    print "エラーが発生しました:{$e->getMessage()}";
}

// 作成時のみ作成フラグを立てる（createdをtrueにする）
$_SESSION['created'] = true;

header("location: ../../view/show.php?id=$post_id");
