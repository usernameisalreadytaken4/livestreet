<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:08:55
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/blog/list/blog-list-loop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8907808395b34cfd76a12f5-10665498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e7198fb9cb96eb305f1cefc41204110a106d053' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/blog/list/blog-list-loop.tpl',
      1 => 1529954493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8907808395b34cfd76a12f5-10665498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blogs' => 0,
    'blog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cfd76b7142_96865465',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cfd76b7142_96865465')) {function content_5b34cfd76b7142_96865465($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('blogs')),$_smarty_tpl);?>


<?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value){
$_smarty_tpl->tpl_vars['blog']->_loop = true;
?>
    <?php echo smarty_function_component(array('_default_short'=>'blog','template'=>'list-item','blog'=>$_smarty_tpl->tpl_vars['blog']->value),$_smarty_tpl);?>

<?php } ?><?php }} ?>