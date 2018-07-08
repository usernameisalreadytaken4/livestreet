<?php /* Smarty version Smarty-3.1.13, created on 2018-07-08 21:28:00
         compiled from "E:\XAMPP\htdocs\framework\frontend\components\tags\search-form.tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13314273035b4257b0149401-20076966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2d74b37b30b20f08fe820aa33196468b86b2992' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\framework\\frontend\\components\\tags\\search-form.tags.tpl',
      1 => 1530188568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13314273035b4257b0149401-20076966',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mods' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b4257b0151101_49131486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4257b0151101_49131486')) {function content_5b4257b0151101_49131486($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_lang')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('mods','classes','attributes')),$_smarty_tpl);?>


<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'tags.search.label'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'search-form','name'=>'tags','mods'=>$_smarty_tpl->tpl_vars['mods']->value,'placeholder'=>$_tmp1,'classes'=>'js-tag-search-form','inputClasses'=>'autocomplete-tags js-tag-search','inputName'=>'tag','value'=>$_smarty_tpl->tpl_vars['tag']->value),$_smarty_tpl);?>
<?php }} ?>