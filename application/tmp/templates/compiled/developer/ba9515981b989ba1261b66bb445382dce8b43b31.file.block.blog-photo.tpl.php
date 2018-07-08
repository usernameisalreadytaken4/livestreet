<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:48
         compiled from "C:\xampp\htdocs\application\frontend\components\blog\blocks\block.blog-photo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17804820195b3502acb93b67-45373260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba9515981b989ba1261b66bb445382dce8b43b31' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\blog\\blocks\\block.blog-photo.tpl',
      1 => 1530188506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17804820195b3502acb93b67-45373260',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blog' => 0,
    'blockContent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3502acb9b863_55869628',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3502acb9b863_55869628')) {function content_5b3502acb9b863_55869628($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component(array('_default_short'=>'photo','classes'=>'js-blog-avatar','useAvatar'=>false,'hasPhoto'=>$_smarty_tpl->tpl_vars['blog']->value->getAvatar(),'editable'=>$_smarty_tpl->tpl_vars['blog']->value->isAllowEdit(),'targetId'=>$_smarty_tpl->tpl_vars['blog']->value->getId(),'url'=>$_smarty_tpl->tpl_vars['blog']->value->getUrlFull(),'photoPath'=>$_smarty_tpl->tpl_vars['blog']->value->getAvatarBig(),'photoAltText'=>htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true),'assign'=>'blockContent'),$_smarty_tpl);?>


<?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'nopadding transparent blog-photo','content'=>$_smarty_tpl->tpl_vars['blockContent']->value),$_smarty_tpl);?>
<?php }} ?>