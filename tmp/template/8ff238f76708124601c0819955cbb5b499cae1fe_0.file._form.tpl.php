<?php
/* Smarty version 4.3.0, created on 2023-06-09 18:02:44
  from 'C:\xampp\htdocs\AeldariBlog\views\units\_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6483a18489e6e1_24753224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ff238f76708124601c0819955cbb5b499cae1fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AeldariBlog\\views\\units\\_form.tpl',
      1 => 1686348159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6483a18489e6e1_24753224 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];
echo $_smarty_tpl->tpl_vars['process']->value;?>
" method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['unit']->value['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control" id="name" placeholder="Nombre del unidad">
        <label for="unit_type" class="form-label">Tipo</label>
        <input type="text" name="unit_type" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['unit']->value['unit_type'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control" id="unit_type" placeholder="Tipo de unidad">
      
    </div>
    <div class="mb-3">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="send" value="<?php echo $_smarty_tpl->tpl_vars['send']->value;?>
">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form><?php }
}
