<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 19:53:58
         compiled from "C:\xampp\htdocs\application\frontend\components\feed\blocks\block.userfeed-users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2472246195b3512a6872a16-77724131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '363a54ecaa3e782a4d371ef15557c42519908490' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\feed\\blocks\\block.userfeed-users.tpl',
      1 => 1530188507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2472246195b3512a6872a16-77724131',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3512a687a718_66453157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3512a687a718_66453157')) {function content_5b3512a687a718_66453157($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'feed.users.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'feed','template'=>'users','users'=>$_smarty_tpl->tpl_vars['users']->value),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'feed-users','title'=>$_tmp1,'content'=>$_tmp2),$_smarty_tpl);?>
<?php }} ?>