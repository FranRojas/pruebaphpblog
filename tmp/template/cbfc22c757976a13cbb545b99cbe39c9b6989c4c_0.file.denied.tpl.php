<?php
/* Smarty version 4.3.0, created on 2023-06-09 01:01:11
  from 'C:\xampp\htdocs\AeldariBlog\views\error\denied.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6482b21784a644_94386299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbfc22c757976a13cbb545b99cbe39c9b6989c4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AeldariBlog\\views\\error\\denied.tpl',
      1 => 1686243296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6482b21784a644_94386299 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
body {
  background-color: rgb(0, 0, 0);
}

.dark-gray-bg {
  background-color: #333333;
  color: #ffffff;
}

<main class="app-content">
    <div class="page-error tile">
        <h1><i class="fa fa-exclamation-circle"></i> Error 403: Página no permitida</h1>
        <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
        <p><a class="btn btn-primary" href="javascript:window.history.back();">Volver</a></p>
    </div>
</main><?php }
}
