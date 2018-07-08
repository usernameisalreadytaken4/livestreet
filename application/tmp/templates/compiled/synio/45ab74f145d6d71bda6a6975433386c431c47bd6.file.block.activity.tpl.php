<?php /* Smarty version Smarty-3.1.13, created on 2018-06-26 19:26:51
         compiled from "C:\xampp\htdocs\application\plugins\admin\frontend\components\p-dashboard\blocks\block.activity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19258354995b32694bc60f59-73844415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45ab74f145d6d71bda6a6975433386c431c47bd6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\plugins\\admin\\frontend\\components\\p-dashboard\\blocks\\block.activity.tpl',
      1 => 1493631928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19258354995b32694bc60f59-73844415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'events' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b32694bc68c59_90827932',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b32694bc68c59_90827932')) {function content_5b32694bc68c59_90827932($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('events','count')),$_smarty_tpl);?>


<?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'activity','events'=>$_smarty_tpl->tpl_vars['events']->value,'count'=>$_smarty_tpl->tpl_vars['count']->value,'classes'=>'p-dashboard-activity js-dashboard-activity'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'admin:block','title'=>$_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['users_stats']['activity'],'content'=>$_tmp1),$_smarty_tpl);?>
<?php }} ?>