<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 14:52:48
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/nav/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12658530025b34cc10257d53-79605087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b87bc310823edb0abb5b72dd062b1d6999eaffd6' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/nav/nav.tpl',
      1 => 1529954590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12658530025b34cc10257d53-79605087',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hook' => 0,
    'hookParams' => 0,
    'items' => 0,
    'hookItems' => 0,
    'disabledItemsCounter' => 0,
    'item' => 0,
    'classes' => 0,
    'isSubnav' => 0,
    'showSingle' => 0,
    'component' => 0,
    'mods' => 0,
    'attributes' => 0,
    'isEnabled' => 0,
    'activeItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cc10329a12_44325076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cc10329a12_44325076')) {function content_5b34cc10329a12_44325076($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_hook')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_cmods')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-nav', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('hook','hookParams','items','activeItem','showSingle','isSubnav','items','mods','classes','attributes')),$_smarty_tpl);?>



<?php if ($_smarty_tpl->tpl_vars['hook']->value){?>
    <?php echo smarty_function_hook(array('run'=>"nav_".((string)$_smarty_tpl->tpl_vars['hook']->value),'assign'=>'hookItems','params'=>$_smarty_tpl->tpl_vars['hookParams']->value,'items'=>$_smarty_tpl->tpl_vars['items']->value,'array'=>true),$_smarty_tpl);?>

    <?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable($_smarty_tpl->tpl_vars['hookItems']->value ? $_smarty_tpl->tpl_vars['hookItems']->value : $_smarty_tpl->tpl_vars['items']->value, null, 0);?>
<?php }?>


<?php $_smarty_tpl->tpl_vars['disabledItemsCounter'] = new Smarty_variable(0, null, 0);?>

<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars['disabledItemsCounter'] = new Smarty_variable($_smarty_tpl->tpl_vars['disabledItemsCounter']->value+(!(($tmp = @$_smarty_tpl->tpl_vars['item']->value['is_enabled'])===null||$tmp==='' ? true : $tmp)&&$_smarty_tpl->tpl_vars['item']->value['name']!='-'), null, 0);?>
<?php } ?>

<?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['classes']->value)." ls-clearfix", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['isSubnav']->value){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." sub", null, 0);?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." root", null, 0);?>
<?php }?>





<?php if (count($_smarty_tpl->tpl_vars['items']->value)-$_smarty_tpl->tpl_vars['disabledItemsCounter']->value-((($tmp = @$_smarty_tpl->tpl_vars['showSingle']->value)===null||$tmp==='' ? true : $tmp) ? 0 : 1)){?>
    <ul class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars['isEnabled'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['is_enabled'], null, 0);?>

            <?php if ($_smarty_tpl->tpl_vars['item']->value['html']){?>
                <?php echo $_smarty_tpl->tpl_vars['item']->value['html'];?>

            <?php }else{ ?>
                <?php if ((($tmp = @$_smarty_tpl->tpl_vars['isEnabled']->value)===null||$tmp==='' ? true : $tmp)){?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['name']!='-'){?>
                        <?php echo smarty_function_component(array('_default_short'=>'nav','template'=>'item','isRoot'=>!$_smarty_tpl->tpl_vars['isSubnav']->value,'activeItem'=>$_smarty_tpl->tpl_vars['activeItem']->value,'isActive'=>($_smarty_tpl->tpl_vars['activeItem']->value&&$_smarty_tpl->tpl_vars['activeItem']->value==$_smarty_tpl->tpl_vars['item']->value['name']),'params'=>$_smarty_tpl->tpl_vars['item']->value),$_smarty_tpl);?>

                    <?php }else{ ?>
                        
                        <li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-separator"></li>
                    <?php }?>
                <?php }?>
            <?php }?>
        <?php } ?>
    </ul>
<?php }?>
<?php }} ?>