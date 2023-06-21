<?php
/* Smarty version 4.3.1, created on 2023-06-21 08:01:14
  from 'C:\xampp\htdocs\web-2\tp_especial\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6492922a002225_47530818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '626825912d5e9740a1639af92e3aea63a097586f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web-2\\tp_especial\\templates\\login.tpl',
      1 => 1687325652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6492922a002225_47530818 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="formulario">
    <form action="verify" method="POST">
        <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>

        
            <label>Usuario</label>
            <input type="text" name="username" placeholder="Ingrese nombre">
        

        
            <label>Password</label>
            <input type="password" name="password" placeholder="Password">
        

        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <div>
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
        <?php }?>

        <button type="submit">Ingresar</button>
    </form>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
