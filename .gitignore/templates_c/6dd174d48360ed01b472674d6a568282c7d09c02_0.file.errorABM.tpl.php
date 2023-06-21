<?php
/* Smarty version 4.3.1, created on 2023-06-21 04:48:21
  from 'C:\xampp\htdocs\web-2\tp_especial\templatesABM\errorABM.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649264f53e09a4_06399622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dd174d48360ed01b472674d6a568282c7d09c02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web-2\\tp_especial\\templatesABM\\errorABM.tpl',
      1 => 1687308863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templatesABM/headerABM.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_649264f53e09a4_06399622 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templatesABM/headerABM.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h1>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
