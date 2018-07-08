<?php /* Smarty version Smarty-3.1.13, created on 2018-07-08 21:30:40
         compiled from "E:\XAMPP\htdocs\application\frontend\components\user\list\user-list-loop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9185025225b4257b3993223-23502133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b226888717063253b7dfcecdc63a362f38074d1' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\application\\frontend\\components\\user\\list\\user-list-loop.tpl',
      1 => 1531074621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9185025225b4257b3993223-23502133',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b4257b399af38_51538548',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4257b399af38_51538548')) {function content_5b4257b399af38_51538548($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('users')),$_smarty_tpl);?>


<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
    <?php echo smarty_function_component(array('_default_short'=>'user','template'=>'list-item','user'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);?>

<?php } ?><?php }} ?>