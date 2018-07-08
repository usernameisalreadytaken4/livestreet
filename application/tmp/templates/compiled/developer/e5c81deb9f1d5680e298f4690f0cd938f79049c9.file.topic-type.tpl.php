<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 14:53:24
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/topic/topic-type.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3564301375b34cc348bdfb5-76326015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5c81deb9f1d5680e298f4690f0cd938f79049c9' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/topic/topic-type.tpl',
      1 => 1529954500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3564301375b34cc348bdfb5-76326015',
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
  'unifunc' => 'content_5b34cc348f84a9_73114417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cc348f84a9_73114417')) {function content_5b34cc348f84a9_73114417($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
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