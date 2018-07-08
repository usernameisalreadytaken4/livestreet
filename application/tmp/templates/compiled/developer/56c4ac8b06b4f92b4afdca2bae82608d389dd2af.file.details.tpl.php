<?php /* Smarty version Smarty-3.1.13, created on 2018-06-26 21:07:43
         compiled from "C:\xampp\htdocs\framework\frontend\components\details\details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17282028905b3280efe55960-57976007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56c4ac8b06b4f92b4afdca2bae82608d389dd2af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\frontend\\components\\details\\details.tpl',
      1 => 1493631838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17282028905b3280efe55960-57976007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'open' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'jsprefix' => 0,
    'title' => 0,
    'content' => 0,
    'body' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3280efe691f1_55114749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3280efe691f1_55114749')) {function content_5b3280efe691f1_55114749($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-details', null, 0);?>
<?php $_smarty_tpl->tpl_vars['jsprefix'] = new Smarty_variable('js-details', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('title','content','body','open','mods','classes','attributes')),$_smarty_tpl);?>



<?php if ($_smarty_tpl->tpl_vars['open']->value){?>
    <?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['classes']->value)." is-open", null, 0);?>
<?php }?>




<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    
    <h3 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-title <?php echo $_smarty_tpl->tpl_vars['jsprefix']->value;?>
-title">
        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

    </h3>

    
    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-body <?php echo $_smarty_tpl->tpl_vars['jsprefix']->value;?>
-body">
        
        <?php if ($_smarty_tpl->tpl_vars['content']->value){?>
            <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-content">
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </div>
        <?php }?>

        <?php echo $_smarty_tpl->tpl_vars['body']->value;?>

    </div>
</div><?php }} ?>