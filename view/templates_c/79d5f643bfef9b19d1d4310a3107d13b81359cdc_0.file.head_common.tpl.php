<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-19 09:59:11
  from '/Applications/XAMPP/xamppfiles/htdocs/mokumoku/view/templates/head_common.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dfacb5f870dc7_09466483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79d5f643bfef9b19d1d4310a3107d13b81359cdc' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/mokumoku/view/templates/head_common.tpl',
      1 => 1576717133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:styles_common.tpl' => 1,
    'file:header_common.tpl' => 1,
  ),
),false)) {
function content_5dfacb5f870dc7_09466483 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $_smarty_tpl->_subTemplateRender('file:styles_common.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <title><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
へようこそ</title>
</head>

<body>
    <header>
        <?php $_smarty_tpl->_subTemplateRender('file:header_common.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </header><?php }
}
