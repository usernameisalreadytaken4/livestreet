<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:21
         compiled from "C:\xampp\htdocs\application\frontend\components\media\panes\pane.photoset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7561339495b350291caec21-25376860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '331d78126e335c533b1814a6156da2b33b81fb65' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\media\\panes\\pane.photoset.tpl',
      1 => 1530188507,
      2 => 'file',
    ),
    'a61d94d49dc8882b4c41bdf651bc760e4d64be7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\media\\panes\\pane.tpl',
      1 => 1530188507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7561339495b350291caec21-25376860',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b350291cbe622_26205998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b350291cbe622_26205998')) {function content_5b350291cbe622_26205998($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>
    <?php echo smarty_function_component_define_params(array('params'=>array('id')),$_smarty_tpl);?>


    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('tab-media-photoset', null, 0);?>


<div class="ls-media-pane-content js-media-pane-content">
    
</div>

<div class="ls-media-pane-footer">
    
    <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.photoset.submit'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'button','mods'=>'primary','classes'=>'js-media-photoset-submit','text'=>$_tmp1),$_smarty_tpl);?>


</div><?php }} ?>