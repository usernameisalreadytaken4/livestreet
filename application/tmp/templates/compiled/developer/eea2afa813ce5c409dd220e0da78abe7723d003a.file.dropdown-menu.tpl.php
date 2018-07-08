<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:04
         compiled from "C:\xampp\htdocs\framework\frontend\components\dropdown\dropdown-menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10299616545b32695ab6a4b1-46488044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eea2afa813ce5c409dd220e0da78abe7723d003a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\frontend\\components\\dropdown\\dropdown-menu.tpl',
      1 => 1530188553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10299616545b32695ab6a4b1-46488044',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b32695ab76036_44479835',
  'variables' => 
  array (
    'name' => 0,
    'activeItem' => 0,
    'classes' => 0,
    'attributes' => 0,
    'items' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b32695ab76036_44479835')) {function content_5b32695ab76036_44479835($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('items','name','text','activeItem','mods','classes','attributes')),$_smarty_tpl);?>


<?php echo smarty_function_component(array('_default_short'=>'nav','name'=>$_smarty_tpl->tpl_vars['name']->value ? ((string)$_smarty_tpl->tpl_vars['name']->value)."_menu" : '','activeItem'=>$_smarty_tpl->tpl_vars['activeItem']->value,'mods'=>'stacked dropdown','showSingle'=>true,'classes'=>"ls-dropdown-menu js-ls-dropdown-menu ".((string)$_smarty_tpl->tpl_vars['classes']->value),'attributes'=>array_merge((($tmp = @$_smarty_tpl->tpl_vars['attributes']->value)===null||$tmp==='' ? array() : $tmp),array('role'=>'menu','aria-hidden'=>'true')),'items'=>$_smarty_tpl->tpl_vars['items']->value),$_smarty_tpl);?>
<?php }} ?>