<?php
/* Smarty version 4.3.1, created on 2023-06-20 04:17:30
  from 'C:\xampp\htdocs\RollingStones\templates\albums.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64910c3ac294b2_37990142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1add13c8610894eb867dd8d251ca9be9c749c52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RollingStones\\templates\\albums.tpl',
      1 => 1687227447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64910c3ac294b2_37990142 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content albums">
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['albums']->value, 'album');
$_smarty_tpl->tpl_vars['album']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
$_smarty_tpl->tpl_vars['album']->do_else = false;
?>
            <div class='card'>
                <ol><p>Album numero <?php echo $_smarty_tpl->tpl_vars['album']->value->id_album;?>
</p></ol>
                <ol><a href="album/<?php echo $_smarty_tpl->tpl_vars['album']->value->id_album;?>
"><?php echo $_smarty_tpl->tpl_vars['album']->value->titulo_album;?>
</a></ol>
                <ol><?php echo $_smarty_tpl->tpl_vars['album']->value->year_release;?>
</ol>
                <ol><img class="img cover" src="<?php echo $_smarty_tpl->tpl_vars['album']->value->img_cover;?>
" alt="portada del album <?php echo $_smarty_tpl->tpl_vars['album']->value->titulo_album;?>
"></ol>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    <?php }
}
