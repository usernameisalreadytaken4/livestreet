<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 20:06:38
         compiled from "C:\xampp\htdocs\application\frontend\components\wall\wall.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16456984455b327a5c83de24-26505311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b33285653b22bb6fe44ce775ecf4ecee200273ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\wall\\wall.tpl',
      1 => 1530188510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16456984455b327a5c83de24-26505311',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b327a5c85d223_37348999',
  'variables' => 
  array (
    'posts' => 0,
    'count' => 0,
    'loadedCount' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'oUserProfile' => 0,
    'oUserCurrent' => 0,
    'aLang' => 0,
    'moreCount' => 0,
    'lastId' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b327a5c85d223_37348999')) {function content_5b327a5c85d223_37348999($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('wall', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('count','posts','lastId','mods','classes','attributes')),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['loadedCount'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['posts']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['moreCount'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value-$_smarty_tpl->tpl_vars['loadedCount']->value, null, 0);?>


<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
 data-user-id="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
">
    
    <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
        <?php echo smarty_function_component(array('_default_short'=>'wall','template'=>'form'),$_smarty_tpl);?>

    <?php }else{ ?>
        <?php echo smarty_function_component(array('_default_short'=>'alert','text'=>$_smarty_tpl->tpl_vars['aLang']->value['wall']['alerts']['unregistered'],'mods'=>'info','classes'=>'ls-mt-15'),$_smarty_tpl);?>

    <?php }?>

    
    <div class="js-wall-entry-container" data-id="0">
        <?php echo smarty_function_component(array('_default_short'=>'wall','template'=>'posts','posts'=>$_smarty_tpl->tpl_vars['posts']->value),$_smarty_tpl);?>

    </div>

    
    <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value||(!$_smarty_tpl->tpl_vars['oUserCurrent']->value&&!$_smarty_tpl->tpl_vars['loadedCount']->value)){?>
        <?php echo smarty_function_component(array('_default_short'=>'blankslate','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['empty'],'classes'=>'ls-mt-15 js-wall-alert-empty','attributes'=>array('id'=>'wall-empty'),'visible'=>!$_smarty_tpl->tpl_vars['loadedCount']->value),$_smarty_tpl);?>

    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['moreCount']->value){?>
        <?php echo smarty_function_component(array('_default_short'=>'more','classes'=>'js-wall-more','count'=>$_smarty_tpl->tpl_vars['moreCount']->value,'target'=>'.js-wall-entry-container[data-id=0]','ajaxParams'=>array('last_id'=>$_smarty_tpl->tpl_vars['lastId']->value)),$_smarty_tpl);?>

    <?php }?>
</div><?php }} ?>