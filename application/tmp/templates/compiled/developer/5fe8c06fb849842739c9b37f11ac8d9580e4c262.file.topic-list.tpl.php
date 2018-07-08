<?php /* Smarty version Smarty-3.1.13, created on 2018-07-08 21:30:37
         compiled from "E:\XAMPP\htdocs\application\frontend\components\topic\topic-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13519806675b4257b04fe869-08051136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fe8c06fb849842739c9b37f11ac8d9580e4c262' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\application\\frontend\\components\\topic\\topic-list.tpl',
      1 => 1531074620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13519806675b4257b04fe869-08051136',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b4257b0519de3_43681144',
  'variables' => 
  array (
    'topics' => 0,
    'topic' => 0,
    'paging' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4257b0519de3_43681144')) {function content_5b4257b0519de3_43681144($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_add_block')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.add_block.php';
if (!is_callable('smarty_function_component')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('topics','paging')),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['topics']->value){?>
    <?php echo smarty_function_add_block(array('group'=>'toolbar','name'=>'component@toolbar-scrollnav.toolbar.scrollnav','show'=>count($_smarty_tpl->tpl_vars['topics']->value)),$_smarty_tpl);?>


    <?php  $_smarty_tpl->tpl_vars['topic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topic']->key => $_smarty_tpl->tpl_vars['topic']->value){
$_smarty_tpl->tpl_vars['topic']->_loop = true;
?>
        <?php echo smarty_function_component(array('_default_short'=>'topic','template'=>'type','topic'=>$_smarty_tpl->tpl_vars['topic']->value,'isList'=>true),$_smarty_tpl);?>

    <?php } ?>

    <?php echo smarty_function_component(array('_default_short'=>'pagination','total'=>+$_smarty_tpl->tpl_vars['paging']->value['iCountPage'],'current'=>+$_smarty_tpl->tpl_vars['paging']->value['iCurrentPage'],'url'=>((string)$_smarty_tpl->tpl_vars['paging']->value['sBaseUrl'])."/page__page__/".((string)$_smarty_tpl->tpl_vars['paging']->value['sGetParams']),'classes'=>'js-pagination-topics'),$_smarty_tpl);?>

<?php }else{ ?>
    <?php echo smarty_function_component(array('_default_short'=>'blankslate','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['empty']),$_smarty_tpl);?>

<?php }?><?php }} ?>