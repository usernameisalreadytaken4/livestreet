<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 14:53:25
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/toolbar/toolbar-item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16423072385b34cc357180e8-09594123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f72e7f72121d9f1dc6d205cefe0846f5963880c2' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/toolbar/toolbar-item.tpl',
      1 => 1529954593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16423072385b34cc357180e8-09594123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'html' => 0,
    'icon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cc3575ec68_63999006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cc3575ec68_63999006')) {function content_5b34cc3575ec68_63999006($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-toolbar-item', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('html','url','icon','mods','classes','attributes')),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['url']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"<?php }else{ ?><div<?php }?> class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    <?php if ($_smarty_tpl->tpl_vars['html']->value){?>
        <?php echo $_smarty_tpl->tpl_vars['html']->value;?>

    <?php }else{ ?>
        <?php if ($_smarty_tpl->tpl_vars['icon']->value){?>
            <?php echo smarty_function_component(array('_default_short'=>'icon','icon'=>$_smarty_tpl->tpl_vars['icon']->value),$_smarty_tpl);?>

        <?php }?>
    <?php }?>
<?php if ($_smarty_tpl->tpl_vars['url']->value){?></a><?php }else{ ?></div><?php }?><?php }} ?>