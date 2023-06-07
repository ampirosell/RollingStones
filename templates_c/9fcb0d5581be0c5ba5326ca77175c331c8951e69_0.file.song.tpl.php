<?php
/* Smarty version 4.3.1, created on 2023-06-07 00:00:29
  from 'C:\xampp\htdocs\RollingStones\templates\song.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647fac7d8b1fb6_43573428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fcb0d5581be0c5ba5326ca77175c331c8951e69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RollingStones\\templates\\song.tpl',
      1 => 1686088824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647fac7d8b1fb6_43573428 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
    <h3 class="card-title">Nombre de la cancion: <?php echo $_smarty_tpl->tpl_vars['song']->value->title_song;?>
</h3>
    <p class="card-text">Cancion numero <?php echo $_smarty_tpl->tpl_vars['song']->value->id_album;?>
 en el orden de todas las canciones de los Rolling Stones </p>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
