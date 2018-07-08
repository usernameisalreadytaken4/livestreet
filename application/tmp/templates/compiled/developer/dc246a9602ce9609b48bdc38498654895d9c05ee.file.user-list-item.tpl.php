<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:12
         compiled from "C:\xampp\htdocs\application\frontend\components\user\list\user-list-item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15360323455b327c734311b5-68574712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc246a9602ce9609b48bdc38498654895d9c05ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\user\\list\\user-list-item.tpl',
      1 => 1530188510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15360323455b327c734311b5-68574712',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b327c73454430_78200806',
  'variables' => 
  array (
    'user' => 0,
    'usernote' => 0,
    'session' => 0,
    'aLang' => 0,
    'lastSessionDate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b327c73454430_78200806')) {function content_5b327c73454430_78200806($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
if (!is_callable('smarty_function_date_format')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.date_format.php';
?><?php if ($_smarty_tpl->tpl_vars['user']->value->getUser()){?>
    <?php $_smarty_tpl->tpl_vars['user'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->getUser(), null, 0);?>
<?php }?>


<?php $_smarty_tpl->_capture_stack[0][] = array('title', null, null); ob_start(); ?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['user']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->getDisplayName();?>
</a>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php $_smarty_tpl->_capture_stack[0][] = array('content', null, null); ob_start(); ?>
    <?php $_smarty_tpl->tpl_vars['session'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->getSession(), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['usernote'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->getUserNote(), null, 0);?>

    
    <?php if ($_smarty_tpl->tpl_vars['usernote']->value){?>
        <?php echo smarty_function_component(array('_default_short'=>'note','classes'=>'js-user-note','note'=>$_smarty_tpl->tpl_vars['usernote']->value,'targetId'=>$_smarty_tpl->tpl_vars['user']->value->getId()),$_smarty_tpl);?>

    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['session']->value){?>
        <?php ob_start();?><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['session']->value->getDateLast(),'hours_back'=>"12",'minutes_back'=>"60",'now'=>"60",'day'=>"day H:i",'format'=>"j F Y, H:i"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['lastSessionDate'] = new Smarty_variable($_tmp1, null, 0);?>
    <?php }?>

    <?php ob_start();?><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['user']->value->getDateRegister(),'hours_back'=>"12",'minutes_back'=>"60",'now'=>"60",'day'=>"day H:i",'format'=>"j F Y, H:i"),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'info-list','classes'=>'object-list-item-info','list'=>array(array('label'=>((string)$_smarty_tpl->tpl_vars['aLang']->value['user']['date_last_session']).":",'content'=>$_smarty_tpl->tpl_vars['session']->value ? $_smarty_tpl->tpl_vars['lastSessionDate']->value : '&mdash;'),array('label'=>((string)$_smarty_tpl->tpl_vars['aLang']->value['user']['date_registration']).":",'content'=>$_tmp2),array('label'=>((string)$_smarty_tpl->tpl_vars['aLang']->value['vote']['rating']).":",'content'=>$_smarty_tpl->tpl_vars['user']->value->getRating()))),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php echo smarty_function_component(array('_default_short'=>'item','title'=>Smarty::$_smarty_vars['capture']['title'],'content'=>Smarty::$_smarty_vars['capture']['content'],'image'=>array('url'=>$_smarty_tpl->tpl_vars['user']->value->getUserWebPath(),'path'=>$_smarty_tpl->tpl_vars['user']->value->getProfileAvatarPath(100),'alt'=>$_smarty_tpl->tpl_vars['user']->value->getLogin())),$_smarty_tpl);?>
<?php }} ?>