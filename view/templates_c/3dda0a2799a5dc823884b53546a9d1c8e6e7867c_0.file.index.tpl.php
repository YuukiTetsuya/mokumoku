<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-16 18:33:58
  from '/Applications/XAMPP/xamppfiles/htdocs/mokumoku/view/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df74f861803f0_85643230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dda0a2799a5dc823884b53546a9d1c8e6e7867c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/mokumoku/view/templates/index.tpl',
      1 => 1576488719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df74f861803f0_85643230 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
へようこそ</title>
</head>

<body>
    <h1><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h1>
    <label for="agenda"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['agenda']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</label>
    <form action="view/test.php" method="POST">
        <input type="text" name="id">
        <input type="submit" value="送信">
    </form>
</body>

</html><?php }
}
