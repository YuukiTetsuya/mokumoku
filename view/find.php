<?php

session_start();
// CSF保護対策
if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
    die('不正なアクセスが行われました');
};

// 検索時のみ検索件数をお知らせするメッセージを追加
if (isset($_SESSION['token'])) {
    $_SESSION['finded'] = 'true';
};

// 検索キーワードが送信されているかどうか確認。なければ空を代入
if (isset($_POST['search'])) {
    $keyword = $_POST['search'];
} else {
    $keyword = null;
}

header("location: search.php?keyword=$keyword");
