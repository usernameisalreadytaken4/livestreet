<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:54
         compiled from "C:\xampp\htdocs\application\frontend\components\blog\blocks\block.blog-info-note.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9456241565b3502b230d556-42496204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2ac37d3af210009a9bd86156599291d3c4a04c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\blog\\blocks\\block.blog-info-note.tpl',
      1 => 1530188506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9456241565b3502b230d556-42496204',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3502b23113d4_95354204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3502b23113d4_95354204')) {function content_5b3502b23113d4_95354204($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'topic.blocks.tip.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'topic.blocks.tip.text'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'info','title'=>$_tmp1,'content'=>$_tmp2),$_smarty_tpl);?>
<?php }} ?>