<?php
/* Smarty version 4.3.1, created on 2023-06-14 00:37:18
  from 'C:\xampp\htdocs\RollingStones\templates\editSong.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6488ef9e189aa2_10358334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88b2807b5669e01656d115a73c7c5399d28b85fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RollingStones\\templates\\editSong.tpl',
      1 => 1686695684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6488ef9e189aa2_10358334 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
<form method=POST action="<?php echo BASE_URL;?>
updateS/<?php echo $_smarty_tpl->tpl_vars['song']->value->id_song;?>
">
    <h3> Estas por editar la cancion " <?php echo $_smarty_tpl->tpl_vars['song']->value->title_song;?>
 " del Album:  <?php echo $_smarty_tpl->tpl_vars['album']->value->titulo_album;?>
 </h3>
    <input type="text" name="title_song" value="<?php echo $_smarty_tpl->tpl_vars['song']->value->title_song;?>
" >
    <select name="albumId">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TodosLosAlbums']->value, 'UnAlbum');
$_smarty_tpl->tpl_vars['UnAlbum']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['UnAlbum']->value) {
$_smarty_tpl->tpl_vars['UnAlbum']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['UnAlbum']->value->id_album;?>
"><?php echo $_smarty_tpl->tpl_vars['UnAlbum']->value->titulo_album;?>
 </option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <button type="submit">Editar</button>
</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
