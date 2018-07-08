<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:44:40
         compiled from "C:\xampp\htdocs\framework\frontend\components\tags\search-form.tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1270371385b32695c177b80-52387849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9891ea6c18b76e5b9d49061d599bd083de7696b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\frontend\\components\\tags\\search-form.tags.tpl',
      1 => 1530188568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1270371385b32695c177b80-52387849',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b32695c17f884_06319934',
  'variables' => 
  array (
    'mods' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b32695c17f884_06319934')) {function content_5b32695c17f884_06319934($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('mods','classes','attributes')),$_smarty_tpl);?>


<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'tags.search.label'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'search-form','name'=>'tags','mods'=>$_smarty_tpl->tpl_vars['mods']->value,'placeholder'=>$_tmp1,'classes'=>'js-tag-search-form','inputClasses'=>'autocomplete-tags js-tag-search','inputName'=>'tag','value'=>$_smarty_tpl->tpl_vars['tag']->value),$_smarty_tpl);?>
<?php }} ?>