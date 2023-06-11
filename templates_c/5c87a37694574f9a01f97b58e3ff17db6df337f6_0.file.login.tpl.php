<?php
/* Smarty version 4.3.1, created on 2023-06-12 00:26:40
  from 'C:\xampp\htdocs\RollingStones\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64864a2063fba8_03152170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c87a37694574f9a01f97b58e3ff17db6df337f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RollingStones\\templates\\login.tpl',
      1 => 1686522394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64864a2063fba8_03152170 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
    <div class="mensaje"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>
<form method="post" action="verify">
    <label for="username">Username:</label> <br>
    <input type="text" name="username" id='username' placeholder="usuario"> <br>
    <label for="password">Password:</label> <br>
    <input type="password" name="password" id='password' placeholder="contraseña" required> <br><br>
    <input type="submit" value="Ingresar">
</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
