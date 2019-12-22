<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-21 15:01:07
  from '/Applications/XAMPP/xamppfiles/htdocs/mokumoku/view/templates/post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dfdb523050a33_35970584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b9c283d6e13f6976dc0342bf64bfed3a6d5d2d3' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/mokumoku/view/templates/post.tpl',
      1 => 1576896770,
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
function content_5dfdb523050a33_35970584 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender('file:head_common.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <main>
        <div class="container">
            <h1><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['create']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h1>
            <p>limit1 Agendas $id1（降順ソート後の最新レコード）</p>
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tenAgendas']->value[1]['mokumokuname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<br>
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tenAgendas']->value[1]['contents'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<br>
            <p>limit1 Agendas$id2（降順ソート後の最新レコード）</p>
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tenAgendas']->value[2]['mokumokuname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<br>
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tenAgendas']->value[2]['contents'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<br>
            <p>limit1 Agendas$id3（降順ソート後の最新レコード）</p>
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tenAgendas']->value[3]['mokumokuname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<br>
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tenAgendas']->value[3]['contents'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<br>
            <p>limit3 $id1（降順ソート後の最新レコード）</p>
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['oneAgendas']->value[1]['mokumokuname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<br>
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['oneAgendas']->value[1]['contents'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<br>
            <p>limit3 $id2（降順ソート後の最新レコード）</p>
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['oneAgendas']->value[2]['mokumokuname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<br>
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['oneAgendas']->value[2]['contents'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<br>
            <p>limit3 $id3（降順ソート後の最新レコード）</p>
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['oneAgendas']->value[3]['mokumokuname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<br>
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['oneAgendas']->value[3]['contents'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<br>
        </div>
    </main>
    <?php $_smarty_tpl->_subTemplateRender('file:footer_common.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:js_common.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
