<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-22 12:14:21
  from '/var/www/html/mokumoku/view/templates/header_common.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dfedf8d41b6e5_30865246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '737f334c29c1e6a23cdb4c365ecd8f5dc033e494' => 
    array (
      0 => '/var/www/html/mokumoku/view/templates/header_common.tpl',
      1 => 1576976942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfedf8d41b6e5_30865246 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="container">
        <div class="header-left">
            <?php echo htmlentities($_smarty_tpl->tpl_vars['leftlogo']->value, ENT_QUOTES, 'ISO-8859-1', true);?>

        </div>
        <div class="header-right">
            <?php echo htmlentities($_smarty_tpl->tpl_vars['rightmenu']->value, ENT_QUOTES, 'ISO-8859-1', true);?>

        </div>
        <div class="title t-grafic"><a href="/mokumoku/"><?php echo htmlentities($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'ISO-8859-1', true);?>
</a></div>
    </div><?php }
}
