<?php
/* Smarty version 4.3.1, created on 2023-06-05 23:20:34
  from 'C:\xampp\htdocs\web-2\tp_especial\templates\opselec.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647e51a2e74a05_82951820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '009113c56f3c11061b0de0a647ae472ecbf5202d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web-2\\tp_especial\\templates\\opselec.tpl',
      1 => 1685999966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_647e51a2e74a05_82951820 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>titulo <?php echo $_smarty_tpl->tpl_vars['opciones']->value[0]->carta;?>
</h1>

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
          <td> <?php echo $_smarty_tpl->tpl_vars['op']->value->nombre;?>
 </td>
          <td> <?php echo $_smarty_tpl->tpl_vars['op']->value->descripcion;?>
 </td>
        </tr>    
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
</table><?php }
}
