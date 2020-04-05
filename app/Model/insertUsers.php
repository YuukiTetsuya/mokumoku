<?php
require_once 'config.php';
require_once 'app/utility/createUserId.php';

session_start();
// CSRF保護対策
if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
    die('不正なアクセスが行われました');
}

$_SESSION['createdUser'] = '';

try {
    // db(PDOオブジェクト)に対し、ユーザーidとパスワードを挿入する
    $db = getDb();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // トランザクション開始
    $db->beginTransaction();
    $userid = $_POST['userid'];
    $stu = $db->prepare('SELECT * FROM users WHERE user_id = :user_id');
    $stu->bindParam(':user_id', $userid, PDO::PARAM_STR);
    $stu->execute();
    $result = $stu->fetch(PDO::FETCH_ASSOC);
    if ($result === false && mb_strlen($userid) <= 64 && $passwordUser !== '' && mb_strlen($passwordUser) >= 8) {
        if (preg_match('/^[\w]+$/', $userid)) {
            $id = null;
            $stt = $db->prepare('INSERT INTO users(id, user_id, password) VALUES(:id, :user_id, :password)');
            $stt->bindParam(':id', $id, PDO::PARAM_INT);
            $stt->bindParam(':user_id', $_POST['userid'], PDO::PARAM_STR);
            $stt->bindParam(':password', $password, PDO::PARAM_STR);
            $_SESSION['createdUser'] = 'created';
            $stt->execute();
        } else {
            $_SESSION['createdUser'] = 'check';
        }
    } else {
        if ($userid === "") {
            $_SESSION['createdUser'] = 'nullCreated';
        } elseif (mb_strlen($userid) > 64) {
            $_SESSION['createdUser'] = 'overCreated';
        } elseif ($result['user_id'] === $userid) {
            $_SESSION['createdUser'] = 'notUnique';
        }
        if ($passwordUser === '') {
            $_SESSION['createdPass'] = 'nullPass';
        } elseif (mb_strlen($passwordUser) < 8) {
            $_SESSION['createdPass'] = 'enoughPass';
        }
    }
    $db->commit();
} catch (PDOException $e) {
    $db->rollBack();
    print "エラーが発生しました:{$e->getMessage()}";
}


header("location: ../../view/users/new?user_id=$userid");