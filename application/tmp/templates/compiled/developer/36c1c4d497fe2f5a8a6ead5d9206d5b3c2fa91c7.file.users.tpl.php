<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 19:53:58
         compiled from "C:\xampp\htdocs\application\frontend\components\feed\users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3605678295b3512a6886299-50901284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36c1c4d497fe2f5a8a6ead5d9206d5b3c2fa91c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\feed\\users.tpl',
      1 => 1530188507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3605678295b3512a6886299-50901284',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3512a688a113_36982658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3512a688a113_36982658')) {function content_5b3512a688a113_36982658($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('users')),$_smarty_tpl);?>


<?php echo smarty_function_component(array('_default_short'=>'user-list-add','users'=>$_smarty_tpl->tpl_vars['users']->value,'classes'=>'js-feed-users','attributes'=>array('data-param-type'=>'users'),'note'=>$_smarty_tpl->tpl_vars['aLang']->value['feed']['users']['note']),$_smarty_tpl);?>
<?php }} ?>