<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:08:02
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/text/text.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9483724635b34cfa2f14733-33993636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abb98ee793ae782a590f2ba69858cce74b55b433' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/text/text.tpl',
      1 => 1529954593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9483724635b34cfa2f14733-33993636',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cfa2f41713_57872338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cfa2f41713_57872338')) {function content_5b34cfa2f41713_57872338($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cattr.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-text', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('text','mods','classes','attributes')),$_smarty_tpl);?>





<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

</div><?php }} ?>