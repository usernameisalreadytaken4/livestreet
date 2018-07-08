<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:03
         compiled from "C:\xampp\htdocs\application\frontend\components\blog\search-form.blogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3095317965b327a6801e691-01750797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '779fc190cac2cf255f68ed7714a8a93c194fd25c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\blog\\search-form.blogs.tpl',
      1 => 1530188506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3095317965b327a6801e691-01750797',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b327a68022516_55434555',
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b327a68022516_55434555')) {function content_5b327a68022516_55434555($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component(array('_default_short'=>'search-form','name'=>'blog','method'=>'post','placeholder'=>$_smarty_tpl->tpl_vars['aLang']->value['blog']['search']['placeholder'],'inputClasses'=>'js-search-text-main','inputName'=>'blog_title','noSubmitButton'=>true),$_smarty_tpl);?>
<?php }} ?>