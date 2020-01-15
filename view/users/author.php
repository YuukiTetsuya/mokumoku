<?php
require_once 'app/Controller/MySmarty.class.php';
require_once 'app/Controller/UsersFindProfController.class.php';
require_once 'app/utility/Encode.php';

use app\Controller\MySmarty;
use app\Controller\UsersFindProfController;

$usersProf = new UsersFindProfController();
if (isset($_GET['id'])) {
    $usersProf->setFindProfUsers(e($_GET['id']));
    $getUsers = $usersProf->getFindProfUsers();
    $postUser = $getUsers['user_id'];
}

$s = new MySmarty();

$s->assign('titleView', $postUser);
$s->assign('userid', 'ID名');
$s->assign('token', $_SESSION['token']);
$s->assign('postUser', $getUsers);
$s->assign('created', '作成日時');
$s->d();
