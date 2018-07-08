<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:21
         compiled from "C:\xampp\htdocs\framework\frontend\components\field\field.hidden.security-key.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11512190925b350291cf8fb4-52002002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5017b6614f822086dd25f6c3e1ae2511293f5145' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\frontend\\components\\field\\field.hidden.security-key.tpl',
      1 => 1530188559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11512190925b350291cf8fb4-52002002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LIVESTREET_SECURITY_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b350291cfce37_98047231',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b350291cfce37_98047231')) {function content_5b350291cfce37_98047231($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component(array('_default_short'=>'field','template'=>'hidden','name'=>'security_ls_key','value'=>$_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value),$_smarty_tpl);?>
<?php }} ?>