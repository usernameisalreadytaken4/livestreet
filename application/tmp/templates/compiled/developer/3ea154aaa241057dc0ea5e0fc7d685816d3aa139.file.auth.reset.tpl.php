<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 20:06:26
         compiled from "C:\xampp\htdocs\application\frontend\components\auth\auth.reset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20753665915b351592a33b37-10572736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ea154aaa241057dc0ea5e0fc7d685816d3aa139' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\auth\\auth.reset.tpl',
      1 => 1530188505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20753665915b351592a33b37-10572736',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b351592a3b833_37529736',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b351592a3b833_37529736')) {function content_5b351592a3b833_37529736($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<form action="<?php echo smarty_function_router(array('page'=>'auth'),$_smarty_tpl);?>
password-reset/" method="post" class="js-form-validate js-auth-reset-form">
    
    <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'email','label'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['reset']['form']['fields']['mail']['label']),$_smarty_tpl);?>


    <?php echo smarty_function_component(array('_default_short'=>'button','name'=>'submit_reset','mods'=>'primary','text'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['reset']['form']['fields']['submit']['text']),$_smarty_tpl);?>

</form><?php }} ?>