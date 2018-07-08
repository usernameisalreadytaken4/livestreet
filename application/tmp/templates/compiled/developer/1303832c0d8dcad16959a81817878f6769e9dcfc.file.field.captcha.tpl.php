<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 20:06:26
         compiled from "C:\xampp\htdocs\framework\frontend\components\field\field.captcha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19393511275b35159297c182-75364139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1303832c0d8dcad16959a81817878f6769e9dcfc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\frontend\\components\\field\\field.captcha.tpl',
      1 => 1530188560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19393511275b35159297c182-75364139',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'captchaType' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b351592983e84_75958058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b351592983e84_75958058')) {function content_5b351592983e84_75958058($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('label','captchaName','name','captchaType','mods','attributes','classes')),$_smarty_tpl);?>


<?php echo smarty_function_component(array('_default_short'=>'field','template'=>"captcha-".((string)$_smarty_tpl->tpl_vars['captchaType']->value),'params'=>$_smarty_tpl->tpl_vars['params']->value),$_smarty_tpl);?>
<?php }} ?>