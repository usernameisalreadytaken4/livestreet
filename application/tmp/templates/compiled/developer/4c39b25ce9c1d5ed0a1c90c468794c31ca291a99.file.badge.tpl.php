<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 14:52:48
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/badge/badge.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12661921375b34cc10424ad5-66227575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c39b25ce9c1d5ed0a1c90c468794c31ca291a99' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/badge/badge.tpl',
      1 => 1529954562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12661921375b34cc10424ad5-66227575',
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
  'unifunc' => 'content_5b34cc10454268_55390291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cc10454268_55390291')) {function content_5b34cc10454268_55390291($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cattr.php';
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