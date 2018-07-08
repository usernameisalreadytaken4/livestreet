<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:21
         compiled from "C:\xampp\htdocs\framework\frontend\components\field\field.category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6576468215b350291890039-60820318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1ebe2ed6facdae49032f2392df130cc8cd5549d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\frontend\\components\\field\\field.category.tpl',
      1 => 1530188560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6576468215b350291890039-60820318',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_aRequest' => 0,
    'params' => 0,
    'formField' => 0,
    'categoriesSelected' => 0,
    'category' => 0,
    'categories' => 0,
    'entity' => 0,
    'items' => 0,
    'selected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3502918af433_99857779',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3502918af433_99857779')) {function content_5b3502918af433_99857779($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_field_get_value')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.field_get_value.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>


<?php echo smarty_function_component_define_params(array('params'=>array('categories','categoriesSelected','params','mods','classes','attributes')),$_smarty_tpl);?>



<?php ob_start();?><?php echo smarty_function_field_get_value(array('form'=>$_smarty_tpl->tpl_vars['_aRequest']->value,'name'=>$_smarty_tpl->tpl_vars['params']->value['form_field']),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['formField'] = new Smarty_variable($_tmp1, null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['params']->value['form_fill_current_from_request']&&$_smarty_tpl->tpl_vars['formField']->value){?>
    <?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable($_smarty_tpl->tpl_vars['formField']->value, null, 0);?>
<?php }elseif($_smarty_tpl->tpl_vars['categoriesSelected']->value){?>
    <?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable(array(), null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoriesSelected']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
        <?php $_smarty_tpl->createLocalArrayVariable('selected', null, 0);
$_smarty_tpl->tpl_vars['selected']->value[] = $_smarty_tpl->tpl_vars['category']->value->getId();?>
    <?php } ?>
<?php }?>


<?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array(), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['params']->value['validate_require']){?>
    <?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('value'=>'','text'=>'&mdash;');?>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars['entity'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value['entity'], null, 0);?>
    <?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('value'=>$_smarty_tpl->tpl_vars['entity']->value->getId(),'text'=>$_smarty_tpl->tpl_vars['entity']->value->getTitle(),'level'=>$_smarty_tpl->tpl_vars['category']->value['level']);?>
<?php } ?>


<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'field.category.label'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'select','name'=>((string)$_smarty_tpl->tpl_vars['params']->value['form_field'])."[]",'items'=>$_smarty_tpl->tpl_vars['items']->value,'label'=>$_tmp2,'selectedValue'=>$_smarty_tpl->tpl_vars['selected']->value,'isMultiple'=>$_smarty_tpl->tpl_vars['params']->value['multiple']),$_smarty_tpl);?>
<?php }} ?>