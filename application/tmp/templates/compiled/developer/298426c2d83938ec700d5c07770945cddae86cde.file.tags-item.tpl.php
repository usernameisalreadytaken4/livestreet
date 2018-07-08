<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:46:37
         compiled from "C:\xampp\htdocs\framework\frontend\components\tags\tags-item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18271454915b3502dde6d743-98504154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '298426c2d83938ec700d5c07770945cddae86cde' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\frontend\\components\\tags\\tags-item.tpl',
      1 => 1530188567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18271454915b3502dde6d743-98504154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'url' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3502dde792c9_64669910',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3502dde792c9_64669910')) {function content_5b3502dde792c9_64669910($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-tags-item', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('text','url','isFirst','isLast','mods','classes','attributes')),$_smarty_tpl);?>





<li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
">
    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" rel="tag">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8', true);?>

    </a>
</li><?php }} ?>