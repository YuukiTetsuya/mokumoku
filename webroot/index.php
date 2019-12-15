<?php
require_once 'vendor/autoload.php';
$s = new Smarty();
$s->template_dir = 'view/templates';
$s->compile_dir = 'view/templates_c';
$s->assign('title', 'MokuMokuAppへようこそ');
$s->assign('message', 'このサイトは、もくもく会進行を手助けします');
$s->display('view/templates/index.tpl');
