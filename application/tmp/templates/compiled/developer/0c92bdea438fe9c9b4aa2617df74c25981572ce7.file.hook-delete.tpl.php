<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:20:04
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/plugins/admin/frontend/components/p-comment/hook-delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8154531925b34d2744e63e0-37023465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c92bdea438fe9c9b4aa2617df74c25981572ce7' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/plugins/admin/frontend/components/p-comment/hook-delete.tpl',
      1 => 1529954537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8154531925b34d2744e63e0-37023465',
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
  'unifunc' => 'content_5b34d27450fca5_72925901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34d27450fca5_72925901')) {function content_5b34d27450fca5_72925901($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_router')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('comment')),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
    <?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin/comments/delete'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'comment.actions-item','link'=>array('url'=>$_tmp1."?id=".((string)$_smarty_tpl->tpl_vars['comment']->value->getId()),'attributes'=>array('target'=>'_blank')),'text'=>$_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['comments']['full_deleting']),$_smarty_tpl);?>

<?php }?>
<?php }} ?>