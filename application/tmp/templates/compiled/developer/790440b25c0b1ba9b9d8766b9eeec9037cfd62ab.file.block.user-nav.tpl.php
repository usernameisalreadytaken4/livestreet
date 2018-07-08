<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 20:06:38
         compiled from "C:\xampp\htdocs\application\frontend\components\user\blocks\block.user-nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5223045895b327a5c5bd385-16310555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '790440b25c0b1ba9b9d8766b9eeec9037cfd62ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\user\\blocks\\block.user-nav.tpl',
      1 => 1530188509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5223045895b327a5c5bd385-16310555',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b327a5c5c1208_56057165',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b327a5c5c1208_56057165')) {function content_5b327a5c5c1208_56057165($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'user','template'=>'nav'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'nopadding transparent user-nav','content'=>$_tmp1),$_smarty_tpl);?>
<?php }} ?>