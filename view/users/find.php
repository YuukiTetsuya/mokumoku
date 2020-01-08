<?php

session_start();
// CSF保護対策
if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
    die('不正なアクセスが行われました');
};

require_once 'app/Controller/MySmarty.class.php';
require_once 'app/utility/getRecordUser.php';

if (empty($loginUser)) {
    header("location: login");
} else {
    $_SESSION['currentUser'] = $loginUser;
    header("location: profile");
}
