<?php
/* Smarty version 4.3.1, created on 2023-06-20 19:11:19
  from 'C:\xampp\htdocs\REPO2_RS_C_AMPI\RollingStones\templates\addAlbum.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6491ddb7dc4387_53921427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0388037706341753ebcfe48c13eb83bd96a2e61d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\REPO2_RS_C_AMPI\\RollingStones\\templates\\addAlbum.tpl',
      1 => 1687279619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6491ddb7dc4387_53921427 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
    <form action="addA" method="post">
        <label for="title_album" >Titulo del album</label><br>
        <input type="text" name="title_album" placeholder="titulo del album" required/><br>
        <label for="year_release">Año de lanzamiento</label><br>
        <input type="number" name="year_release" placeholder="Año de lanzamiento" required/><br>
        <label for="img_cover">Url libre a imagen de portada</label><br>
        <input type="text" name="img_cover" placeholder="url libre a imagen"/><br><br>
        <input type="submit" name="Agregar">
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
