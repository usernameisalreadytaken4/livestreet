<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:46:37
         compiled from "C:\xampp\htdocs\application\frontend\components\topic\topic-type.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18433277675b3502ddce2e62-78781478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af8b23df9cf56f6b077a1940e6f58338b2c2765f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\topic\\topic-type.tpl',
      1 => 1530188509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18433277675b3502ddce2e62-78781478',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'topic' => 0,
    'type' => 0,
    'LS' => 0,
    'template' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3502ddcf2860_30835853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3502ddcf2860_30835853')) {function content_5b3502ddcf2860_30835853($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('topic','isPreview','isList','mods','classes','attributes')),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable($_smarty_tpl->tpl_vars['topic']->value->getType(), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['LS']->value->Topic_IsAllowTopicType($_smarty_tpl->tpl_vars['type']->value)){?>
    <?php $_smarty_tpl->tpl_vars['template'] = new Smarty_variable($_smarty_tpl->tpl_vars['LS']->value->Component_GetTemplatePath('topic',"topic-type-".((string)$_smarty_tpl->tpl_vars['type']->value)), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['template']->value){?>
        <?php echo smarty_function_component(array('_default_short'=>"topic.topic-type-".((string)$_smarty_tpl->tpl_vars['type']->value),'params'=>$_smarty_tpl->tpl_vars['params']->value),$_smarty_tpl);?>

    <?php }else{ ?>
        <?php echo smarty_function_component(array('_default_short'=>'topic','params'=>$_smarty_tpl->tpl_vars['params']->value),$_smarty_tpl);?>

    <?php }?>
<?php }?><?php }} ?>