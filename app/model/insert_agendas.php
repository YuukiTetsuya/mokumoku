<?php
require_once 'config.php';

try {
    // db(PDOオブジェクト)に対し、各カラムにユーザー入力値を挿入する
    $db = getDb();
    $id = null;
    $stt = $db->prepare('INSERT INTO agendas(id, mokumokuname, schedule, contents, rule, ssid, pass) VALUES(:id, :mokumokuname, :schedule, :contents, :rule, :ssid, :pass)');
    $stt->bindValue(':id', $id, PDO::PARAM_INT);
    $stt->bindValue(':mokumokuname', $_POST['mokumokuname']);
    $stt->bindValue(':schedule', $_POST['schedule']);
    $stt->bindValue(':contents', $_POST['contents']);
    $stt->bindValue(':rule', $_POST['rule']);
    $stt->bindValue(':ssid', $_POST['ssid']);
    $stt->bindValue(':pass', $_POST['pass']);
    $stt->execute();
    print 'insert成功';
} catch (PDOException $e) {
    // エラー時;
    print "エラーが発生しました:{$e->getMessage()}";
}
header("location: ../../view/post.php");
