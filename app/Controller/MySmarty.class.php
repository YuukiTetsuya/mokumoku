<?php
namespace app\Controller;

require_once 'vendor/autoload.php';

use \Smarty;

class MySmarty extends Smarty
{
    public function __construct()
    {
        parent::__construct();
        $this->template_dir = $_SERVER['DOCUMENT_ROOT'].'/mokumoku/view/templates';
        $this->compile_dir = $_SERVER['DOCUMENT_ROOT'].'/mokumoku/view/templates_c';
 	$this->default_modifiers = [ 'escape:"htmlall"' ];

        $this->assign('title', 'MokuMokuApp');
        $this->assign('leftlogo', '左サイトロゴ');
        $this->assign('rightmenu', '右サイトMENU');
        $this->assign('docroot', $_SERVER['DOCUMENT_ROOT']);
    }
    //displayメソッドを定義
    public function d()
    {
        parent::display(basename($_SERVER['PHP_SELF'], '.php').'.tpl');
    }
}
