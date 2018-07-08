<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:05
         compiled from "C:\xampp\htdocs\application\frontend\components\blog\list\blog-list-loop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4431929205b350281f04c87-39259639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba5388be1e8d513414b57370eed38eccd2625eff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\blog\\list\\blog-list-loop.tpl',
      1 => 1530188506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4431929205b350281f04c87-39259639',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blogs' => 0,
    'blog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b350281f33a85_42688220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b350281f33a85_42688220')) {function content_5b350281f33a85_42688220($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('blogs')),$_smarty_tpl);?>


<?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value){
$_smarty_tpl->tpl_vars['blog']->_loop = true;
?>
    <?php echo smarty_function_component(array('_default_short'=>'blog','template'=>'list-item','blog'=>$_smarty_tpl->tpl_vars['blog']->value),$_smarty_tpl);?>

<?php } ?><?php }} ?>