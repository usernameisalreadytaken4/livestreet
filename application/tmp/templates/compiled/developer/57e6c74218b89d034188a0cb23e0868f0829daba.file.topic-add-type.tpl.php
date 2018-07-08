<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:08:32
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/topic/topic-add-type.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8497771585b34cfc0506867-63899470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57e6c74218b89d034188a0cb23e0868f0829daba' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/topic/topic-add-type.tpl',
      1 => 1529954500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8497771585b34cfc0506867-63899470',
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
  'unifunc' => 'content_5b34cfc05435e0_22013438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cfc05435e0_22013438')) {function content_5b34cfc05435e0_22013438($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
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