<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-24 13:33:59
  from '/Applications/XAMPP/xamppfiles/htdocs/mokumoku/view/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e019537256958_53110144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dda0a2799a5dc823884b53546a9d1c8e6e7867c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/mokumoku/view/templates/index.tpl',
      1 => 1577161977,
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
function content_5e019537256958_53110144 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender('file:head_common.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <main>
        <div class="container">
            <form action="app/model/insert_agendas.php" method="POST">
                <table border="2" cellpadding="5" cellspacing="5">
                    <caption>
                        <div class="subtitle agenda-title"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['agendas']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</div>
                    </caption>
                    <?php $_smarty_tpl->_assignInScope('dot', ".");?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['agendas']->value, 'agenda', false, 'agendakey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['agendakey']->value => $_smarty_tpl->tpl_vars['agenda']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['agendakey']->value == 'title') {?>
                    <?php continue 1;?>
                    <?php }?>
                    <tr>
                        <?php if ($_smarty_tpl->tpl_vars['agendakey']->value == 'wifi') {?>
                        <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['agendas']->value['wifi'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                        <td colspan="2" id="wifimsg"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['wifimsg']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                        <?php continue 1;?>
                        <?php }?>
                        <td <?php if ($_smarty_tpl->tpl_vars['agendakey']->value == 'contents') {?> valign="top" <?php } elseif ($_smarty_tpl->tpl_vars['agendakey']->value == 'pass') {?> class="pass"
                            <?php }?>><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['agenda']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 </td> <td>
                            <?php if ($_smarty_tpl->tpl_vars['agendakey']->value == 'contents') {?>
                            <textarea name="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['agendakey']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" id="contents" cols="60" rows="10"
                                placeholder="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['frontValue']->value[$_smarty_tpl->tpl_vars['agendakey']->value], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"></textarea>
                            <?php } else { ?>
                            <input type="text" name="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['agendakey']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" placeholder="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['frontValue']->value[$_smarty_tpl->tpl_vars['agendakey']->value], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                            <?php }?>
                        </td>
                    </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
                <input type="hidden" name="post_id" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['frontValue']->value['post_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                <input type="submit" value="作成する" class="button">
            </form>
            <p><a href="view/post.php">post.php</a></p>
            <p><a href="view/storage.php">もくもくデータベース</a></p>
            <ul class="slider">
                <li><a href="#"><img src="webroot/image/IMG_5314.JPG" alt="image01"></a></li>
                <li><a href="#"><img src="webroot/image/php.jpg" alt="image02"></a></li>
            </ul>
        </div>
    </main>
    <?php $_smarty_tpl->_subTemplateRender('file:footer_common.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:js_common.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
