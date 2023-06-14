<?php
/* Smarty version 4.3.1, created on 2023-06-14 03:19:22
  from 'C:\xampp\htdocs\RollingStones\templates\editAlbum.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6489159a720a41_01448200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a75e69517b45524183b1dfe8c7caac36fed38320' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RollingStones\\templates\\editAlbum.tpl',
      1 => 1686705546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6489159a720a41_01448200 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
<form method=POST action="<?php echo BASE_URL;?>
updateA/<?php echo $_smarty_tpl->tpl_vars['album']->value->id_album;?>
">
    <h3> Estas por editar el album: "<?php echo $_smarty_tpl->tpl_vars['album']->value->titulo_album;?>
" </h3>
    <label for="titulo_album">Titulo del album:</label>
    <input type="text" name="titulo_album" value="<?php echo $_smarty_tpl->tpl_vars['album']->value->titulo_album;?>
" /><br><br>
    <label for="year_release">Año de lanzamiento:</label>
    <input type="number" name="year_release" value="<?php echo $_smarty_tpl->tpl_vars['album']->value->year_release;?>
"/><br><br>
    <label for="img_cover">Link libre a portada del album:</label>
    <input type="text" name="img_cover" value="<?php echo $_smarty_tpl->tpl_vars['album']->value->img_cover;?>
"/><br><br>
    <button type="submit">Editar</button>
</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
