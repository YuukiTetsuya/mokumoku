<?php
namespace app\Controller;

require_once 'vendor/autoload.php';
require_once 'app/utility/Encode.php';

use \Smarty;

class MySmarty extends Smarty
{
    public function __construct()
    {
        parent::__construct();
        $this->template_dir = $_SERVER['DOCUMENT_ROOT'].'/mokumoku/view/templates';
        $this->compile_dir = $_SERVER['DOCUMENT_ROOT'].'/mokumoku/view/templates_c';
        $this->default_modifiers = [ 'escape:"htmlall"' ];
        
        session_start();

        if (isset($_SESSION['currentUser'])) {
            if ($_SESSION['currentUser']['status'] === '1') {
                $user['id'] = e($_SESSION['currentUser']['id']);
                $user['user_id'] = e($_SESSION['currentUser']['user_id']);
                $user['created'] = e($_SESSION['currentUser']['created']);
                $user['logined'] = e($_SESSION['currentUser']['logined']);
                $user['status'] = e($_SESSION['currentUser']['status']);
                $status['login'] = $user['user_id']."さん";
                $status['logout'] = 'ログアウト';
            } else {
                $status['login'] = "ログイン";
            }
        } else {
            $status['login'] = 'ログイン';
        }
        $this->assign('title', 'MokuMokuApp');
        $this->assign('leftlogo', '左サイトロゴ');
        $this->assign('login', $status['login']);
        $this->assign('logout', $status['logout']);
        $this->assign('currentUser', $user);
    }
    //displayメソッドを定義
    public function d()
    {
        parent::display(basename($_SERVER['PHP_SELF'], '.php').'.tpl');
    }
}
