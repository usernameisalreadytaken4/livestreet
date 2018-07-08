<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:06:38
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/comment/toolbar.comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8095756205b34cf4e311c13-26626183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebd14120edfb5f1bd5f53ee4369d038b09538ccd' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/comment/toolbar.comment.tpl',
      1 => 1529954493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8095756205b34cf4e311c13-26626183',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cf4e32d0d7_10042782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cf4e32d0d7_10042782')) {function content_5b34cf4e32d0d7_10042782($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('toolbar_comments', null, null); ob_start(); ?>
    <div class="ls-comments-toolbar-update js-toolbar-comments-update" title="<?php echo smarty_function_lang(array('_default_short'=>'comments.update'),$_smarty_tpl);?>
">
        <?php echo smarty_function_component(array('_default_short'=>'icon','icon'=>'refresh'),$_smarty_tpl);?>

    </div>
    <div class="ls-comments-toolbar-count js-toolbar-comments-count" title="<?php echo smarty_function_lang(array('_default_short'=>'comments.count_new'),$_smarty_tpl);?>
">0</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo smarty_function_component(array('_default_short'=>'toolbar.item','html'=>Smarty::$_smarty_vars['capture']['toolbar_comments'],'classes'=>'js-comments-toolbar','mods'=>'comments'),$_smarty_tpl);?>
<?php }} ?>