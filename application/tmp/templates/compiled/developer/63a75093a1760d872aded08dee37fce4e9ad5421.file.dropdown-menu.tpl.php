<?php /* Smarty version Smarty-3.1.13, created on 2018-07-08 21:28:03
         compiled from "E:\XAMPP\htdocs\framework\frontend\components\dropdown\dropdown-menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21169082365b4257b3925c19-75315416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63a75093a1760d872aded08dee37fce4e9ad5421' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\framework\\frontend\\components\\dropdown\\dropdown-menu.tpl',
      1 => 1530188553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21169082365b4257b3925c19-75315416',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'activeItem' => 0,
    'classes' => 0,
    'attributes' => 0,
    'items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b4257b3935613_27761035',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4257b3935613_27761035')) {function content_5b4257b3935613_27761035($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('items','name','text','activeItem','mods','classes','attributes')),$_smarty_tpl);?>


<?php echo smarty_function_component(array('_default_short'=>'nav','name'=>$_smarty_tpl->tpl_vars['name']->value ? ((string)$_smarty_tpl->tpl_vars['name']->value)."_menu" : '','activeItem'=>$_smarty_tpl->tpl_vars['activeItem']->value,'mods'=>'stacked dropdown','showSingle'=>true,'classes'=>"ls-dropdown-menu js-ls-dropdown-menu ".((string)$_smarty_tpl->tpl_vars['classes']->value),'attributes'=>array_merge((($tmp = @$_smarty_tpl->tpl_vars['attributes']->value)===null||$tmp==='' ? array() : $tmp),array('role'=>'menu','aria-hidden'=>'true')),'items'=>$_smarty_tpl->tpl_vars['items']->value),$_smarty_tpl);?>
<?php }} ?>