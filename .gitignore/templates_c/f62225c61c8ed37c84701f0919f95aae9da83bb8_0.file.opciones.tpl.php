<?php
/* Smarty version 4.3.1, created on 2023-06-21 08:01:23
  from 'C:\xampp\htdocs\web-2\tp_especial\templates\opciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649292335581b9_49476902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f62225c61c8ed37c84701f0919f95aae9da83bb8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web-2\\tp_especial\\templates\\opciones.tpl',
      1 => 1687325608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_649292335581b9_49476902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>todas las opciones</h2>

<table>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['opciones']->value, 'op');
$_smarty_tpl->tpl_vars['op']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['op']->value) {
$_smarty_tpl->tpl_vars['op']->do_else = false;
?>

        <tr>
          <td> <img src="<?php echo $_smarty_tpl->tpl_vars['op']->value->img_opcion;?>
" alt='imagen'></td>
          <td><button><a href="ver_detalle/<?php echo $_smarty_tpl->tpl_vars['op']->value->id_opcion;?>
">ver <?php echo $_smarty_tpl->tpl_vars['op']->value->carta;?>
</a></button></td>
        </tr>    
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
</table>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
