<?php
/* Smarty version 4.3.1, created on 2023-06-11 00:05:06
  from 'C:\xampp\htdocs\RollingStones\templates\deleteAlbumConfirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6484f3922c2e35_98045786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '699d6b6e6843ba8c0acd8673b9b8272470464dc1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RollingStones\\templates\\deleteAlbumConfirmation.tpl',
      1 => 1686434589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6484f3922c2e35_98045786 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
    <h2>Está seguro que quiere eliminar el album numero <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
?</h2>
    <h3>AVISO: se eliminarán también las canciones del album.</h3>
    <a href="<?php echo BASE_URL;?>
deleteAlbumConfirm/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Sí, eliminar.</a>
    <a href="<?php echo BASE_URL;?>
home">Cancelar</a>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
