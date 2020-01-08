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
    if ($_POST['mokumokuname'] == '') {
        $mokumokuname = null;
        header("location: ../../view/edit?id=$post_id");
        die('もくもく会名を入力してください');
    } else {
        $mokumokuname = $_POST['mokumokuname'];
    }
    $stt = $db->prepare('UPDATE agendas SET mokumokuname=:mokumokuname, schedule=:schedule, contents=:contents, rule=:rule, ssid=:ssid, pass=:pass, post_id=:post_id WHERE post_id = :post_id');
    $stt->bindParam(':mokumokuname', $mokumokuname, PDO::PARAM_STR);
    $stt->bindParam(':schedule', $_POST['schedule'], PDO::PARAM_STR);
    $stt->bindParam(':contents', $_POST['contents'], PDO::PARAM_STR);
    $stt->bindParam(':rule', $_POST['rule'], PDO::PARAM_STR);
    $stt->bindParam(':ssid', $_POST['ssid'], PDO::PARAM_STR);
    $stt->bindParam(':pass', $_POST['pass'], PDO::PARAM_STR);
    $stt->bindParam(':post_id', $post_id, PDO::PARAM_STR);
    // 更新された場合に、更新フラグを立てる（updatedをtrueにする）
    $_SESSION['updated'] = true;
    $stt->execute();
    // トランザクションをコミット
    $db->commit();
} catch (PDOException $e) {
    // エラー時;
    $db->rollBack();
    print "エラーが発生しました:{$e->getMessage()}";
}

header("location: ../../view/show?id=$post_id");
