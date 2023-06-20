<?php
/* Smarty version 4.3.1, created on 2023-06-20 19:11:27
  from 'C:\xampp\htdocs\REPO2_RS_C_AMPI\RollingStones\templates\addSong.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6491ddbfe16408_79177219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '839d52277e2329fdc4a27fd126ff3b2868f7cd78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\REPO2_RS_C_AMPI\\RollingStones\\templates\\addSong.tpl',
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
function content_6491ddbfe16408_79177219 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
    <h1> Agrega una cancion a un album</h1>
    <form action="addS" method="post">
        <label for="songName" >Titulo de la cancion</label><br>
        <input type="text" name="songName" placeholder="Inserte nombre de cancion"><br>
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
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
