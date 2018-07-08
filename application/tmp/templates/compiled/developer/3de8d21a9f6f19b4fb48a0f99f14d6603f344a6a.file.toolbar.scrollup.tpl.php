<?php /* Smarty version Smarty-3.1.13, created on 2018-07-08 21:30:37
         compiled from "E:\XAMPP\htdocs\application\frontend\components\toolbar-scrollup\toolbar.scrollup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6291870295b4257b08a42b7-34657663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3de8d21a9f6f19b4fb48a0f99f14d6603f344a6a' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\application\\frontend\\components\\toolbar-scrollup\\toolbar.scrollup.tpl',
      1 => 1531074620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6291870295b4257b08a42b7-34657663',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b4257b08abfb7_01360756',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4257b08abfb7_01360756')) {function content_5b4257b08abfb7_01360756($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'toolbar.scrollup.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'toolbar.item','icon'=>'chevron-up','classes'=>'js-toolbar-scrollup','mods'=>'scrollup','attributes'=>array('title'=>$_tmp1)),$_smarty_tpl);?>
<?php }} ?>