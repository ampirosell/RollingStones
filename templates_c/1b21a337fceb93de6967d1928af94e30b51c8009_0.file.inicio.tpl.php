<?php
/* Smarty version 4.3.1, created on 2023-06-03 23:29:31
  from 'C:\xampp\htdocs\RollingStones\templates\inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647bb0bb91fb22_91315731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b21a337fceb93de6967d1928af94e30b51c8009' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RollingStones\\templates\\inicio.tpl',
      1 => 1685827768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647bb0bb91fb22_91315731 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
    <h2>Bienvenidos y bienvenidas</h2>
    <h4>a la discografia de...</h4>
    <h2>LOS ROLLING STONES</h2>
    <p>Inicie sesion para acceder a información de la banda</p>
    <a href="login">Login</a>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
