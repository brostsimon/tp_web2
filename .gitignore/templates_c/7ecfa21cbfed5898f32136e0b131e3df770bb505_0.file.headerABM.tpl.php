<?php
/* Smarty version 4.3.1, created on 2023-06-21 08:01:38
  from 'C:\xampp\htdocs\web-2\tp_especial\templatesABM\headerABM.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64929242350574_93228772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ecfa21cbfed5898f32136e0b131e3df770bb505' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web-2\\tp_especial\\templatesABM\\headerABM.tpl',
      1 => 1687301849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64929242350574_93228772 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp_especial</title>
    <base href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
css/estilo.css">
</head>

<body>
    <header>
        <h1>restaurante</h1>
        <nav>
            <ul class="menu">
                <li><button><a href="cartaABM">cartaABM</a></button></li>
                <li><button><a href="opcionABM">opcionABM</a></button></li>
                <li><button><a href="logout">logout</a></button></li>
              
            </ul>
        
        </nav>
    </header>



<?php }
}
