<?php
/* Smarty version 4.3.1, created on 2023-06-20 19:07:40
  from 'C:\xampp\htdocs\REPO2_RS_C_AMPI\RollingStones\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6491dcdc40fd87_23417476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83189a49b2ed759126ec3d1b4804d6cea7852769' => 
    array (
      0 => 'C:\\xampp\\htdocs\\REPO2_RS_C_AMPI\\RollingStones\\templates\\header.tpl',
      1 => 1687280855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6491dcdc40fd87_23417476 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</title>
            <link rel="icon" type="image/x-icon" href="imgs/favicon.png">
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
                    <?php if ((isset($_smarty_tpl->tpl_vars['username']->value))) {?>
                        <li><a href='<?php echo BASE_URL;?>
addAlbum'>Agregar album nuevo</a></li>
                        <li><a href='<?php echo BASE_URL;?>
addSong'>Agregar cancion en album</a></li>
                        <li><a href='<?php echo BASE_URL;?>
sobre'>Sobre nosotras</a></li>
                        <li><a href='<?php echo BASE_URL;?>
logout'>LogOut <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a></li>
                    <?php } else { ?>
                        <li><a href='<?php echo BASE_URL;?>
sobre'>Sobre nosotras</a></li>
                        <li><a href='<?php echo BASE_URL;?>
login'>Login</a></li>
                    <?php }?>
                </ul>
            </header><?php }
}
