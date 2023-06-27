<?php
/* Smarty version 4.3.0, created on 2023-06-09 18:07:27
  from 'C:\xampp\htdocs\AeldariBlog\views\units\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6483a29fec30b2_85474122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55312a4e41efcbb4d6aa69c0f4950bd6d2059641' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AeldariBlog\\views\\units\\index.tpl',
      1 => 1686348445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6483a29fec30b2_85474122 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
body {
  background-color: rgb(0, 0, 0);
}

.dark-gray-bg {
  background-color: #333333;
  color: #ffffff;
}


</style>

<div class="card  dark-bg dark-gray-bg">
    <div class="card-body   m-4 ">
        <h1 class="card-title">
            <?php echo $_smarty_tpl->tpl_vars['asunto']->value;?>

            
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
units/create" class="btn btn-outline-secondary">Nueva Unidad
            </a>
        </h1>
        <?php if ((isset($_smarty_tpl->tpl_vars['eldar_units']->value)) && count($_smarty_tpl->tpl_vars['eldar_units']->value)) {?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['eldar_units']->value, 'model');
$_smarty_tpl->tpl_vars['model']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['model']->value) {
$_smarty_tpl->tpl_vars['model']->do_else = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['model']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['model']->value['name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['model']->value['unit_type'];?>
</td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
units/show/<?php echo $_smarty_tpl->tpl_vars['model']->value['id'];?>
" class="btn btn-success btn-sm">Ver</a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
units/edit/<?php echo $_smarty_tpl->tpl_vars['model']->value['id'];?>
" class="btn btn-warning btn-sm">Editar</a>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        <?php } else { ?>
            <p class="text-info"><?php echo $_smarty_tpl->tpl_vars['notice']->value;?>
</p>
        <?php }?>
    </div>
</div>
<?php }
}
