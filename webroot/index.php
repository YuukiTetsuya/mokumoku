<?php
require_once 'app/Controler/class/MySmarty.class.php';

$s = new MySmarty();
$s->assign('message', 'このサイトは、もくもく会進行を手助けします');
$s->assign('agenda', 'アジェンダ入力');
$s->d();
