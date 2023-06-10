<?php
/* Smarty version 4.3.1, created on 2023-06-11 00:41:45
  from 'C:\xampp\htdocs\RollingStones\templates\addAlbum.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6484fc29dc08f2_55255871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bad4f476c71a929acfbfc515acc2c5966fd93d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RollingStones\\templates\\addAlbum.tpl',
      1 => 1686436903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6484fc29dc08f2_55255871 (Smarty_Internal_Template $_smarty_tpl) {
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
