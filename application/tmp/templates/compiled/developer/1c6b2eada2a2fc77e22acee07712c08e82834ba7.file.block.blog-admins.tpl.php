<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:48
         compiled from "C:\xampp\htdocs\application\frontend\components\blog\blocks\block.blog-admins.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4950988765b3502acc4f395-43955491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c6b2eada2a2fc77e22acee07712c08e82834ba7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\blog\\blocks\\block.blog-admins.tpl',
      1 => 1530188506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4950988765b3502acc4f395-43955491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blog' => 0,
    'aLang' => 0,
    'blogAdministrators' => 0,
    'blogModerators' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3502acc62c13_06003706',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3502acc62c13_06003706')) {function content_5b3502acc62c13_06003706($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('block_content', null, null); ob_start(); ?>
    
    <?php echo smarty_function_component(array('_default_short'=>'user','template'=>'list-small','users'=>array($_smarty_tpl->tpl_vars['blog']->value->getOwner()),'title'=>$_smarty_tpl->tpl_vars['aLang']->value['blog']['owner']),$_smarty_tpl);?>


    
    <?php if (count($_smarty_tpl->tpl_vars['blogAdministrators']->value)){?>
        <?php ob_start();?><?php echo count($_smarty_tpl->tpl_vars['blogAdministrators']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'user','template'=>'list-small','users'=>$_smarty_tpl->tpl_vars['blogAdministrators']->value,'title'=>((string)$_smarty_tpl->tpl_vars['aLang']->value['blog']['administrators'])." (".$_tmp1.")"),$_smarty_tpl);?>

    <?php }?>

    
    <?php if (count($_smarty_tpl->tpl_vars['blogModerators']->value)){?>
        <?php ob_start();?><?php echo count($_smarty_tpl->tpl_vars['blogModerators']->value);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'user','template'=>'list-small','users'=>$_smarty_tpl->tpl_vars['blogModerators']->value,'title'=>((string)$_smarty_tpl->tpl_vars['aLang']->value['blog']['moderators'])." (".$_tmp2.")"),$_smarty_tpl);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'blog.administrators'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'blog-admins','title'=>$_tmp3,'content'=>Smarty::$_smarty_vars['capture']['block_content']),$_smarty_tpl);?>
<?php }} ?>