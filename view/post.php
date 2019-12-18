<?php
require_once 'app/utility/MySmartyAutoload.php';

$s = new MySmarty();
$s->assign('mokumoku', 'もくもく会');
$s->d();
