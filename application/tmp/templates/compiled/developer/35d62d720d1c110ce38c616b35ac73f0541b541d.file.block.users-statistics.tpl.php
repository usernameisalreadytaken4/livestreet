<?php /* Smarty version Smarty-3.1.13, created on 2018-07-08 21:30:39
         compiled from "E:\XAMPP\htdocs\application\frontend\components\user\blocks\block.users-statistics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4463976675b4257b36fb097-37025409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35d62d720d1c110ce38c616b35ac73f0541b541d' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\application\\frontend\\components\\user\\blocks\\block.users-statistics.tpl',
      1 => 1531074620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4463976675b4257b36fb097-37025409',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b4257b371a496_43237585',
  'variables' => 
  array (
    'usersStat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4257b371a496_43237585')) {function content_5b4257b371a496_43237585($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.hook.php';
if (!is_callable('smarty_function_lang')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'E:\\XAMPP\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('user_block_stat', null, null); ob_start(); ?>
    <div class="user-stat">
        
        <?php echo smarty_function_hook(array('run'=>'user_block_stat_begin'),$_smarty_tpl);?>


        
        <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.stats.all'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.stats.active'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.stats.not_active'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'info-list','list'=>array(array('label'=>$_tmp1.":",'content'=>$_smarty_tpl->tpl_vars['usersStat']->value['count_all']),array('label'=>$_tmp2.":",'content'=>$_smarty_tpl->tpl_vars['usersStat']->value['count_active']),array('label'=>$_tmp3.":",'content'=>$_smarty_tpl->tpl_vars['usersStat']->value['count_inactive']))),$_smarty_tpl);?>


        
        <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.stats.men'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.stats.women'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.stats.none'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'info-list','list'=>array(array('label'=>$_tmp4.":",'content'=>$_smarty_tpl->tpl_vars['usersStat']->value['count_sex_man']),array('label'=>$_tmp5.":",'content'=>$_smarty_tpl->tpl_vars['usersStat']->value['count_sex_woman']),array('label'=>$_tmp6.":",'content'=>$_smarty_tpl->tpl_vars['usersStat']->value['count_sex_other']))),$_smarty_tpl);?>


        
        <?php echo smarty_function_hook(array('run'=>'user_block_stat_end'),$_smarty_tpl);?>

    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'user.stats.title'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'info users-stats','title'=>$_tmp7,'content'=>Smarty::$_smarty_vars['capture']['user_block_stat']),$_smarty_tpl);?>
<?php }} ?>