<?php /* Smarty version Smarty-3.1.13, created on 2018-07-08 21:30:37
         compiled from "E:\XAMPP\htdocs\application\frontend\components\auth\modal.auth.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8136474245b4257b05297e7-84339678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7c681d0ef9f08e7303d833f1643a838c5925f5f' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\application\\frontend\\components\\auth\\modal.auth.tpl',
      1 => 1531074619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8136474245b4257b05297e7-84339678',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b4257b0544d74_87398179',
  'variables' => 
  array (
    'auth_tab_reg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4257b0544d74_87398179')) {function content_5b4257b0544d74_87398179($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
if (!is_callable('smarty_function_lang')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
?>

<?php if (!Config::Get('general.reg.invite')){?>
    <?php echo smarty_function_component(array('_default_short'=>'auth','template'=>'registration','assign'=>'auth_tab_reg'),$_smarty_tpl);?>

<?php }else{ ?>
    <?php echo smarty_function_component(array('_default_short'=>'auth','template'=>'invite','assign'=>'auth_tab_reg'),$_smarty_tpl);?>

<?php }?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'auth.authorization'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'auth.login.title'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'auth','template'=>'login'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'auth.registration.title'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'auth.reset.title'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'auth','template'=>'reset'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'modal','title'=>$_tmp1,'options'=>array('center'=>'false'),'showFooter'=>false,'classes'=>'js-modal-default','mods'=>'auth','id'=>'modal-login','tabs'=>array('tabs'=>array(array('text'=>$_tmp2,'content'=>$_tmp3,'classes'=>'js-auth-tab-login'),array('text'=>$_tmp4,'content'=>$_smarty_tpl->tpl_vars['auth_tab_reg']->value,'classes'=>'js-auth-tab-reg'),array('text'=>$_tmp5,'content'=>$_tmp6)))),$_smarty_tpl);?>
<?php }} ?>