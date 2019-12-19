<?php
require_once 'app/utility/MySmartyAutoload.php';
$s = new MySmarty();
$s->assign('test', 'こんにちは');
$s->d();
