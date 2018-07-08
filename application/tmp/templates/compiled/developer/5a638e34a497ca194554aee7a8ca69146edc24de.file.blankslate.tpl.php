<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 14:52:48
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/blankslate/blankslate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1457654125b34cc105de147-53293154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a638e34a497ca194554aee7a8ca69146edc24de' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/blankslate/blankslate.tpl',
      1 => 1529954562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1457654125b34cc105de147-53293154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'visible' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'title' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cc1062b1e8_86241674',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cc1062b1e8_86241674')) {function content_5b34cc1062b1e8_86241674($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cattr.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-blankslate', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('title','text','visible','mods','classes','attributes')),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['visible'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['visible']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>



<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>

    <?php if (!$_smarty_tpl->tpl_vars['visible']->value){?>style="display: none;"<?php }?>>

    
    <?php if ($_smarty_tpl->tpl_vars['title']->value){?>
        <h3 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-title">
            <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

        </h3>
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['text']->value){?>
        <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-text">
            <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

        </div>
    <?php }?>
</div><?php }} ?>