<?php
/* Smarty version 4.3.1, created on 2023-06-03 23:25:41
  from 'C:\xampp\htdocs\RollingStones\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647bafd5f2dd64_16229460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c87a37694574f9a01f97b58e3ff17db6df337f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RollingStones\\templates\\login.tpl',
      1 => 1685827539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647bafd5f2dd64_16229460 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
<form method="post" action="verify">
    <input type="text" name="username" id='username' placeholder="usuario">
    <input type="password" name="password" id='password' placeholder="contraseña" required>
    <input type="submit" value="Ingresar">
</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
