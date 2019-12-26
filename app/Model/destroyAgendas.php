<?php
require_once 'config.php';

session_start();
// CSRF保護対策
// if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
//     die('不正なアクセスが行われました');
// }

// post_idが送信されているかどうか確認。なければ空を代入(nullはpost_idには入らないので、例外処理される)
if (isset($_GET['id'])) {
    $post_id = $_GET['id'];
} else {
    $post_id = null;
}

try {
    // db(PDOオブジェクト)に対し、各カラムにユーザー入力値を挿入する
    $db = getDb();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // トランザクション開始
    $db->beginTransaction();
    $stt = $db->prepare('DELETE FROM agendas WHERE post_id = :post_id');
    $stt->bindParam(':post_id', $post_id, PDO::PARAM_STR);
    $stt->execute();
    // トランザクションをコミット
    $db->commit();
} catch (PDOException $e) {
    // エラー時;
    $db->rollBack();
    print "エラーが発生しました:{$e->getMessage()}";
}
    // 削除された場合に、更新フラグを立てる（deletedをtrueにする）
    $_SESSION['deleted'] = 'true';

header("location: ../../");
