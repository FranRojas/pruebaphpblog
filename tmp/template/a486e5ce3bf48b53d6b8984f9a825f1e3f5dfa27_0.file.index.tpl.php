<?php
/* Smarty version 4.3.0, created on 2023-06-09 11:35:14
  from 'C:\xampp\htdocs\AeldariBlog\views\roles\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_648346b21aac55_73350473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a486e5ce3bf48b53d6b8984f9a825f1e3f5dfa27' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AeldariBlog\\views\\roles\\index.tpl',
      1 => 1686283738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648346b21aac55_73350473 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
body {
  background-color: rgb(0, 0, 0);
}

.dark-gray-bg {
  background-color: #333333;
  color: #ffffff;
}


</style>


<div class="container-fluid ">
<div class="card dark-gray-bg">
  <div class="col-lg-6  p-4 m-4 gap-3 ">
  <div> 
  <h3 class="card-header"><?php echo $_smarty_tpl->tpl_vars['asunto']->value;?>
 </h3>
  </div>
  <div class="card-body"> 

  <?php if ((isset($_smarty_tpl->tpl_vars['roles']->value)) && count($_smarty_tpl->tpl_vars['roles']->value)) {?>
     <table class = "table table-hover">
        <thead>
         <th>
            <tr>
                <th> Id </th>
                <th> Nombre </th>
            </tr>
         </th>  
        </thead> 
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'model');
$_smarty_tpl->tpl_vars['model']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['model']->value) {
$_smarty_tpl->tpl_vars['model']->do_else = false;
?>
                <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['model']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
 </td>
            </tr>
                
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
     </table>
     <?php } else { ?>
       <p class="text-info"> <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
 </p>
  <?php }?>

  </div>
  </div>
  
</div>
</div><?php }
}
