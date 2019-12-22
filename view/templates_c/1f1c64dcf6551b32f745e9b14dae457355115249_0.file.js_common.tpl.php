<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-22 12:14:21
  from '/var/www/html/mokumoku/view/templates/js_common.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dfedf8d421e56_76697966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f1c64dcf6551b32f745e9b14dae457355115249' => 
    array (
      0 => '/var/www/html/mokumoku/view/templates/js_common.tpl',
      1 => 1576976942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfedf8d421e56_76697966 (Smarty_Internal_Template $_smarty_tpl) {
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
