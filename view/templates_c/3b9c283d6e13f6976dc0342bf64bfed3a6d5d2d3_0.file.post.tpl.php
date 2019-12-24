<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-24 11:14:08
  from '/Applications/XAMPP/xamppfiles/htdocs/mokumoku/view/templates/post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e017470eb5417_77460629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b9c283d6e13f6976dc0342bf64bfed3a6d5d2d3' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/mokumoku/view/templates/post.tpl',
      1 => 1577153645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head_common.tpl' => 1,
    'file:footer_common.tpl' => 1,
    'file:js_common.tpl' => 1,
  ),
),false)) {
function content_5e017470eb5417_77460629 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender('file:head_common.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <main>
        <div class="container">
            <div class="post">
                <h1><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['create']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h1>
                <div class="post-main">
                    <div class="post-left">
                        <div class="subtitle" id="weight">
                            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['mokumokuname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                        </div>
                        <div class="schedule">
                            開催時間：<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['schedule'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                        </div>
                        <div class="contents">
                            コンテンツ
                            <div class="description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['contents'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</div>
                        </div>
                        <div class="rule">
                            ルール
                            <div class="description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['rule'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</div>
                        </div>
                        <div class="edit">編集</div>
                    </div>
                    <div class="post-right">
                        <span id="wifi">
                            <span class="subtitle" id="weight">Wifi</span><br>
                            <span class="ssid-pass">
                                <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['agendas']->value['ssid'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['ssid'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<br>
                                <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['agendas']->value['pass'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['pass'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                            </span>
                        </span>
                    </div>
                    <div class="post-bottom">
                        <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['mokumokuname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<br>
                        $_GETで送ったuniqなid
                        <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<br>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <?php $_smarty_tpl->_subTemplateRender('file:footer_common.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:js_common.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
