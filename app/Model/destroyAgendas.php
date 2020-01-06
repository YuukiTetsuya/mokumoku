<?php

require_once 'config.php';
require_once 'app/utility/getRecord.php';

// ログインユーザーの投稿のみ削除可
if ($getRecord['user_id'] !== $_SESSION['currentUser']['user_id']) {
    $_SESSION['validated']['destroy'] = true;
    header("location: ../../view/show.php?id=${getRecord['post_id']}");
    die();
} else {
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
        // 削除された場合に、更新フラグを立てる（deletedをtrueにする）
        $_SESSION['deleted'] = 'true';
        header("location: ../../");
        // トランザクションをコミット
        $db->commit();
    } catch (PDOException $e) {
        // エラー時;
        $db->rollBack();
        print "エラーが発生しました:{$e->getMessage()}";
    }
};
