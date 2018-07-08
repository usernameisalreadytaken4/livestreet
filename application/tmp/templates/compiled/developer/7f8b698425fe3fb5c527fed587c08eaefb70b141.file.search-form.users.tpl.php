<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:12
         compiled from "C:\xampp\htdocs\application\frontend\components\user\search-form.users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5690493565b327c733df118-55540763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f8b698425fe3fb5c527fed587c08eaefb70b141' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\user\\search-form.users.tpl',
      1 => 1530188509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5690493565b327c733df118-55540763',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b327c733e2f99_51367037',
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b327c733e2f99_51367037')) {function content_5b327c733e2f99_51367037($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component(array('_default_short'=>'search-form','name'=>'blog','method'=>'post','placeholder'=>$_smarty_tpl->tpl_vars['aLang']->value['user']['search']['placeholder'],'classes'=>'js-tag-search-form','inputClasses'=>'js-search-text-main','inputName'=>'user_login','noSubmitButton'=>true),$_smarty_tpl);?>
<?php }} ?>