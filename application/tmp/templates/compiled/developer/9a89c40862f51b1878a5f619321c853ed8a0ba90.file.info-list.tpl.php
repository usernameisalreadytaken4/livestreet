<?php /* Smarty version Smarty-3.1.13, created on 2018-07-08 21:28:03
         compiled from "E:\XAMPP\htdocs\framework\frontend\components\info-list\info-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7191352095b4257b3729e94-42268101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a89c40862f51b1878a5f619321c853ed8a0ba90' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\framework\\frontend\\components\\info-list\\info-list.tpl',
      1 => 1530188564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7191352095b4257b3729e94-42268101',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'title' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b4257b37415a7_35022788',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4257b37415a7_35022788')) {function content_5b4257b37415a7_35022788($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-info-list', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('title','list','mods','classes','attributes')),$_smarty_tpl);?>




<?php if ($_smarty_tpl->tpl_vars['list']->value){?>
    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
        
        <?php if ($_smarty_tpl->tpl_vars['title']->value){?>
            <h2 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
        <?php }?>

        
        <ul class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-list">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item <?php echo $_smarty_tpl->tpl_vars['item']->value['classes'];?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['item']->value['attributes']),$_smarty_tpl);?>
>
                    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item-label">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>

                    </div>
                    <strong class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item-content"><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</strong>
                </li>
            <?php } ?>
        </ul>
    </div>
<?php }?><?php }} ?>