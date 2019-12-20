<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-20 23:26:16
  from '/Applications/XAMPP/xamppfiles/htdocs/mokumoku/view/templates/styles_common.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dfcda08e7e275_58279014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6b7d163c0f74b42abfa9d36a63690198dd33987' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/mokumoku/view/templates/styles_common.tpl',
      1 => 1576851935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfcda08e7e275_58279014 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- トップページ読み込みであればIndex用を、それ以外であれば全体用cssを読み込み -->
<?php if ($_SERVER['REQUEST_URI'] == '/mokumoku/') {?>
<link rel="stylesheet" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['stylesHeaderIndex']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
<link rel="stylesheet" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['stylesFooterIndex']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
<link rel="stylesheet" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slickIndex']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
<link rel="stylesheet" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['stylesIndex']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
<?php } else { ?>
<link rel="stylesheet" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['styles']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
<link rel="stylesheet" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['stylesHeader']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
<link rel="stylesheet" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['stylesFooter']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
<?php }
}
}
