<?php /* Smarty version Smarty-3.1.13, created on 2018-06-26 19:26:48
         compiled from "C:\xampp\htdocs\application\frontend\components\user\blocks\block.user-note.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17287465235b326948a60892-08337252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be56f26272f1936c6e07445fb05cb52073b25493' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\user\\blocks\\block.user-note.tpl',
      1 => 1493631808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17287465235b326948a60892-08337252',
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
  'unifunc' => 'content_5b326948a685a3_71491808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b326948a685a3_71491808')) {function content_5b326948a685a3_71491808($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()!=$_smarty_tpl->tpl_vars['oUserProfile']->value->getId()){?>
    <?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'note','classes'=>'js-user-note','note'=>$_smarty_tpl->tpl_vars['oUserProfile']->value->getUserNote(),'targetId'=>$_smarty_tpl->tpl_vars['oUserProfile']->value->getId()),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'nopadding transparent user-note','content'=>$_tmp1),$_smarty_tpl);?>

<?php }?><?php }} ?>