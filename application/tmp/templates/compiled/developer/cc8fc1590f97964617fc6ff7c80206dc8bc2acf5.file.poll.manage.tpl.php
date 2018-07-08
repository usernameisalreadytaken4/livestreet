<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:54
         compiled from "C:\xampp\htdocs\application\frontend\components\poll\poll.manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4873681705b3502b258dff1-95749653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc8fc1590f97964617fc6ff7c80206dc8bc2acf5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\poll\\poll.manage.tpl',
      1 => 1530188507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4873681705b3502b258dff1-95749653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'targetType' => 0,
    'targetId' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3502b2599b77_90498101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3502b2599b77_90498101')) {function content_5b3502b2599b77_90498101($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
if (!is_callable('smarty_insert_block')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\insert.block.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('targetId','targetType')),$_smarty_tpl);?>


<div class="fieldset ls-poll-manage js-poll-manage" data-type="<?php echo $_smarty_tpl->tpl_vars['targetType']->value;?>
" data-target-id="<?php echo $_smarty_tpl->tpl_vars['targetId']->value;?>
">
    <header class="fieldset-header">
        <h3 class="fieldset-title"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['poll']['polls'];?>
</h3>
    </header>

    <div class="fieldset-body">
        
        <?php echo smarty_function_component(array('_default_short'=>'button','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['add'],'type'=>'button','classes'=>'ls-poll-manage-add js-poll-manage-add'),$_smarty_tpl);?>


        
        <?php echo smarty_insert_block(array('block' => "pollFormItems", 'params' => array('target_type'=>$_smarty_tpl->tpl_vars['targetType']->value,'target_id'=>$_smarty_tpl->tpl_vars['targetId']->value)),$_smarty_tpl);?>

    </div>
</div><?php }} ?>