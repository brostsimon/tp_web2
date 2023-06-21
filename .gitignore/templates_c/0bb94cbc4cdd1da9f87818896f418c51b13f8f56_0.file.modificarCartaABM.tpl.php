<?php
/* Smarty version 4.3.1, created on 2023-06-21 05:43:27
  from 'C:\xampp\htdocs\web-2\tp_especial\templatesABM\modificarCartaABM.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649271df683827_65962867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bb94cbc4cdd1da9f87818896f418c51b13f8f56' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web-2\\tp_especial\\templatesABM\\modificarCartaABM.tpl',
      1 => 1687319004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templatesABM/headerABM.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_649271df683827_65962867 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templatesABM/headerABM.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2> modificar carta </h2>
<form action="modificar_carta" method="get">
    
    <input type="hidden" name="id_carta" value="<?php echo $_smarty_tpl->tpl_vars['carta']->value->id_carta;?>
">
    
    <label>clase</label>
    <input type="text" name="clase" value="<?php echo $_smarty_tpl->tpl_vars['carta']->value->clase;?>
" placeholder="ingrese clase" required>
    
    <label>link de imagen</label>
    <input type="text" name="img" value="<?php echo $_smarty_tpl->tpl_vars['carta']->value->img;?>
" placeholder="ingrese link de imagen" required>
    <button type="submit">modificar</button>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
