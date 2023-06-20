<?php
/* Smarty version 4.3.1, created on 2023-06-20 18:57:32
  from 'C:\xampp\htdocs\REPO2_RS_C_AMPI\RollingStones\templates\song.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6491da7c920b85_62117875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b212ab7cf818b81a0ae30078bcfa48a3bed35aff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\REPO2_RS_C_AMPI\\RollingStones\\templates\\song.tpl',
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
function content_6491da7c920b85_62117875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
    <h3 class="card-title">Nombre de la cancion: <?php echo $_smarty_tpl->tpl_vars['song']->value->title_song;?>
</h3>
    <p class="card-text">Cancion numero <?php echo $_smarty_tpl->tpl_vars['song']->value->id_song;?>
 en el orden de todas las canciones de los Rolling Stones, album numero <a href="<?php echo BASE_URL;?>
album/<?php echo $_smarty_tpl->tpl_vars['song']->value->id_album;?>
"><?php echo $_smarty_tpl->tpl_vars['song']->value->id_album;?>
</a></p>
    <?php if ((isset($_smarty_tpl->tpl_vars['username']->value))) {?>
        <a href="<?php echo BASE_URL;?>
deleteS/<?php echo $_smarty_tpl->tpl_vars['song']->value->id_song;?>
"> Eliminar </a> <br><br>
        <a href="<?php echo BASE_URL;?>
editS/<?php echo $_smarty_tpl->tpl_vars['song']->value->id_song;?>
/<?php echo $_smarty_tpl->tpl_vars['song']->value->id_album;?>
">Editar</a>  
    <?php }?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
