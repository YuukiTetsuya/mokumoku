<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-22 12:14:21
  from '/var/www/html/mokumoku/view/templates/head_common.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dfedf8d413ca8_55350673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2a0795a48164461d95b12b4559913fdd23c0abd' => 
    array (
      0 => '/var/www/html/mokumoku/view/templates/head_common.tpl',
      1 => 1576984313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:styles_common.tpl' => 1,
    'file:header_common.tpl' => 1,
  ),
),false)) {
function content_5dfedf8d413ca8_55350673 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $_smarty_tpl->_subTemplateRender('file:styles_common.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <title><?php echo htmlentities($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'ISO-8859-1', true);?>
へようこそ</title>
</head>

<body>
    <header>
        <?php $_smarty_tpl->_subTemplateRender('file:header_common.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </header><?php }
}
