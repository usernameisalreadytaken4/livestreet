<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:44:40
         compiled from "C:\xampp\htdocs\application\frontend\components\toolbar-scrollup\toolbar.scrollup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9731095785b32695c41b8a3-75031419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ccbe0b61ded8b539ba721fe6aafb9edc74dfa95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\toolbar-scrollup\\toolbar.scrollup.tpl',
      1 => 1530188509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9731095785b32695c41b8a3-75031419',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b32695c41f727_78465107',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b32695c41f727_78465107')) {function content_5b32695c41f727_78465107($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'toolbar.scrollup.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'toolbar.item','icon'=>'chevron-up','classes'=>'js-toolbar-scrollup','mods'=>'scrollup','attributes'=>array('title'=>$_tmp1)),$_smarty_tpl);?>
<?php }} ?>