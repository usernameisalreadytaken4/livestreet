<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:48
         compiled from "C:\xampp\htdocs\application\frontend\components\user\user-list-small-item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6475414945b3502acc9d5a4-04140309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0712a6bb49edbc9364fda9c0211feb70cfe59612' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\user\\user-list-small-item.tpl',
      1 => 1530188509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6475414945b3502acc9d5a4-04140309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'component' => 0,
    'classes' => 0,
    'userId' => 0,
    'attributes' => 0,
    'selectable' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3502accb0e28_08115338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3502accb0e28_08115338')) {function content_5b3502accb0e28_08115338($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('user-list-small-item', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('selectable','user','mods','classes','attributes')),$_smarty_tpl);?>



    <?php $_smarty_tpl->tpl_vars['userId'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->getId(), null, 0);?>


<li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 js-user-list-small-item <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" data-user-id="<?php echo $_smarty_tpl->tpl_vars['userId']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    
    <?php if ($_smarty_tpl->tpl_vars['selectable']->value){?>
        <input type="checkbox" class="js-user-list-small-checkbox" data-user-id="<?php echo $_smarty_tpl->tpl_vars['userId']->value;?>
" data-user-login="<?php echo $_smarty_tpl->tpl_vars['user']->value->getLogin();?>
" />
    <?php }?>

    
    
        <?php echo smarty_function_component(array('_default_short'=>'user','template'=>'avatar','size'=>'xxsmall','mods'=>'inline','user'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);?>

    
</li><?php }} ?>