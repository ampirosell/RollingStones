<?php
/* Smarty version 4.3.1, created on 2023-05-27 21:14:39
  from 'C:\xampp\htdocs\RollingStones\templates\album.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6472569f421d81_94917258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eff17e5dd8b529d7be1c4506f41906718cef6129' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RollingStones\\templates\\album.tpl',
      1 => 1685214862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6472569f421d81_94917258 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
    <p>Para el album '<?php echo $_smarty_tpl->tpl_vars['album']->value->titulo_album;?>
' se tiene la siguiente informacion:</p>     
    <p>Este album fue lanzado en el año: <?php echo $_smarty_tpl->tpl_vars['album']->value->year_release;?>
</p>
    <img alt="tapa del disco del album" src='<?php echo $_smarty_tpl->tpl_vars['album']->value->img_cover;?>
'>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
