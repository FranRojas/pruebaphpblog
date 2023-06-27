<?php
/* Smarty version 4.3.0, created on 2023-06-02 17:34:42
  from 'C:\xampp\htdocs\AeldariBlog\views\partials\_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647a60720c6725_15847730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acbbf517ed57e0ae463ffd53ddba053d9d15661a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AeldariBlog\\views\\partials\\_messages.tpl',
      1 => 1685739384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647a60720c6725_15847730 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['_error']->value))) {?>
    <div style="margin-top: 40px;"></div>
    <p class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</p>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['_mensaje']->value))) {?>
    <div style="margin-top: 40px;"></div>
    <p class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>
</p>
<?php }
}
}
