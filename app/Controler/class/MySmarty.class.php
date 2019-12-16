<?php
require_once 'vendor/autoload.php';
class MySmarty extends Smarty
{
    public function __construct()
    {
        parent::__construct();
        $this->template_dir = 'view/templates';
        $this->compile_dir = 'view/templates_c';
        $this->default_modifiers = [ 'escape:"htmlall"' ];

        $this->assign('title', 'MokuMokuApp');
    }
    //displayメソッドを定義
    public function d()
    {
        parent::display(basename($_SERVER['PHP_SELF'], '.php').'.tpl');
    }
}
