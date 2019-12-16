<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-17 04:35:59
  from '/Applications/XAMPP/xamppfiles/htdocs/mokumoku/view/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df7dc9fd71739_68139954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dda0a2799a5dc823884b53546a9d1c8e6e7867c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/mokumoku/view/templates/index.tpl',
      1 => 1576524958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df7dc9fd71739_68139954 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="webroot/css/styles.css">
    <link rel="stylesheet" href="webroot/css/slick.css">
    <title><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
へようこそ</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="header-left">
                <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['leftlogo']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

            </div>
            <div class="header-right">
                <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['rightlogo']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

            </div>
            <h1 id="title"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <label for="agenda"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['agenda']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</label>
            <form action="view/test.php" method="POST">
                <input type="text" name="id">
                <input type="submit" value="送信">
            </form>
        </div>
        <ul class="slider">
            <li><a href="#"><img src="webroot/image/IMG_5314.JPG" alt="image01"></a></li>
            <li><a href="#"><img src="webroot/image/php.jpg" alt="image02"></a></li>
        </ul>
    </main>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="webroot/js/index.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="webroot/js/slick.js"><?php echo '</script'; ?>
>
</body>


</html><?php }
}
