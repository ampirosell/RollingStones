<?php
/* Smarty version 4.3.1, created on 2023-06-08 04:00:53
  from 'C:\xampp\htdocs\RollingStones\templates\addAlbum.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64813655617313_92551514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bad4f476c71a929acfbfc515acc2c5966fd93d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RollingStones\\templates\\addAlbum.tpl',
      1 => 1686189647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64813655617313_92551514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
    <form id="addAlbum" method="get">
        <input type="text" id="title_album" placeholder="titulo del album" required/>
        <input type="text" id="year_release" placeholder="Año de lanzamiento" required/>
        <input type="text" id="img_cover" placeholder="url libre a imagen"/>
        <input type="submit" action="addAlbum()" name="Agregar">
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
