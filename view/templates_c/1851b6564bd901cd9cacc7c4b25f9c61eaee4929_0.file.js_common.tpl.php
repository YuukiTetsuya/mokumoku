<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-20 23:29:41
  from '/Applications/XAMPP/xamppfiles/htdocs/mokumoku/view/templates/js_common.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dfcdad52d57f9_20030633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1851b6564bd901cd9cacc7c4b25f9c61eaee4929' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/mokumoku/view/templates/js_common.tpl',
      1 => 1576852178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfcdad52d57f9_20030633 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php if ($_SERVER['REQUEST_URI'] == '/mokumoku/') {
echo '<script'; ?>
 type="text/javascript" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['jsIndex']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['jsSlickIndex']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo '</script'; ?>
>
<?php } elseif ($_SERVER['REQUEST_URI'] == '/mokumoku/view/index.php') {
echo '<script'; ?>
 type=" text/javascript" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['js']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type=" text/javascript" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['jsSlick']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo '</script'; ?>
>
<?php } else {
echo '<script'; ?>
 type=" text/javascript" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['js']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo '</script'; ?>
>
<?php }?>
</body>

</html><?php }
}
