<?php
/* Smarty version 4.3.0, created on 2023-06-09 11:41:58
  from 'C:\xampp\htdocs\AeldariBlog\views\roles\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64834846bb1063_75341982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8aeff1a3ed5631f9db5caa85710978fc2a844f4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AeldariBlog\\views\\roles\\create.tpl',
      1 => 1686325073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_messages.tpl' => 1,
    'file:../roles/_form.tpl' => 1,
  ),
),false)) {
function content_64834846bb1063_75341982 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-body">
        <h1 class="card-title">
            <?php echo $_smarty_tpl->tpl_vars['asunto']->value;?>

        </h1>
        <div class="col-md-6">
            <?php $_smarty_tpl->_subTemplateRender("file:../partials/_messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("file:../roles/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>
</div><?php }
}
