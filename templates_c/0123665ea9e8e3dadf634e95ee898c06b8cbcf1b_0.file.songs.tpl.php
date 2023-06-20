<?php
/* Smarty version 4.3.1, created on 2023-06-20 18:57:28
  from 'C:\xampp\htdocs\REPO2_RS_C_AMPI\RollingStones\templates\songs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6491da7880f487_33307876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0123665ea9e8e3dadf634e95ee898c06b8cbcf1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\REPO2_RS_C_AMPI\\RollingStones\\templates\\songs.tpl',
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
function content_6491da7880f487_33307876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
<ul>
    <h2><?php echo $_smarty_tpl->tpl_vars['title_album']->value;?>
</h2>
    <p>Año de lanzamiento: <?php echo $_smarty_tpl->tpl_vars['year_release']->value;?>
</p>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['songs']->value, 'song');
$_smarty_tpl->tpl_vars['song']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['song']->value) {
$_smarty_tpl->tpl_vars['song']->do_else = false;
?>
        <div class='card'>
            <ol>Titulo de la cancion numero <?php echo $_smarty_tpl->tpl_vars['song']->value->id_song;?>
: <a href="<?php echo BASE_URL;?>
song/<?php echo $_smarty_tpl->tpl_vars['song']->value->id_song;?>
"><?php echo $_smarty_tpl->tpl_vars['song']->value->title_song;?>
</a></ol><br>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php if ((isset($_smarty_tpl->tpl_vars['username']->value))) {?>
    <a href="<?php echo BASE_URL;?>
deleteA/<?php echo $_smarty_tpl->tpl_vars['id_album']->value;?>
">Eliminar</a>   <br><br>
    <a href="<?php echo BASE_URL;?>
editA/<?php echo $_smarty_tpl->tpl_vars['id_album']->value;?>
">Editar</a>
<?php }?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
