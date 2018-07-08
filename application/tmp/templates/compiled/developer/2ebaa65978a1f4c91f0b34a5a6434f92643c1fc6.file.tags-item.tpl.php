<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:06:37
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/tags/tags-item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20325414945b34cf4d4b2544-20444283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ebaa65978a1f4c91f0b34a5a6434f92643c1fc6' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/tags/tags-item.tpl',
      1 => 1529954593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20325414945b34cf4d4b2544-20444283',
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
  'unifunc' => 'content_5b34cf4d4e0784_57498251',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cf4d4e0784_57498251')) {function content_5b34cf4d4e0784_57498251($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cmods.php';
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