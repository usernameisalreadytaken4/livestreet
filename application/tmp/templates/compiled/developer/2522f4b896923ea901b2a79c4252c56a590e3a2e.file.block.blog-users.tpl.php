<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:48
         compiled from "C:\xampp\htdocs\application\frontend\components\blog\blocks\block.blog-users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2309326345b3502acc33e12-31575815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2522f4b896923ea901b2a79c4252c56a590e3a2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\blog\\blocks\\block.blog-users.tpl',
      1 => 1530188506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2309326345b3502acc33e12-31575815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'countBlogUsers' => 0,
    'titleLang' => 0,
    'blog' => 0,
    'blogUsers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3502acc43818_78667889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3502acc43818_78667889')) {function content_5b3502acc43818_78667889($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('titleLang')),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array('block_title', null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->tpl_vars['countBlogUsers']->value;?>
 <?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titleLang']->value)===null||$tmp==='' ? 'blog.readers_declension' : $tmp);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_lang(array('_default_short'=>$_tmp1,'count'=>$_smarty_tpl->tpl_vars['countBlogUsers']->value,'plural'=>true),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['countBlogUsers']->value){?>
    <?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'user','template'=>'avatar-list','users'=>$_smarty_tpl->tpl_vars['blogUsers']->value,'blankslateParams'=>array('mods'=>'no-background')),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'blog-users','title'=>Smarty::$_smarty_vars['capture']['block_title'],'titleUrl'=>((string)$_smarty_tpl->tpl_vars['blog']->value->getUrlFull())."users/",'content'=>$_tmp2),$_smarty_tpl);?>

<?php }?><?php }} ?>