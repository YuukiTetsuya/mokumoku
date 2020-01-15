<?php
namespace app\Controller;

require_once 'app/Model/Users.class.php';
require_once 'app/utility/Encode.php';

use app\Model\Users;

class UsersFindProfController extends Users
{
    public $postUser = 0;
    
    public function setFindProfUsers($postUser)
    {
        $this->postUser = parent::selectUsers($postUser);
    }

    public function getFindProfUsers()
    {
        // ログインユーザーを返す
        return $this->postUser;
    }
}
