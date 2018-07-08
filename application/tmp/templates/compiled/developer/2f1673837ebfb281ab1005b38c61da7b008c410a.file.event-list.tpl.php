<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:52:43
         compiled from "C:\xampp\htdocs\application\frontend\components\activity\event-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7282411635b35044b2cc764-95983769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f1673837ebfb281ab1005b38c61da7b008c410a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\activity\\event-list.tpl',
      1 => 1530188505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7282411635b35044b2cc764-95983769',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dateLast' => 0,
    'events' => 0,
    'event' => 0,
    'dateAdded' => 0,
    'dateNow' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b35044b31a979_66404896',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b35044b31a979_66404896')) {function content_5b35044b31a979_66404896($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_date_format')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.date_format.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('dateLast','events')),$_smarty_tpl);?>



<?php ob_start();?><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['dateLast']->value,'format'=>"Y-m-d",'notz'=>1),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['dateLast'] = new Smarty_variable($_smarty_tpl->tpl_vars['dateLast']->value ? $_tmp1 : false, null, 0);?>
<?php ob_start();?><?php echo smarty_function_date_format(array('date'=>time(),'format'=>"Y-m-d",'notz'=>1),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['dateNow'] = new Smarty_variable($_tmp2, null, 0);?>

<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
    <?php ob_start();?><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['event']->value->getDateAdded(),'format'=>"Y-m-d",'notz'=>1),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['dateAdded'] = new Smarty_variable($_tmp3, null, 0);?>

    
    <?php if ($_smarty_tpl->tpl_vars['dateAdded']->value!=$_smarty_tpl->tpl_vars['dateLast']->value){?>
        <?php $_smarty_tpl->tpl_vars['dateLast'] = new Smarty_variable($_smarty_tpl->tpl_vars['dateAdded']->value, null, 0);?>

        <li class="activity-date">
            <?php if ($_smarty_tpl->tpl_vars['dateNow']->value==$_smarty_tpl->tpl_vars['dateLast']->value){?>
                <?php echo $_smarty_tpl->tpl_vars['aLang']->value['date']['today'];?>

            <?php }else{ ?>
                <?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['event']->value->getDateAdded(),'format'=>"j F Y"),$_smarty_tpl);?>

            <?php }?>
        </li>
    <?php }?>

    
    <?php echo smarty_function_component(array('_default_short'=>'activity','template'=>'event','event'=>$_smarty_tpl->tpl_vars['event']->value),$_smarty_tpl);?>

<?php } ?><?php }} ?>