<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:06:37
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/favourite/favourite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21047400535b34cf4d4fefe7-54782701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f3cd1a1b25e5571242ded87d05b3159ca36142e' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/favourite/favourite.tpl',
      1 => 1529954494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21047400535b34cf4d4fefe7-54782701',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'target' => 0,
    'count' => 0,
    'isActive' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'aLang' => 0,
    'attributes' => 0,
    'hideZeroCounter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cf4d57c139_43975869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cf4d57c139_43975869')) {function content_5b34cf4d57c139_43975869($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-favourite', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('target','hideZeroCounter','mods','classes','attributes')),$_smarty_tpl);?>



<?php $_smarty_tpl->tpl_vars['isActive'] = new Smarty_variable($_smarty_tpl->tpl_vars['target']->value&&$_smarty_tpl->tpl_vars['target']->value->getIsFavourite(), null, 0);?>


<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['target']->value->getCountFavourite(), null, 0);?>


<?php if ($_smarty_tpl->tpl_vars['count']->value){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." has-counter", null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['isActive']->value){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." added", null, 0);?>
<?php }?>


<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['isActive']->value){?>active<?php }?> <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
"
     data-param-i-target-id="<?php echo $_smarty_tpl->tpl_vars['target']->value->getId();?>
"
     title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['favourite'][$_smarty_tpl->tpl_vars['isActive']->value ? 'remove' : 'add'];?>
"
     <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>

    
    <?php echo smarty_function_component(array('_default_short'=>'icon','icon'=>'heart','classes'=>((string)$_smarty_tpl->tpl_vars['component']->value)."-toggle js-favourite-toggle"),$_smarty_tpl);?>


    
    <?php if (isset($_smarty_tpl->tpl_vars['count']->value)){?>
        <span class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-count js-favourite-count" <?php if (!$_smarty_tpl->tpl_vars['count']->value&&(($tmp = @$_smarty_tpl->tpl_vars['hideZeroCounter']->value)===null||$tmp==='' ? true : $tmp)){?>style="display: none;"<?php }?>>
            <?php echo $_smarty_tpl->tpl_vars['count']->value;?>

        </span>
    <?php }?>
</div><?php }} ?>