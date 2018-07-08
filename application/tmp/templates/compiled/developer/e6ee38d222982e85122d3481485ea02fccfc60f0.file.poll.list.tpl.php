<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:46:37
         compiled from "C:\xampp\htdocs\application\frontend\components\poll\poll.list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20379722495b3502dde233a7-82612165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6ee38d222982e85122d3481485ea02fccfc60f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\poll\\poll.list.tpl',
      1 => 1530188507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20379722495b3502dde233a7-82612165',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'polls' => 0,
    'poll' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3502dde2b0b2_41193175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3502dde2b0b2_41193175')) {function content_5b3502dde2b0b2_41193175($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php  $_smarty_tpl->tpl_vars['poll'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['poll']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['polls']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['poll']->key => $_smarty_tpl->tpl_vars['poll']->value){
$_smarty_tpl->tpl_vars['poll']->_loop = true;
?>
    <?php echo smarty_function_component(array('_default_short'=>'poll','poll'=>$_smarty_tpl->tpl_vars['poll']->value),$_smarty_tpl);?>

<?php } ?><?php }} ?>