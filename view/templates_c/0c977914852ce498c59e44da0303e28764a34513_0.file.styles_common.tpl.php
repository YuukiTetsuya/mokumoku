<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-22 11:18:01
  from '/var/www/html/mokumoku/view/templates/styles_common.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dfed259ec9c31_50578001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c977914852ce498c59e44da0303e28764a34513' => 
    array (
      0 => '/var/www/html/mokumoku/view/templates/styles_common.tpl',
      1 => 1576976942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfed259ec9c31_50578001 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- トップページ読み込みであればIndex用を、それ以外であれば全体用cssを読み込み -->
<?php if ($_SERVER['REQUEST_URI'] == '/mokumoku/') {?>
<link rel="stylesheet" href="webroot/css/styles.css">
<link rel="stylesheet" href="webroot/css/header.css">
<link rel="stylesheet" href="webroot/css/footer.css">
<link rel="stylesheet" href="webroot/css/slick.css">
<?php } else { ?>
<link rel="stylesheet" href="../webroot/css/styles.css">
<link rel="stylesheet" href="../webroot/css/header.css">
<link rel="stylesheet" href="../webroot/css/footer.css">
<?php }
}
}
