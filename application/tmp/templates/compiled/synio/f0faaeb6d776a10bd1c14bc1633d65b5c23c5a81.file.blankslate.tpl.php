<?php /* Smarty version Smarty-3.1.13, created on 2018-06-26 19:25:40
         compiled from "C:\xampp\htdocs\framework\frontend\components\blankslate\blankslate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8850060665b32690457ee69-84357505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0faaeb6d776a10bd1c14bc1633d65b5c23c5a81' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\frontend\\components\\blankslate\\blankslate.tpl',
      1 => 1493631838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8850060665b32690457ee69-84357505',
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
  'unifunc' => 'content_5b3269045926e2_78406860',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3269045926e2_78406860')) {function content_5b3269045926e2_78406860($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
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