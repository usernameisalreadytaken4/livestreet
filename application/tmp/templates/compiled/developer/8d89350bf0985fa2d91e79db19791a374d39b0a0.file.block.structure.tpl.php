<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:08:02
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/plugins/page/frontend/skin/default/blocks/block.structure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9618775225b34cfa2e2e9d0-52417284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d89350bf0985fa2d91e79db19791a374d39b0a0' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/plugins/page/frontend/skin/default/blocks/block.structure.tpl',
      1 => 1529958458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9618775225b34cfa2e2e9d0-52417284',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aPagesTree' => 0,
    'aPage' => 0,
    'oPage' => 0,
    'oCurrentPage' => 0,
    'aItems' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cfa2e7b3a3_41414855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cfa2e7b3a3_41414855')) {function content_5b34cfa2e7b3a3_41414855($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
if (!is_callable('smarty_function_lang')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.lang.php';
?><?php $_smarty_tpl->_capture_stack[0][] = array('block_content', null, null); ob_start(); ?>
	<?php  $_smarty_tpl->tpl_vars['aPage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aPage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPagesTree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aPage']->key => $_smarty_tpl->tpl_vars['aPage']->value){
$_smarty_tpl->tpl_vars['aPage']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars['oPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['aPage']->value['entity'], null, 0);?>
		<?php $_smarty_tpl->createLocalArrayVariable('aItems', null, 0);
$_smarty_tpl->tpl_vars['aItems']->value[] = array('text'=>(htmlspecialchars($_smarty_tpl->tpl_vars['oPage']->value->getTitle(), ENT_QUOTES, 'UTF-8', true)),'url'=>$_smarty_tpl->tpl_vars['oPage']->value->getWebUrl(),'attributes'=>array('style'=>"margin-left: ".((string)($_smarty_tpl->tpl_vars['aPage']->value['level']*20))."px;"),'name'=>$_smarty_tpl->tpl_vars['oPage']->value->getUrlFull());?>
	<?php } ?>

	<?php echo smarty_function_component(array('_default_short'=>'nav','name'=>'pages_tree','classes'=>'actionbar-item-link','activeItem'=>$_smarty_tpl->tpl_vars['oCurrentPage']->value->getUrlFull(),'mods'=>'stacked pills','items'=>$_smarty_tpl->tpl_vars['aItems']->value),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'plugin.page.structure_title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','title'=>$_tmp1,'content'=>Smarty::$_smarty_vars['capture']['block_content']),$_smarty_tpl);?>
<?php }} ?>