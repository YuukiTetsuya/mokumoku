<?php

require_once 'app/Controller/UsersFindController.class.php';

use app\Controller\UsersFindController;

$userFind = new UsersFindController();

$userFind->setFindUsers($userFind->userid, $userFind->password);
$loginUser = $userFind->getFindUsers();
