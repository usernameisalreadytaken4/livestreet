<?php /* Smarty version Smarty-3.1.13, created on 2018-06-26 19:26:48
         compiled from "C:\xampp\htdocs\application\frontend\skin\synio\components\info-list\info-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21335645165b326948c54918-93354393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dac23c701fccd84cdb78ad3c8caf1c64a86eacfd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\skin\\synio\\components\\info-list\\info-list.tpl',
      1 => 1493631808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21335645165b326948c54918-93354393',
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
    'url' => 0,
    'count' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b326948c6fe92_66678886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b326948c6fe92_66678886')) {function content_5b326948c6fe92_66678886($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-info-list', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('url','count','title','list','mods','classes','attributes')),$_smarty_tpl);?>




<?php if ($_smarty_tpl->tpl_vars['list']->value){?>
    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
        
        <?php if ($_smarty_tpl->tpl_vars['title']->value){?>
            <h2 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-title">
                <?php if ($_smarty_tpl->tpl_vars['url']->value){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
                <?php }else{ ?>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['count']->value){?>
                    <span class="user-info-group-count"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>
                <?php }?>
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
                        <span class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item-label-text"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span>
                    </div>

                    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item-content">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
<?php }?><?php }} ?>