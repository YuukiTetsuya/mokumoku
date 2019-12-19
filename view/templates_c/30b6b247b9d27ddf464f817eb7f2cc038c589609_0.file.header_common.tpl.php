<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-19 09:46:03
  from '/Applications/XAMPP/xamppfiles/htdocs/mokumoku/view/templates/header_common.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dfac84be3cd21_88316470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30b6b247b9d27ddf464f817eb7f2cc038c589609' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/mokumoku/view/templates/header_common.tpl',
      1 => 1576716362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfac84be3cd21_88316470 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="container">
        <div class="header-left">
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['leftlogo']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

        </div>
        <div class="header-right">
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['rightmenu']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

        </div>
        <div class="title t-grafic"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</div>
    </div><?php }
}
