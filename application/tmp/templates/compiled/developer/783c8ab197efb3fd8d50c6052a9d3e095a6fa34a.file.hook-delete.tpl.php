<?php /* Smarty version Smarty-3.1.13, created on 2018-07-03 21:45:32
         compiled from "C:\xampp\htdocs\application\plugins\admin\frontend\components\p-comment\hook-delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2194586135b3bc44c882009-68430530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '783c8ab197efb3fd8d50c6052a9d3e095a6fa34a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\plugins\\admin\\frontend\\components\\p-comment\\hook-delete.tpl',
      1 => 1530188523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2194586135b3bc44c882009-68430530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'comment' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3bc44c88db89_32160692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3bc44c88db89_32160692')) {function content_5b3bc44c88db89_32160692($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_router')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('comment')),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
    <?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin/comments/delete'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'comment.actions-item','link'=>array('url'=>$_tmp1."?id=".((string)$_smarty_tpl->tpl_vars['comment']->value->getId()),'attributes'=>array('target'=>'_blank')),'text'=>$_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['comments']['full_deleting']),$_smarty_tpl);?>

<?php }?>
<?php }} ?>