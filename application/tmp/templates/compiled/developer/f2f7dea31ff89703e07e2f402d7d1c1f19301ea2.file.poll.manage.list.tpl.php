<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:54
         compiled from "C:\xampp\htdocs\application\frontend\components\poll\poll.manage.list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11613170315b3502b25a9576-03208152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2f7dea31ff89703e07e2f402d7d1c1f19301ea2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\poll\\poll.manage.list.tpl',
      1 => 1530188507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11613170315b3502b25a9576-03208152',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aPollItems' => 0,
    'poll' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3502b25ad3f3_22481297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3502b25ad3f3_22481297')) {function content_5b3502b25ad3f3_22481297($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<ul class="ls-poll-manage-list js-poll-manage-list">
    <?php if ($_smarty_tpl->tpl_vars['aPollItems']->value){?>
        <?php  $_smarty_tpl->tpl_vars['poll'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['poll']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPollItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['poll']->key => $_smarty_tpl->tpl_vars['poll']->value){
$_smarty_tpl->tpl_vars['poll']->_loop = true;
?>
            <?php echo smarty_function_component(array('_default_short'=>'poll','template'=>'manage.item','poll'=>$_smarty_tpl->tpl_vars['poll']->value),$_smarty_tpl);?>

        <?php } ?>
    <?php }?>
</ul><?php }} ?>