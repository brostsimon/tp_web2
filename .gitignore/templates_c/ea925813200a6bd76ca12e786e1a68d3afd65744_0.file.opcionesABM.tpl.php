<?php
/* Smarty version 4.3.1, created on 2023-06-21 08:01:44
  from 'C:\xampp\htdocs\web-2\tp_especial\templatesABM\opcionesABM.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649292486748c1_97034410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea925813200a6bd76ca12e786e1a68d3afd65744' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web-2\\tp_especial\\templatesABM\\opcionesABM.tpl',
      1 => 1687326095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templatesABM/headerABM.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_649292486748c1_97034410 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templatesABM/headerABM.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>opciones</h2>

<table>

    <thead>
        <th>nombre</th>
        <th>descripcion</th>
        <th>img_opcion</th>
        <th>precio</th>

    </thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['opciones']->value, 'opcion');
$_smarty_tpl->tpl_vars['opcion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['opcion']->value) {
$_smarty_tpl->tpl_vars['opcion']->do_else = false;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['opcion']->value->nombre;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['opcion']->value->descripcion;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['opcion']->value->img_opcion;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['opcion']->value->precio;?>
</td>
        <td><button><a href="modificar_opcion/<?php echo $_smarty_tpl->tpl_vars['opcion']->value->id_opcion;?>
">modificar</a></button></td>
        <td><button><a href="borrar_opcion/<?php echo $_smarty_tpl->tpl_vars['opcion']->value->id_opcion;?>
">borrar</a></button></td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<?php if ((isset($_smarty_tpl->tpl_vars['mensaje']->value))) {
echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

<?php }?>


<div class="formulario">

<h2>agregar </h2>
<form action="agregar_opcionABM" method="get">
        
        
            <label>nombre de opcion</label>
            <input type="text" name="nombre" placeholder="ingrese nombre de la opcion" required>
        
        
            <label>descripcion</label>
            <input type="text" name="descripcion" placeholder="descripcion" required>
        
        
            <label>link de imagen</label>
            <input type="text" name="img_opcion" placeholder="ingrese link de imagen" required>
        
        
            <label>precio</label>
            <input type="number" name="precio" step="any" placeholder="precio" required>
        
        
            <label>clase</label>
            <select name="clase" required>
                <option value=""></option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carta']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_carta;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->clase;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        
    <button type="submit">agregar</button>
</form>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
