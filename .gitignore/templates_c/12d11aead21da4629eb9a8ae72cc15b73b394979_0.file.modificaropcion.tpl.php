<?php
/* Smarty version 4.3.1, created on 2023-06-21 08:01:56
  from 'C:\xampp\htdocs\web-2\tp_especial\templatesABM\modificaropcion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6492925434b813_72520637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12d11aead21da4629eb9a8ae72cc15b73b394979' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web-2\\tp_especial\\templatesABM\\modificaropcion.tpl',
      1 => 1687318975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templatesABM/headerABM.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6492925434b813_72520637 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templatesABM/headerABM.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>modificar opcion</h2>
<form action="modificar_opcion" method="get">

    <input type="hidden" name="id_opcion" value="<?php echo $_smarty_tpl->tpl_vars['opcion']->value->id_opcion;?>
">
    
    <label>nombre de opcion</label>
    <input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['opcion']->value->nombre;?>
" placeholder="ingrese nombre de la opcion" required>
    
    <label>descripcion</label>
    <input type="text" name="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['opcion']->value->descripcion;?>
" placeholder="descripcion" required>
    
    <label>link de imagen</label>
    <input type="text" name="img_opcion" value="<?php echo $_smarty_tpl->tpl_vars['opcion']->value->img_opcion;?>
" placeholder="ingrese link de imagen" required>
    
    <label>precio</label>
    <input type="number" name="precio"  value="<?php echo $_smarty_tpl->tpl_vars['opcion']->value->precio;?>
" step="any" placeholder="precio" required>

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

    <button type="submit">modificar</button>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
