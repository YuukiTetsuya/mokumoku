<?php
require_once 'app/utility/sessionCreate.php';

$_SESSION['logoutToken'] = $_SESSION['token'];

require_once 'view/users/destroyLogout.php';

if (empty($logoutUser)) {
    header("location: login");
} else {
    $_SESSION['currentUser'] = $logoutUser;
    header("location: login");
}
