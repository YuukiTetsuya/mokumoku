<!-- CSRF保護対策 -->
<?php
// CSRF保護対策用セッション作成
session_start();
$token = uniqid(str_pad(mt_rand(), 10, "0", STR_PAD_LEFT), true);
$_SESSION['token'] = $token;
