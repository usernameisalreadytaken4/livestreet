<?php /* Smarty version Smarty-3.1.13, created on 2018-07-08 21:30:37
         compiled from "E:\XAMPP\htdocs\application\frontend\components\blog\blocks\blogs-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18814906875b4257b033d479-65615426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e26d6fc688778f5e67ce59803dad7cbb2e302dbc' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\application\\frontend\\components\\blog\\blocks\\blogs-top.tpl',
      1 => 1531074619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18814906875b4257b033d479-65615426',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b4257b0350cf3_20600843',
  'variables' => 
  array (
    'aBlogs' => 0,
    'blog' => 0,
    'items' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4257b0350cf3_20600843')) {function content_5b4257b0350cf3_20600843($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array(), null, 0);?>

<?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value){
$_smarty_tpl->tpl_vars['blog']->_loop = true;
?>
    <?php $_smarty_tpl->_capture_stack[0][] = array('item_content', null, null); ob_start(); ?>
        <?php echo smarty_function_lang(array('_default_short'=>'blog.users.readers_total'),$_smarty_tpl);?>
: <strong><?php echo $_smarty_tpl->tpl_vars['blog']->value->getCountUser();?>
</strong><br>
        <?php echo smarty_function_lang(array('_default_short'=>'blog.topics_total'),$_smarty_tpl);?>
: <strong><?php echo $_smarty_tpl->tpl_vars['blog']->value->getCountTopic();?>
</strong>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('title'=>htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true),'titleUrl'=>$_smarty_tpl->tpl_vars['blog']->value->getUrlFull(),'mods'=>'blog','content'=>Smarty::$_smarty_vars['capture']['item_content'],'image'=>array('path'=>$_smarty_tpl->tpl_vars['blog']->value->getAvatarPath(48),'url'=>$_smarty_tpl->tpl_vars['blog']->value->getUrlFull(),'alt'=>htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true)));?>
<?php } ?>

<?php echo smarty_function_component(array('_default_short'=>'item','template'=>'group','items'=>$_smarty_tpl->tpl_vars['items']->value),$_smarty_tpl);?>

<?php }} ?>