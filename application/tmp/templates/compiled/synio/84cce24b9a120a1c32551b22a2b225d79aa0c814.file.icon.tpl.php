<?php /* Smarty version Smarty-3.1.13, created on 2018-06-26 19:21:56
         compiled from "C:\xampp\htdocs\framework\frontend\components\icon\icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3565097645b326824e97e42-83022107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84cce24b9a120a1c32551b22a2b225d79aa0c814' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\frontend\\components\\icon\\icon.tpl',
      1 => 1493631838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3565097645b326824e97e42-83022107',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    'icon' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b326824ea39c4_30505112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b326824ea39c4_30505112')) {function content_5b326824ea39c4_30505112($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('fa', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('icon','mods','classes','attributes')),$_smarty_tpl);?>


<i class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 fa-<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value,'delimiter'=>'-'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
></i><?php }} ?>