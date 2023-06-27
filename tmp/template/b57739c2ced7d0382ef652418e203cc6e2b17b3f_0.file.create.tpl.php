<?php
/* Smarty version 4.3.0, created on 2023-06-09 17:12:05
  from 'C:\xampp\htdocs\AeldariBlog\views\units\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_648395a5b9b377_52451885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b57739c2ced7d0382ef652418e203cc6e2b17b3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AeldariBlog\\views\\units\\create.tpl',
      1 => 1686345122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_messages.tpl' => 1,
    'file:../units/_form.tpl' => 1,
  ),
),false)) {
function content_648395a5b9b377_52451885 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card dark-bg dark-gray-bg">
    <div class="card-body">
        <h1 class="card-title">
            <?php echo $_smarty_tpl->tpl_vars['asunto']->value;?>

        </h1>
        <div class="col-md-6">
            <?php $_smarty_tpl->_subTemplateRender("file:../partials/_messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("file:../units/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>
</div>

<style>
body {
  background-color: rgb(0, 0, 0);
}

.dark-gray-bg {
  background-color: #333333;
  color: #ffffff;
}<?php }
}
