<?php
/* Smarty version 4.3.1, created on 2023-05-27 22:08:26
  from 'C:\xampp\htdocs\RollingStones\templates\addAlbum.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6472633a5ac010_63396051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bad4f476c71a929acfbfc515acc2c5966fd93d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RollingStones\\templates\\addAlbum.tpl',
      1 => 1685218070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6472633a5ac010_63396051 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
    <form id="addAlbum" method="_GET">
        <input type="text" id="titulo_album" placeholder="titulo del album"/>
        <input type="text" id="year_release" placeholder="Año de lanzamiento"/>
        <input type="text" id="img_cover" placeholder="url libre a imagen"/>
        <input type="submit" name="Agregar">
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
