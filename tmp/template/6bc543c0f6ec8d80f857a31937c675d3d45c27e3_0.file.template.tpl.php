<?php
/* Smarty version 4.3.0, created on 2023-06-02 19:49:05
  from 'C:\xampp\htdocs\AeldariBlog\views\layout\default\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647a7ff11e6382_21068259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bc543c0f6ec8d80f857a31937c675d3d45c27e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AeldariBlog\\views\\layout\\default\\template.tpl',
      1 => 1685749741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:link_css.tpl' => 1,
    'file:menu.tpl' => 1,
    'file:link_js.tpl' => 1,
  ),
),false)) {
function content_647a7ff11e6382_21068259 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
   <head>
   	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="frame de aplicaciones web">

    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? "Aeldari Blog" ?? null : $tmp);?>
</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php $_smarty_tpl->_subTemplateRender("file:link_css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


   </head>
   <body>
  <?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <div class="container">


            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['_content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
          </div>

    <?php $_smarty_tpl->_subTemplateRender("file:link_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <noscript>
      <p>Debe tener el soporte de Javascript habilitado</p>
    </noscript>

    <?php if ((isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])) && count($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_layoutParams']->value['js'], 'js');
$_smarty_tpl->tpl_vars['js']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->do_else = false;
?>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"><?php echo '</script'; ?>
>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php }?>
  </body>
</html><?php }
}
