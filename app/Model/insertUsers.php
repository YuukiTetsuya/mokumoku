<?php
require_once 'config.php';

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
    $date = $date->format('Y/m/d H:i:s');
    $db->prepare('INSERT INTO users(id, user_id, password, created, modified)')
    $db->commit();
} catch (PDOException $e) {
    $db->rollBack();
    print "エラーが発生しました:{$e->getMessage()}";
}
