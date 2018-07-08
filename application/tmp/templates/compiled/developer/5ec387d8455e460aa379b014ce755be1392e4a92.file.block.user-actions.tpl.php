<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:04:03
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/user/blocks/block.user-actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17802737045b34ceb3263149-45471292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ec387d8455e460aa379b014ce755be1392e4a92' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/user/blocks/block.user-actions.tpl',
      1 => 1529954501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17802737045b34ceb3263149-45471292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'oUserProfile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34ceb327d043_13627325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34ceb327d043_13627325')) {function content_5b34ceb327d043_13627325($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()!=$_smarty_tpl->tpl_vars['oUserProfile']->value->getId()){?>
    <?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'user','template'=>'actions','user'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'nopadding transparent user-actions','content'=>$_tmp1),$_smarty_tpl);?>

<?php }?><?php }} ?>