<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-24 12:11:04
  from '/Applications/XAMPP/xamppfiles/htdocs/mokumoku/view/templates/styles_common.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e0181c8801313_05216332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6b7d163c0f74b42abfa9d36a63690198dd33987' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/mokumoku/view/templates/styles_common.tpl',
      1 => 1577157052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0181c8801313_05216332 (Smarty_Internal_Template $_smarty_tpl) {
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
