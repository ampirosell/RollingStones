<?php
/* Smarty version 4.3.1, created on 2023-06-03 23:52:42
  from 'C:\xampp\htdocs\RollingStones\templates\chooseAlbum.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647bb62a4c6ae9_91301906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '473545d6c8d2d096874fef5238842afdad826d44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RollingStones\\templates\\chooseAlbum.tpl',
      1 => 1685829143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647bb62a4c6ae9_91301906 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
    <div class="form">
        <form action="album" method="post" id="seleccionAlbum">
            <select class="albums">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['albums']->value, 'album');
$_smarty_tpl->tpl_vars['album']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
$_smarty_tpl->tpl_vars['album']->do_else = false;
?>
                    <option class="option" id='id <?php echo $_smarty_tpl->tpl_vars['album']->value->id_album;?>
'><?php echo $_smarty_tpl->tpl_vars['album']->value->titulo_album;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <button action="album" id="chooseAlbum">Elegir</button>
        </form>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
