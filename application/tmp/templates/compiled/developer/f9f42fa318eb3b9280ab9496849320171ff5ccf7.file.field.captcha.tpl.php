<?php /* Smarty version Smarty-3.1.13, created on 2018-07-08 21:28:00
         compiled from "E:\XAMPP\htdocs\framework\frontend\components\field\field.captcha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10112937365b4257b063af21-34437445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9f42fa318eb3b9280ab9496849320171ff5ccf7' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\framework\\frontend\\components\\field\\field.captcha.tpl',
      1 => 1530188560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10112937365b4257b063af21-34437445',
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
  'unifunc' => 'content_5b4257b0646aa2_83222231',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4257b0646aa2_83222231')) {function content_5b4257b0646aa2_83222231($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('label','captchaName','name','captchaType','mods','attributes','classes')),$_smarty_tpl);?>


<?php echo smarty_function_component(array('_default_short'=>'field','template'=>"captcha-".((string)$_smarty_tpl->tpl_vars['captchaType']->value),'params'=>$_smarty_tpl->tpl_vars['params']->value),$_smarty_tpl);?>
<?php }} ?>