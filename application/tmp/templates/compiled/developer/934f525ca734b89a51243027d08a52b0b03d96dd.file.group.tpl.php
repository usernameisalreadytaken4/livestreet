<?php /* Smarty version Smarty-3.1.13, created on 2018-07-08 21:28:03
         compiled from "E:\XAMPP\htdocs\framework\frontend\components\button\group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4972616855b4257b3945016-33036715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '934f525ca734b89a51243027d08a52b0b03d96dd' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\framework\\frontend\\components\\button\\group.tpl',
      1 => 1530188552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4972616855b4257b3945016-33036715',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'role' => 0,
    'mods' => 0,
    'buttons' => 0,
    'component' => 0,
    'classes' => 0,
    'attributes' => 0,
    'button' => 0,
    'buttonParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b4257b3964425_85158299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4257b3964425_85158299')) {function content_5b4257b3964425_85158299($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
if (!is_callable('smarty_function_component')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-button-group', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('role','buttons','buttonParams','mods','classes','attributes')),$_smarty_tpl);?>




<?php $_smarty_tpl->tpl_vars['role'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['role']->value)===null||$tmp==='' ? 'group' : $tmp), null, 0);?>


<?php if (!in_array('vertical',explode(' ',$_smarty_tpl->tpl_vars['mods']->value))){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." horizontal", null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['buttons']->value){?>
    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
 ls-clearfix" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
 role="<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
">
        <?php if (is_array($_smarty_tpl->tpl_vars['buttons']->value)){?>
            <?php  $_smarty_tpl->tpl_vars['button'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['button']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['buttons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['button']->key => $_smarty_tpl->tpl_vars['button']->value){
$_smarty_tpl->tpl_vars['button']->_loop = true;
?>
                <?php if (is_array($_smarty_tpl->tpl_vars['button']->value)){?>
                    
                        <?php echo smarty_function_component(array('_default_short'=>'button','params'=>array_merge((($tmp = @$_smarty_tpl->tpl_vars['buttonParams']->value)===null||$tmp==='' ? array() : $tmp),$_smarty_tpl->tpl_vars['button']->value)),$_smarty_tpl);?>

                    
                <?php }else{ ?>
                    <?php echo $_smarty_tpl->tpl_vars['button']->value;?>

                <?php }?>
            <?php } ?>
        <?php }else{ ?>
            <?php echo $_smarty_tpl->tpl_vars['buttons']->value;?>

        <?php }?>
    </div>
<?php }?><?php }} ?>