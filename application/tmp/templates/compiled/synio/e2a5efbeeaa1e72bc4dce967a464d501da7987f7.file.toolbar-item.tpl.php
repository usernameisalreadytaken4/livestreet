<?php /* Smarty version Smarty-3.1.13, created on 2018-06-26 19:26:46
         compiled from "C:\xampp\htdocs\framework\frontend\components\toolbar\toolbar-item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11027116345b3269466d1e20-16877380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2a5efbeeaa1e72bc4dce967a464d501da7987f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\frontend\\components\\toolbar\\toolbar-item.tpl',
      1 => 1493631838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11027116345b3269466d1e20-16877380',
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
  'unifunc' => 'content_5b3269466e1820_73617113',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3269466e1820_73617113')) {function content_5b3269466e1820_73617113($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
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