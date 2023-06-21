<?php
/* Smarty version 4.3.1, created on 2023-06-21 08:01:27
  from 'C:\xampp\htdocs\web-2\tp_especial\templates\opcion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649292379d4368_61144815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f15b81b1c7998526bf6678adc0977eff27eeb27' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web-2\\tp_especial\\templates\\opcion.tpl',
      1 => 1687325629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_649292379d4368_61144815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2><?php echo $_smarty_tpl->tpl_vars['opcion']->value->carta;?>
</h2>

<div>
  <img src="<?php echo $_smarty_tpl->tpl_vars['opcion']->value->img_opcion;?>
" alt='imagen'>

<h2><?php echo $_smarty_tpl->tpl_vars['opcion']->value->nombre;?>
</h2>
  
  
  <h3>descripcion:</h3>

  <p><?php echo $_smarty_tpl->tpl_vars['opcion']->value->descripcion;?>
</p>

  <h3>precio:</h3>      
          
 <strong> $ <?php echo $_smarty_tpl->tpl_vars['opcion']->value->precio;?>
</strong>     
         
    
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
