<?php
namespace app\Controller;

require_once 'app/Model/Users.class.php';
require_once 'app/utility/Encode.php';

use app\Model\Users;

class UsersFindController extends Users
{
    private $currentUser = 0;
    public $userid = 0;
    public $password = 0;
    
    public function __construct()
    {
        if (isset($_POST['userid']) && isset($_POST['password'])) {
            $this->userid = e($_POST['userid']);
            $this->password = e($_POST['password']);
        } else {
            $this->userid = '';
            $this->password = '';
        }
    }

    public function setFindUsers($user, $pass)
    {
        $this->currentUser = parent::selectLoginUsers($user, $pass);
    }

    public function setFindUsersLogout($user, $pass)
    {
        $this->currentUser = parent::selectLogoutUsers($user, $pass);
    }

    public function getFindUsers()
    {
        // ログインユーザーを返す
        return $this->currentUser;
    }
}
