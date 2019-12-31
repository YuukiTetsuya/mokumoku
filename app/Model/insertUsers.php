<?php
require_once 'config.php';
require_once 'app/utility/createUserId.php';

session_start();
// CSRF保護対策
if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
    die('不正なアクセスが行われました');
}

try {
    // db(PDOオブジェクト)に対し、ユーザーidとパスワードを挿入する
    $db = getDb();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // トランザクション開始
    $db->beginTransaction();
    $userid = $_POST['userid'];
    $id = null;
    $stt = $db->prepare('INSERT INTO users(id, user_id, password) VALUES(:id, :user_id, :password)');
    $stt->bindParam(':id', $id, PDO::PARAM_INT);
    $stt->bindParam(':user_id', $_POST['userid'], PDO::PARAM_STR);
    $stt->bindParam(':password', $password, PDO::PARAM_STR);
    $stt->execute();
    $db->commit();
} catch (PDOException $e) {
    $db->rollBack();
    print "エラーが発生しました:{$e->getMessage()}";
}

$_SESSION['createdUser'] = true;

header("location: ../../view/users/new.php?user_id=$userid");
