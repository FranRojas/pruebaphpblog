<?php
/* Smarty version 4.3.0, created on 2023-06-09 12:14:26
  from 'C:\xampp\htdocs\AeldariBlog\views\units\show.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64834fe2416d50_75662663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e68edfb8907ee344b6649c4b7b63205ba0ba03c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AeldariBlog\\views\\units\\show.tpl',
      1 => 1686326232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64834fe2416d50_75662663 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-body">
        <h1 class="card-title">
            <?php echo $_smarty_tpl->tpl_vars['asunto']->value;?>

        </h1>
        <div class="col-md-6">
            <table class="table table-hover">
                <tr>
                    <th>Id:</th>
                    <td><?php echo $_smarty_tpl->tpl_vars['unidad']->value['id'];?>
</td>
                </tr>
                <tr>
                    <th>Nombre:</th>
                    <td><?php echo $_smarty_tpl->tpl_vars['unidad']->value['nombre'];?>
</td>
                </tr>
                <tr>
                    <th>Fecha creación:</th>
                    <td><?php echo $_smarty_tpl->tpl_vars['unidad']->value['created_at'];?>
</td>
                </tr>
                <tr>
                    <th>Fecha actualización:</th>
                    <td><?php echo $_smarty_tpl->tpl_vars['unidad']->value['updated_at'];?>
</td>
                </tr>
            </table>
            <p>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
units" class="btn btn-primary">Volver</a>
            </p>
        </div>
    </div>
</div><?php }
}
