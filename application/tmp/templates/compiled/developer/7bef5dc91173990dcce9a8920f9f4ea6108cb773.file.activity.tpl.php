<?php /* Smarty version Smarty-3.1.13, created on 2018-07-08 21:30:41
         compiled from "E:\XAMPP\htdocs\application\frontend\components\activity\activity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8774885785b425851ae33c4-42323477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bef5dc91173990dcce9a8920f9f4ea6108cb773' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\application\\frontend\\components\\activity\\activity.tpl',
      1 => 1531074618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8774885785b425851ae33c4-42323477',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'events' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'jsprefix' => 0,
    'moreCount' => 0,
    'last' => 0,
    'targetId' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b425851afaad2_42925956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b425851afaad2_42925956')) {function content_5b425851afaad2_42925956($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
if (!is_callable('smarty_function_component')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('activity', null, 0);?>
<?php $_smarty_tpl->tpl_vars['jsprefix'] = new Smarty_variable('js-activity', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('events','count','targetId','mods','classes','attributes')),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['moreCount'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value-count($_smarty_tpl->tpl_vars['events']->value), null, 0);?>

<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    <?php if ($_smarty_tpl->tpl_vars['events']->value){?>
        
        <ul class="activity-event-list <?php echo $_smarty_tpl->tpl_vars['jsprefix']->value;?>
-event-list">
            <?php echo smarty_function_component(array('_default_short'=>'activity','template'=>'event-list','events'=>$_smarty_tpl->tpl_vars['events']->value),$_smarty_tpl);?>

        </ul>

        
        <?php if ($_smarty_tpl->tpl_vars['count']->value>Config::Get('module.stream.count_default')){?>
            <?php $_smarty_tpl->tpl_vars['last'] = new Smarty_variable(end($_smarty_tpl->tpl_vars['events']->value), null, 0);?>

            <?php echo smarty_function_component(array('_default_short'=>'more','count'=>$_smarty_tpl->tpl_vars['moreCount']->value,'classes'=>((string)$_smarty_tpl->tpl_vars['jsprefix']->value)."-more",'ajaxParams'=>array('last_id'=>$_smarty_tpl->tpl_vars['last']->value->getId(),'target_id'=>$_smarty_tpl->tpl_vars['targetId']->value)),$_smarty_tpl);?>

        <?php }?>
    <?php }else{ ?>
        <?php echo smarty_function_component(array('_default_short'=>'blankslate','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['empty']),$_smarty_tpl);?>

    <?php }?>
</div><?php }} ?>