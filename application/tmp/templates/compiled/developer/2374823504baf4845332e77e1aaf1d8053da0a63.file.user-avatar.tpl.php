<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 14:53:24
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/user/avatar/user-avatar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13980944735b34cc34d209b2-09563273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2374823504baf4845332e77e1aaf1d8053da0a63' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/user/avatar/user-avatar.tpl',
      1 => 1529954501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13980944735b34cc34d209b2-09563273',
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
  'unifunc' => 'content_5b34cc34d53076_27391323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cc34d53076_27391323')) {function content_5b34cc34d53076_27391323($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('user','size')),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['sizes'] = new Smarty_variable(array('large'=>200,'default'=>100,'small'=>64,'xsmall'=>48,'xxsmall'=>24,'text'=>24), null, 0);?>

<?php echo smarty_function_component(array('_default_short'=>'avatar','image'=>$_smarty_tpl->tpl_vars['user']->value->getProfileAvatarPath($_smarty_tpl->tpl_vars['sizes']->value[(($tmp = @$_smarty_tpl->tpl_vars['size']->value)===null||$tmp==='' ? 'default' : $tmp)]),'url'=>$_smarty_tpl->tpl_vars['user']->value->getUserWebPath(),'classes'=>'user-item','name'=>$_smarty_tpl->tpl_vars['user']->value->getDisplayName(),'params'=>$_smarty_tpl->tpl_vars['params']->value),$_smarty_tpl);?>
<?php }} ?>