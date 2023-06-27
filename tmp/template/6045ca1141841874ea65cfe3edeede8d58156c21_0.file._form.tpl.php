<?php
/* Smarty version 4.3.0, created on 2023-06-09 11:41:58
  from 'C:\xampp\htdocs\AeldariBlog\views\roles\_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64834846c8cd81_00534938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6045ca1141841874ea65cfe3edeede8d58156c21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AeldariBlog\\views\\roles\\_form.tpl',
      1 => 1686325008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64834846c8cd81_00534938 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];
echo $_smarty_tpl->tpl_vars['process']->value;?>
" method="post">
    <div class="mb-3">
        <label for="nombre" class="form-label">Rol</label>
        <input type="text" name="nombre" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['role']->value['nombre'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control" id="nombre" placeholder="Nombre del rol">
    </div>
    <div class="mb-3">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="send" value="<?php echo $_smarty_tpl->tpl_vars['send']->value;?>
">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form><?php }
}
