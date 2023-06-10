<?php
/* Smarty version 4.3.1, created on 2023-06-10 22:54:01
  from 'C:\xampp\htdocs\RollingStones\templates\addAlbum.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6484e2e9498bf1_60486346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bad4f476c71a929acfbfc515acc2c5966fd93d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RollingStones\\templates\\addAlbum.tpl',
      1 => 1686430428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6484e2e9498bf1_60486346 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
    <form action="addA" method="post">
        <input type="text" name="title_album" placeholder="titulo del album" required/><br><br>
        <input type="number" name="year_release" placeholder="Año de lanzamiento" required/><br><br>
        <input type="text" name="img_cover" placeholder="url libre a imagen"/><br><br>
        <input type="submit" name="Agregar">
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
