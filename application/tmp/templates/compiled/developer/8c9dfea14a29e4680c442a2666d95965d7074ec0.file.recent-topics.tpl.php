<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:07:47
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/activity/blocks/recent-topics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3763536985b34cf93b4cc27-04345149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c9dfea14a29e4680c442a2666d95965d7074ec0' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/activity/blocks/recent-topics.tpl',
      1 => 1529954491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3763536985b34cf93b4cc27-04345149',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'topics' => 0,
    'topic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cf93bf36c9_08092166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cf93bf36c9_08092166')) {function content_5b34cf93bf36c9_08092166($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_modifier_truncate')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/libs/vendor/Smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
if (!is_callable('smarty_function_lang')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.lang.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('topics')),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array('items', null, null); ob_start(); ?>
    <?php  $_smarty_tpl->tpl_vars['topic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topic']->key => $_smarty_tpl->tpl_vars['topic']->value){
$_smarty_tpl->tpl_vars['topic']->_loop = true;
?>
        <?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_truncate(trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['topic']->value->getText())),150,'...'), ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'activity','template'=>'recent-item','user'=>$_smarty_tpl->tpl_vars['topic']->value->getUser(),'topic'=>$_smarty_tpl->tpl_vars['topic']->value,'date'=>$_smarty_tpl->tpl_vars['topic']->value->getDatePublish(),'classes'=>'js-title-topic','attributes'=>array('title'=>$_tmp1)),$_smarty_tpl);?>

    <?php }
if (!$_smarty_tpl->tpl_vars['topic']->_loop) {
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