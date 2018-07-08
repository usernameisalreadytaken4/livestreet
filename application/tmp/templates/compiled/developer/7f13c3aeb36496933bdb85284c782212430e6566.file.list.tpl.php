<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:46:37
         compiled from "C:\xampp\htdocs\application\frontend\components\property\output\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6349248445b3502dddf0725-94349351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f13c3aeb36496933bdb85284c782212430e6566' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\property\\output\\list.tpl',
      1 => 1530188508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6349248445b3502dddf0725-94349351',
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
  'unifunc' => 'content_5b3502dddf8424_99975902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3502dddf8424_99975902')) {function content_5b3502dddf8424_99975902($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?><?php echo smarty_function_component_define_params(array('params'=>array('properties')),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['properties']->value){?>
    <div class="ls-property-list">
        <?php  $_smarty_tpl->tpl_vars['property'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['property']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['properties']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['property']->key => $_smarty_tpl->tpl_vars['property']->value){
$_smarty_tpl->tpl_vars['property']->_loop = true;
?>
            <?php echo smarty_function_component(array('_default_short'=>'property','template'=>'output.item','property'=>$_smarty_tpl->tpl_vars['property']->value),$_smarty_tpl);?>

        <?php } ?>
    </div>
<?php }?><?php }} ?>