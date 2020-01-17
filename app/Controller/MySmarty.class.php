<?php
namespace app\Controller;

require_once 'vendor/autoload.php';
require_once 'app/utility/Encode.php';
require_once 'app/utility/sessionDestroy.php';

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
                $dateYmd = ['月', '日 ', '分'];
                $datePlace = ['-', ' ', ':'];
                $user['id'] = e($_SESSION['currentUser']['id']);
                $user['user_id'] = e($_SESSION['currentUser']['user_id']);
                $user['created'] = e($_SESSION['currentUser']['created']);
                $logined = preg_replace('/-/', '年', e($_SESSION['currentUser']['logined']), 1);
                $logined = preg_replace('/:/', '時', $logined, 1);
                $logined = str_replace($datePlace, $dateYmd, $logined);
                $user['dateLogin'] = $logined.'秒';
                $logouted = preg_replace('/-/', '年', e($_SESSION['currentUser']['logouted']), 1);
                $logouted = preg_replace('/:/', '時', $logouted, 1);
                $logouted = str_replace($datePlace, $dateYmd, $logouted);
                $user['dateLogout'] = $logouted.'秒';
                $user['status'] = e($_SESSION['currentUser']['status']);
                $status['login'] = "ユーザー　";
                $status['logout'] = 'ログアウト';
            } else {
                $user['id'] = e($_SESSION['currentUser']['id']);
                $user['user_id'] = e($_SESSION['currentUser']['user_id']);
                $user['created'] = e($_SESSION['currentUser']['created']);
                $logouted = preg_replace('/-/', '年', e($_SESSION['currentUser']['logouted']), 1);
                $logouted = preg_replace('/:/', '時', $logouted, 1);
                $logouted = str_replace($datePlace, $dateYmd, $logouted);
                $user['dateLogout'] = $logouted.'秒';
                $user['status'] = e($_SESSION['currentUser']['status']);
                $status['login'] = "ログイン　";
                $status['new'] = "会員登録　";
                $_SESSION['currentUser'] = null;
            }
        } else {
            $status['login'] = 'ログイン　';
            $status['new'] = '会員登録　';
        }
        $this->assign('title', 'MokuMokuApp');
        $this->assign('login', $status['login']);
        $this->assign('logout', $status['logout']);
        $this->assign('new', $status['new']);
        $this->assign('currentUser', $user);
    }
    //displayメソッドを定義
    public function d()
    {
        parent::display(basename($_SERVER['PHP_SELF'], '.php').'.tpl');
    }
}
