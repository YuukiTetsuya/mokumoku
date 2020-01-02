<?php

session_start();

require_once 'app/Controller/UsersFindController.class.php';
require_once 'app/utility/Encode.php';

use app\Controller\UsersFindController;

if (!isset($_SESSION['logoutToken']) || $_SESSION['logoutToken'] !== $_SESSION['token']) {
    die('不正なアクセスが行われました');
};

$userFind = new UsersFindController();
$userFind->setFindUsersLogout(
    e($_SESSION['currentUser']['user_id']),
    e($_SESSION['currentUser']['password'])
);
$logoutUser = $userFind->getFindUsers();
