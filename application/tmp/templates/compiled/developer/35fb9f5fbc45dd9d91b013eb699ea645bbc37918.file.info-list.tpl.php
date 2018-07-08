<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:03:49
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/info-list/info-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19134646755b34cea58d1763-75266092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35fb9f5fbc45dd9d91b013eb699ea645bbc37918' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/info-list/info-list.tpl',
      1 => 1529954586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19134646755b34cea58d1763-75266092',
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
  'unifunc' => 'content_5b34cea592d2a1_17986881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cea592d2a1_17986881')) {function content_5b34cea592d2a1_17986881($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cattr.php';
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