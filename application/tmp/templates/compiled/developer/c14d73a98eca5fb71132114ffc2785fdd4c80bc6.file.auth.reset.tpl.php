<?php /* Smarty version Smarty-3.1.13, created on 2018-07-08 21:30:37
         compiled from "E:\XAMPP\htdocs\application\frontend\components\auth\auth.reset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4794728205b4257b0827293-34941008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c14d73a98eca5fb71132114ffc2785fdd4c80bc6' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\application\\frontend\\components\\auth\\auth.reset.tpl',
      1 => 1531074619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4794728205b4257b0827293-34941008',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b4257b0836ca5_25430279',
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4257b0836ca5_25430279')) {function content_5b4257b0836ca5_25430279($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_component')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<form action="<?php echo smarty_function_router(array('page'=>'auth'),$_smarty_tpl);?>
password-reset/" method="post" class="js-form-validate js-auth-reset-form">
    
    <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'email','label'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['reset']['form']['fields']['mail']['label']),$_smarty_tpl);?>


    <?php echo smarty_function_component(array('_default_short'=>'button','name'=>'submit_reset','mods'=>'primary','text'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['reset']['form']['fields']['submit']['text']),$_smarty_tpl);?>

</form><?php }} ?>