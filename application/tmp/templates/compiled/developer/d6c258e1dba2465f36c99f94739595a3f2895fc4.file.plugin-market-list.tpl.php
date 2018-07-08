<?php /* Smarty version Smarty-3.1.13, created on 2018-06-26 21:07:43
         compiled from "C:\xampp\htdocs\application\plugins\admin\frontend\components\p-plugin\plugin-market-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2683496225b3280efe74d72-13336127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6c258e1dba2465f36c99f94739595a3f2895fc4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\plugins\\admin\\frontend\\components\\p-plugin\\plugin-market-list.tpl',
      1 => 1493631928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2683496225b3280efe74d72-13336127',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plugins' => 0,
    'plugin' => 0,
    'aLang' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3280efe84775_06717320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3280efe84775_06717320')) {function content_5b3280efe84775_06717320($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('plugins','pagination')),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['plugins']->value){?>
    <div class="ls-plugin-list">
        <?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value){
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
?>
            <?php echo smarty_function_component(array('_default_short'=>'admin:p-plugin','template'=>'plugin-market','plugin'=>$_smarty_tpl->tpl_vars['plugin']->value),$_smarty_tpl);?>

        <?php } ?>
    </div>
<?php }else{ ?>
    <?php echo smarty_function_component(array('_default_short'=>'admin:blankslate','text'=>$_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['plugins']['install']['no_addons']),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['pagination']->value){?>
    <?php echo smarty_function_component(array('_default_short'=>'admin:pagination','total'=>+$_smarty_tpl->tpl_vars['pagination']->value['iCountPage'],'current'=>+$_smarty_tpl->tpl_vars['pagination']->value['iCurrentPage'],'url'=>((string)$_smarty_tpl->tpl_vars['pagination']->value['sBaseUrl'])."/page__page__/".((string)$_smarty_tpl->tpl_vars['pagination']->value['sGetParams'])),$_smarty_tpl);?>

<?php }?><?php }} ?>