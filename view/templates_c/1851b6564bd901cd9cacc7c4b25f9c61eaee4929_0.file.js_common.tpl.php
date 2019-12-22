<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-21 14:12:51
  from '/Applications/XAMPP/xamppfiles/htdocs/mokumoku/view/templates/js_common.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dfda9d3b4ccc3_14542822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1851b6564bd901cd9cacc7c4b25f9c61eaee4929' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/mokumoku/view/templates/js_common.tpl',
      1 => 1576896770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfda9d3b4ccc3_14542822 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- jQueryをgoogleCDNから読み込み -->
<?php echo '<script'; ?>
 type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
<!-- トップページ読み込みであればIndex用を、それ以外であれば全体用jsを、一部jsファイルはindexファイル用に個別で読み込み -->
<?php if ($_SERVER['REQUEST_URI'] == '/mokumoku/') {
echo '<script'; ?>
 type="text/javascript" src="webroot/js/index.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="webroot/js/slick.js"><?php echo '</script'; ?>
>
<?php } else {
echo '<script'; ?>
 type=" text/javascript" src="../webroot/js/index.js"><?php echo '</script'; ?>
>
<?php }?>
</body>

</html><?php }
}
