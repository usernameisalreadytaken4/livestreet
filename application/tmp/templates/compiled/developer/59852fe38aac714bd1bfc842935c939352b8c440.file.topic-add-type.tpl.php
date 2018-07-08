<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:54
         compiled from "C:\xampp\htdocs\application\frontend\components\topic\topic-add-type.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5644388845b3502b236eff1-65708465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59852fe38aac714bd1bfc842935c939352b8c440' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\topic\\topic-add-type.tpl',
      1 => 1530188509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5644388845b3502b236eff1-65708465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'typeCode' => 0,
    'LS' => 0,
    'template' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3502b237e9f5_28967187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3502b237e9f5_28967187')) {function content_5b3502b237e9f5_28967187($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('topic','type','blogs','blogId','skipBlogs','mods','classes','attributes')),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['typeCode'] = new Smarty_variable($_smarty_tpl->tpl_vars['type']->value->getCode(), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['LS']->value->Topic_IsAllowTopicType($_smarty_tpl->tpl_vars['typeCode']->value)){?>
    <?php $_smarty_tpl->tpl_vars['template'] = new Smarty_variable($_smarty_tpl->tpl_vars['LS']->value->Component_GetTemplatePath('topic',"topic-add-type-".((string)$_smarty_tpl->tpl_vars['typeCode']->value)), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['template']->value){?>
        <?php echo smarty_function_component(array('_default_short'=>"topic.topic-add-type-".((string)$_smarty_tpl->tpl_vars['typeCode']->value),'params'=>$_smarty_tpl->tpl_vars['params']->value),$_smarty_tpl);?>

    <?php }else{ ?>
        <?php echo smarty_function_component(array('_default_short'=>'topic.add','params'=>$_smarty_tpl->tpl_vars['params']->value),$_smarty_tpl);?>

    <?php }?>
<?php }?><?php }} ?>