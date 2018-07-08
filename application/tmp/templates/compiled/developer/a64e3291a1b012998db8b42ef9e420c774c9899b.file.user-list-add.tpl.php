<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 19:53:58
         compiled from "C:\xampp\htdocs\application\frontend\components\user-list-add\user-list-add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1705012635b3512a6891e22-47161445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a64e3291a1b012998db8b42ef9e420c774c9899b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\user-list-add\\user-list-add.tpl',
      1 => 1530188510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1705012635b3512a6891e22-47161445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'title' => 0,
    'note' => 0,
    'editable' => 0,
    'users' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3512a68b50a9_36906272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3512a68b50a9_36906272')) {function content_5b3512a68b50a9_36906272($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('user-list-add', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('title','note','editable','users','mods','classes','attributes')),$_smarty_tpl);?>



<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    
    <?php if ($_smarty_tpl->tpl_vars['title']->value){?>
        <h3 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['note']->value){?>
        <p class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-note"><?php echo $_smarty_tpl->tpl_vars['note']->value;?>
</p>
    <?php }?>

    
    <?php if ((($tmp = @$_smarty_tpl->tpl_vars['editable']->value)===null||$tmp==='' ? true : $tmp)){?>
        <form class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-form js-<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-form">
            <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'user_list_add.form.fields.add.label'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'user','template'=>'choose','name'=>'add','classes'=>"js-".((string)$_smarty_tpl->tpl_vars['component']->value)."-choose",'label'=>$_tmp1),$_smarty_tpl);?>


            <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'common.add'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'button','text'=>$_tmp2,'mods'=>'primary','classes'=>"js-".((string)$_smarty_tpl->tpl_vars['component']->value)."-form-submit"),$_smarty_tpl);?>

        </form>
    <?php }?>

    
    
    
        <?php echo smarty_function_component(array('_default_short'=>'user-list-add','template'=>'list','hideableEmptyAlert'=>true,'users'=>$_smarty_tpl->tpl_vars['users']->value,'showActions'=>true,'show'=>!!$_smarty_tpl->tpl_vars['users']->value,'classes'=>"js-".((string)$_smarty_tpl->tpl_vars['component']->value)."-users",'itemClasses'=>"js-".((string)$_smarty_tpl->tpl_vars['component']->value)."-user"),$_smarty_tpl);?>

    
</div><?php }} ?>