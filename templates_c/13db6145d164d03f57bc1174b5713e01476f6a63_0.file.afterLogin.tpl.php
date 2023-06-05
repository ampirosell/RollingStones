<?php
/* Smarty version 4.3.1, created on 2023-06-05 20:41:49
  from 'C:\xampp\htdocs\RollingStones\templates\afterLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647e2c6d8628d0_63289626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13db6145d164d03f57bc1174b5713e01476f6a63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RollingStones\\templates\\afterLogin.tpl',
      1 => 1685990506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647e2c6d8628d0_63289626 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
¡Hola <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
!

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
