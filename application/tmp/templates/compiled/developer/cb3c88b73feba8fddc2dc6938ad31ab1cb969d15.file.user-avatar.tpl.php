<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:48
         compiled from "C:\xampp\htdocs\application\frontend\components\user\avatar\user-avatar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19961530805b3502accbc9b6-37696253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb3c88b73feba8fddc2dc6938ad31ab1cb969d15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\user\\avatar\\user-avatar.tpl',
      1 => 1530188509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19961530805b3502accbc9b6-37696253',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'size' => 0,
    'sizes' => 0,
    'user' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3502accc8538_00275125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3502accc8538_00275125')) {function content_5b3502accc8538_00275125($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('user','size')),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['sizes'] = new Smarty_variable(array('large'=>200,'default'=>100,'small'=>64,'xsmall'=>48,'xxsmall'=>24,'text'=>24), null, 0);?>

<?php echo smarty_function_component(array('_default_short'=>'avatar','image'=>$_smarty_tpl->tpl_vars['user']->value->getProfileAvatarPath($_smarty_tpl->tpl_vars['sizes']->value[(($tmp = @$_smarty_tpl->tpl_vars['size']->value)===null||$tmp==='' ? 'default' : $tmp)]),'url'=>$_smarty_tpl->tpl_vars['user']->value->getUserWebPath(),'classes'=>'user-item','name'=>$_smarty_tpl->tpl_vars['user']->value->getDisplayName(),'params'=>$_smarty_tpl->tpl_vars['params']->value),$_smarty_tpl);?>
<?php }} ?>