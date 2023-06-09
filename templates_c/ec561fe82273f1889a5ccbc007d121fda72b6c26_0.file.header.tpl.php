<?php
/* Smarty version 4.3.1, created on 2023-06-08 03:18:21
  from 'C:\xampp\htdocs\RollingStones\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64812c5d5b87d0_81129201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec561fe82273f1889a5ccbc007d121fda72b6c26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RollingStones\\templates\\header.tpl',
      1 => 1686186528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64812c5d5b87d0_81129201 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</title>
            <link rel="stylesheet" href="<?php echo BASE_URL;?>
css\style.css">
        </head>
        <body>
            <header class="navbar">
                <h1 class="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</h1>
                <ul>
                    <li><a href='<?php echo BASE_URL;?>
home'>Home</a></li>
                    <li><a href='<?php echo BASE_URL;?>
albums'>Albums</a></li>
                    <li><a href='<?php echo BASE_URL;?>
songs'>Canciones</a></li>
                    <li><a href='<?php echo BASE_URL;?>
sobre'>Sobre</a></li>
                    <?php if ((isset($_smarty_tpl->tpl_vars['username']->value))) {?>
                        <li><a href='<?php echo BASE_URL;?>
addAlbum'>Agregar album nuevo</a></li>
                        <li><a href='<?php echo BASE_URL;?>
addSong'>Agregar cancion en album</a></li>
                        <li><a href='<?php echo BASE_URL;?>
logout'>LOGOUT <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a></li>
                    <?php } else { ?>
                        <li><a href='<?php echo BASE_URL;?>
login'>Login</a></li>
                    <?php }?>
                </ul>
            </header><?php }
}
