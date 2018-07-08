<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 19:53:58
         compiled from "C:\xampp\htdocs\application\frontend\components\feed\blocks\block.userfeed-blogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17598066495b3512a6838082-84136389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64ff499051173be4515aa7fb4c3f904739b57e46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\feed\\blocks\\block.userfeed-blogs.tpl',
      1 => 1530188507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17598066495b3512a6838082-84136389',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blogsJoined' => 0,
    'blogsSubscribed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3512a683fd81_52280208',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3512a683fd81_52280208')) {function content_5b3512a683fd81_52280208($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'feed.blogs.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'feed','template'=>'blogs','blogsJoined'=>$_smarty_tpl->tpl_vars['blogsJoined']->value,'blogsSubscribed'=>$_smarty_tpl->tpl_vars['blogsSubscribed']->value),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'feed-blogs','title'=>$_tmp1,'content'=>$_tmp2),$_smarty_tpl);?>
<?php }} ?>