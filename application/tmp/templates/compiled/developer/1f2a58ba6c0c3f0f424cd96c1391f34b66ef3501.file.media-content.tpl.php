<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:21
         compiled from "C:\xampp\htdocs\application\frontend\components\media\media-content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1525866095b350291aa34a4-71250778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f2a58ba6c0c3f0f424cd96c1391f34b66ef3501' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\media\\media-content.tpl',
      1 => 1530188507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1525866095b350291aa34a4-71250778',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b350291ab2eb5_66195749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b350291ab2eb5_66195749')) {function content_5b350291ab2eb5_66195749($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<div class="ls-media ls-clearfix <?php echo (isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null);?>
">
    <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'media.nav.insert'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'media','template'=>'pane.insert'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'media.nav.photoset'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'media','template'=>'pane.photoset'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'media.nav.url'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'media','template'=>'pane.url'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'tabs','classes'=>'ls-media-nav js-media-nav','mods'=>'align-left','tabs'=>array(array('text'=>$_tmp1,'body'=>$_tmp2,'classes'=>'js-tab-show-gallery','attributes'=>array('data-media-name'=>'insert')),array('text'=>$_tmp3,'body'=>$_tmp4,'classes'=>'js-tab-show-gallery','attributes'=>array('data-media-name'=>'photoset')),array('text'=>$_tmp5,'body'=>$_tmp6,'attributes'=>array('data-media-name'=>'url')))),$_smarty_tpl);?>

</div><?php }} ?>