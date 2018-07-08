<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:08:32
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/property/input/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2875699415b34cfc0c57566-01388809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81ab2d3d52b203f6868e0b1893df79e4aafcb1f3' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/property/input/list.tpl',
      1 => 1529954497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2875699415b34cfc0c57566-01388809',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'properties' => 0,
    'property' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cfc0c6c9c5_76355810',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cfc0c6c9c5_76355810')) {function content_5b34cfc0c6c9c5_76355810($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('properties')),$_smarty_tpl);?>


<?php  $_smarty_tpl->tpl_vars['property'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['property']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['properties']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['property']->key => $_smarty_tpl->tpl_vars['property']->value){
$_smarty_tpl->tpl_vars['property']->_loop = true;
?>
    <?php echo smarty_function_component(array('_default_short'=>'property','template'=>'input.item','property'=>$_smarty_tpl->tpl_vars['property']->value),$_smarty_tpl);?>

<?php } ?><?php }} ?>