<?php
/* Smarty version 4.3.1, created on 2023-06-21 08:01:17
  from 'C:\xampp\htdocs\web-2\tp_especial\templates\carta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6492922de32a86_04230831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83f36f3f60175d4bc193c51ae368e9fe789a949d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web-2\\tp_especial\\templates\\carta.tpl',
      1 => 1687314726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6492922de32a86_04230831 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>clasificacion</h1>
<div class="portada">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carta']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>

        <div class="itemportada">
            <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->img;?>
" alt='imagen'>
            <button> <a href="clase/<?php echo $_smarty_tpl->tpl_vars['item']->value->id_carta;?>
" >ver <?php echo $_smarty_tpl->tpl_vars['item']->value->clase;?>
</a></button>
        </div>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
</div>   
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
