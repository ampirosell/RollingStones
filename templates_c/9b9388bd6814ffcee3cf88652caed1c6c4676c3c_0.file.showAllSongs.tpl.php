<?php
/* Smarty version 4.3.1, created on 2023-06-20 19:45:13
  from 'C:\xampp\htdocs\RollingStones\templates\showAllSongs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6491e5a979caa8_85777337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b9388bd6814ffcee3cf88652caed1c6c4676c3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RollingStones\\templates\\showAllSongs.tpl',
      1 => 1687282984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6491e5a979caa8_85777337 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['songs']->value, 'song');
$_smarty_tpl->tpl_vars['song']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['song']->value) {
$_smarty_tpl->tpl_vars['song']->do_else = false;
?>
        <h3 class="card-title"><a href="<?php echo BASE_URL;?>
song/<?php echo $_smarty_tpl->tpl_vars['song']->value->id_song;?>
"><?php echo $_smarty_tpl->tpl_vars['song']->value->title_song;?>
</a></h3>
        <p>Es la canción numero <?php echo $_smarty_tpl->tpl_vars['song']->value->id_song;?>
 del album numero
        <a href="<?php echo BASE_URL;?>
album/<?php echo $_smarty_tpl->tpl_vars['song']->value->id_album;?>
"><?php echo $_smarty_tpl->tpl_vars['song']->value->id_album;?>
</a></p><br>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
