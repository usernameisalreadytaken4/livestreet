<?php /* Smarty version Smarty-3.1.13, created on 2018-07-08 21:30:37
         compiled from "E:\XAMPP\htdocs\application\frontend\components\activity\blocks\recent-comments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19330674055b4257afef1529-02179639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68bb4ab4bf44936a1cacd4a2f655da70c2e9ef1c' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\application\\frontend\\components\\activity\\blocks\\recent-comments.tpl',
      1 => 1531074619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19330674055b4257afef1529-02179639',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b4257aff10925_60117216',
  'variables' => 
  array (
    'comments' => 0,
    'comment' => 0,
    'topic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4257aff10925_60117216')) {function content_5b4257aff10925_60117216($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_modifier_truncate')) include 'E:\\XAMPP\\htdocs\\framework\\libs\\vendor\\Smarty\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_function_component')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
if (!is_callable('smarty_function_lang')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('comments')),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array('items', null, null); ob_start(); ?>
    <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
        <?php $_smarty_tpl->tpl_vars['topic'] = new Smarty_variable($_smarty_tpl->tpl_vars['comment']->value->getTarget(), null, 0);?>

        <?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_truncate(trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['comment']->value->getText())),100,'...'), ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'activity','template'=>'recent-item','user'=>$_smarty_tpl->tpl_vars['comment']->value->getUser(),'comment'=>$_smarty_tpl->tpl_vars['comment']->value,'topic'=>$_smarty_tpl->tpl_vars['topic']->value,'date'=>$_smarty_tpl->tpl_vars['comment']->value->getDate(),'classes'=>'js-title-comment','attributes'=>array('title'=>$_tmp1)),$_smarty_tpl);?>

			
    <?php }
if (!$_smarty_tpl->tpl_vars['comment']->_loop) {
?>
        <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'common.empty'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'blankslate','text'=>$_tmp2,'mods'=>'no-background'),$_smarty_tpl);?>

    <?php } ?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo smarty_function_component(array('_default_short'=>'item','template'=>'group','items'=>Smarty::$_smarty_vars['capture']['items']),$_smarty_tpl);?>
<?php }} ?>