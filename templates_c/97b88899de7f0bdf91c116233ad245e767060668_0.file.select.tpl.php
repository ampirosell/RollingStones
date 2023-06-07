<?php
/* Smarty version 4.3.1, created on 2023-06-06 23:44:09
  from 'C:\xampp\htdocs\RollingStones\templates\select.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647fa8a9637928_59953966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97b88899de7f0bdf91c116233ad245e767060668' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RollingStones\\templates\\select.tpl',
      1 => 1686087846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647fa8a9637928_59953966 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content">
<h1> Agrega una cancion a un album</h1>
<form action ="add" method=GET>
<input type="text" name="songName" placeholder="Inserte nombre de cancion" >
<select name="albumId">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['select']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_album;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->titulo_album;?>
  </option>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
<button type="submit">Agregar</button>
</form>
</div><?php }
}
