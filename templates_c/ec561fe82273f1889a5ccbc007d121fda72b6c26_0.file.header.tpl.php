<?php
/* Smarty version 4.3.1, created on 2023-05-27 22:00:23
  from 'C:\xampp\htdocs\RollingStones\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64726157785236_99434494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec561fe82273f1889a5ccbc007d121fda72b6c26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RollingStones\\templates\\header.tpl',
      1 => 1685217592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64726157785236_99434494 (Smarty_Internal_Template $_smarty_tpl) {
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
            <header class="navbar">
                <h1 class="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</h1>
                <ul>
                <li><a href='home'>Home</a></li>
                <li><a href='albums'>Albums</a></li>
                <li><a href='album'>Elegir un album</a></li>
                <li><a href='sobre'>Sobre</a></li>
                </ul>
            </header><?php }
}
