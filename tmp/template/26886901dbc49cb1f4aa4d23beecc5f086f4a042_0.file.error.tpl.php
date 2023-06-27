<?php
/* Smarty version 4.3.0, created on 2023-06-08 12:52:51
  from 'C:\xampp\htdocs\AeldariBlog\views\error\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6482076373b073_67625807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26886901dbc49cb1f4aa4d23beecc5f086f4a042' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AeldariBlog\\views\\error\\error.tpl',
      1 => 1686243169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6482076373b073_67625807 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
body {
  background-color: rgb(0, 0, 0);
}

.dark-gray-bg {
  background-color: #333333;
  color: #ffffff;
}


</style>

<main class="container-fluid dark-gray-bg ">
    <div class="page-error tile  row m-4 ">
        <h1><i class="fa fa-exclamation-circle"></i> Error 404: Página no encontrada</h1>
        <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
        <p><a class="btn btn-primary" href="javascript:window.history.back();">Volver</a></p>
    </div>
</main><?php }
}
