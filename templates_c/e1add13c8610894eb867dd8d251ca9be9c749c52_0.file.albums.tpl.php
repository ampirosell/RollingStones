<?php
/* Smarty version 4.3.1, created on 2023-05-26 23:58:41
  from 'C:\xampp\htdocs\RollingStones\templates\albums.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64712b91135633_94142946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1add13c8610894eb867dd8d251ca9be9c749c52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RollingStones\\templates\\albums.tpl',
      1 => 1685131920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:login.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64712b91135633_94142946 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['albums']->value, 'album');
$_smarty_tpl->tpl_vars['album']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
$_smarty_tpl->tpl_vars['album']->do_else = false;
?>
            <li><a href="/album/<?php echo $_smarty_tpl->tpl_vars['album']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['album']->value->titulo_album;?>
</a></li>
            <li><?php echo $_smarty_tpl->tpl_vars['album']->value->year_release;?>
</li>
            <li><?php echo $_smarty_tpl->tpl_vars['album']->value->img_cover;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    <?php }
}
