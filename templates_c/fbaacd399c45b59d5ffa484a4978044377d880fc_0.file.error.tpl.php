<?php
/* Smarty version 4.3.1, created on 2023-06-20 19:07:50
  from 'C:\xampp\htdocs\REPO2_RS_C_AMPI\RollingStones\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6491dce6ea6c82_68884331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbaacd399c45b59d5ffa484a4978044377d880fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\REPO2_RS_C_AMPI\\RollingStones\\templates\\error.tpl',
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
function content_6491dce6ea6c82_68884331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
    <h5>Error</h5>
    <p><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
