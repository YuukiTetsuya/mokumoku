<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-18 10:02:32
  from '/Applications/XAMPP/xamppfiles/htdocs/mokumoku/view/templates/post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df97aa834ba70_37580623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b9c283d6e13f6976dc0342bf64bfed3a6d5d2d3' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/mokumoku/view/templates/post.tpl',
      1 => 1576630950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df97aa834ba70_37580623 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../webroot/css/styles.css">
    <title><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</title>
</head>

<body>
    <div class="container">
        <p><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['mokumoku']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
    </div>
</body>

</html><?php }
}
