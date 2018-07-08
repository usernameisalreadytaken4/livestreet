<?php /* Smarty version Smarty-3.1.13, created on 2018-06-26 19:21:56
         compiled from "C:\xampp\htdocs\framework\frontend\components\badge\badge.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21441055495b326824e269a6-39166356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a7e960529e69d4d2c107c12881100fe262f906f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\frontend\\components\\badge\\badge.tpl',
      1 => 1493631838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21441055495b326824e269a6-39166356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b326824e363a4_13892637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b326824e363a4_13892637')) {function content_5b326824e363a4_13892637($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-badge', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('value','mods','classes','attributes')),$_smarty_tpl);?>





<?php if ($_smarty_tpl->tpl_vars['value']->value){?>
    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
        <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

    </div>
<?php }?><?php }} ?>