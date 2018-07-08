<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:51:31
         compiled from "C:\xampp\htdocs\application\frontend\components\toolbar-scrollnav\toolbar.scrollnav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19487212175b350403f24563-52255363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d732fa78ebccc742ad7c2c518d14b917ecc3504' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\toolbar-scrollnav\\toolbar.scrollnav.tpl',
      1 => 1530188509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19487212175b350403f24563-52255363',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b350404014df5_92279936',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b350404014df5_92279936')) {function content_5b350404014df5_92279936($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<div class="js-toolbar-topics">
    <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'toolbar.topic_nav.prev'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'toolbar.item','icon'=>'arrow-up','classes'=>'js-toolbar-topics-prev','attributes'=>array('title'=>$_tmp1)),$_smarty_tpl);?>


    <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'toolbar.topic_nav.next'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'toolbar.item','icon'=>'arrow-down','classes'=>'js-toolbar-topics-next','attributes'=>array('title'=>$_tmp2)),$_smarty_tpl);?>

</div><?php }} ?>