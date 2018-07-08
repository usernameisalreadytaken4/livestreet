<?php /* Smarty version Smarty-3.1.13, created on 2018-07-08 21:30:40
         compiled from "E:\XAMPP\htdocs\application\frontend\components\user\search-form.users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18191828465b4257b38c4179-60063419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcbabfd542bf05859eaf18e7deb09c11777b95de' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\application\\frontend\\components\\user\\search-form.users.tpl',
      1 => 1531074620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18191828465b4257b38c4179-60063419',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b4257b38c7ff3_75319206',
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4257b38c7ff3_75319206')) {function content_5b4257b38c7ff3_75319206($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component(array('_default_short'=>'search-form','name'=>'blog','method'=>'post','placeholder'=>$_smarty_tpl->tpl_vars['aLang']->value['user']['search']['placeholder'],'classes'=>'js-tag-search-form','inputClasses'=>'js-search-text-main','inputName'=>'user_login','noSubmitButton'=>true),$_smarty_tpl);?>
<?php }} ?>