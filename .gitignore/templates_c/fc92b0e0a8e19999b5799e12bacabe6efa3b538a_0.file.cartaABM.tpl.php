<?php
/* Smarty version 4.3.1, created on 2023-06-21 08:01:38
  from 'C:\xampp\htdocs\web-2\tp_especial\templatesABM\cartaABM.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649292421685f3_37126961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc92b0e0a8e19999b5799e12bacabe6efa3b538a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web-2\\tp_especial\\templatesABM\\cartaABM.tpl',
      1 => 1687326051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templatesABM/headerABM.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_649292421685f3_37126961 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templatesABM/headerABM.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>carta</h2>

<table>

    <thead>
        <th>clase</th>
        <th>link de imagen</th>
    </thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arreglo']->value, 'arr');
$_smarty_tpl->tpl_vars['arr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['arr']->value) {
$_smarty_tpl->tpl_vars['arr']->do_else = false;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['arr']->value->clase;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['arr']->value->img;?>
</td>
        <td><button><a href="modificar_carta/<?php echo $_smarty_tpl->tpl_vars['arr']->value->id_carta;?>
">modificar</a></button></td>
        <td><button><a href="borrar_carta/<?php echo $_smarty_tpl->tpl_vars['arr']->value->id_carta;?>
">borrar</a></button></td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<?php if ((isset($_smarty_tpl->tpl_vars['mensaje']->value))) {?>
 <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

<?php }?>


<h2>agregar </h2>
<form action="agregar_carta" method="get">

    <label>clase</label>
    <input type="text" name="clase" placeholder="ingrese clase" required>
    
    <label>link de imagen</label>
    <input type="text" name="img" placeholder="ingrese link de imagen" required>
    
    <button type="submit">agregar</button>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
