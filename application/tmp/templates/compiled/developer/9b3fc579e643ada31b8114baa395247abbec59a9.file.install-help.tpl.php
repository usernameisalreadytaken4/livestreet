<?php /* Smarty version Smarty-3.1.13, created on 2018-06-26 21:07:43
         compiled from "C:\xampp\htdocs\application\plugins\admin\frontend\components\p-plugin\install-help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20395868565b3280efe45f69-48584159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b3fc579e643ada31b8114baa395247abbec59a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\plugins\\admin\\frontend\\components\\p-plugin\\install-help.tpl',
      1 => 1493631928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20395868565b3280efe45f69-48584159',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3280efe49de7_92694121',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3280efe49de7_92694121')) {function content_5b3280efe49de7_92694121($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component(array('_default_short'=>'details','classes'=>'js-details-default ls-plugin-install-help','title'=>$_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['plugins']['install']['tip_button'],'content'=>$_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['plugins']['install']['tip']),$_smarty_tpl);?>
<?php }} ?>