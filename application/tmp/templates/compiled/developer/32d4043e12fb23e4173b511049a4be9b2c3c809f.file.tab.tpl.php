<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:44:40
         compiled from "C:\xampp\htdocs\framework\frontend\components\tabs\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10229367445b32695c144ef1-96571054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32d4043e12fb23e4173b511049a4be9b2c3c809f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\frontend\\components\\tabs\\tab.tpl',
      1 => 1530188567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10229367445b32695c144ef1-96571054',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b32695c1548f4_81068232',
  'variables' => 
  array (
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'isActive' => 0,
    'attributes' => 0,
    'uid' => 0,
    'url' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b32695c1548f4_81068232')) {function content_5b32695c1548f4_81068232($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
?><?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-tab', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('name','isActive','mods','classes','attributes')),$_smarty_tpl);?>


<li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['isActive']->value){?>active<?php }?>" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>

    data-tab
    data-lstab-options='{
        "target": "<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
",
        "urls": {
            "load": "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"
        }
    }'>

    <?php if ($_smarty_tpl->tpl_vars['url']->value){?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="ls-tab-inner"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a>
    <?php }else{ ?>
        <span class="ls-tab-inner"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</span>
    <?php }?>
</li><?php }} ?>