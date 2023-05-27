<?php
/* Smarty version 4.3.1, created on 2023-05-27 20:51:00
  from 'C:\xampp\htdocs\RollingStones\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6472511426cdd3_18956870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec561fe82273f1889a5ccbc007d121fda72b6c26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RollingStones\\templates\\header.tpl',
      1 => 1685213398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6472511426cdd3_18956870 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</title>
            <link href="css\style.css" rel="stylesheet">
        </head>
        <body>
            <header>
                <h1><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</h1>
                <a href='home'>Home</a>
                <a href='albums'>Albums</a>
                <a href='album'>Elegir un album</a>
                <a href='sobre'>Sobre</a>
            </header><?php }
}
