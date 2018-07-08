<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 14:53:25
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/toolbar-scrollup/toolbar.scrollup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8384897815b34cc357680d8-42318783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b6f272649961e3fdfd2663882cde990e6b07c80' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/toolbar-scrollup/toolbar.scrollup.tpl',
      1 => 1529954500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8384897815b34cc357680d8-42318783',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cc35775986_61375476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cc35775986_61375476')) {function content_5b34cc35775986_61375476($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'toolbar.scrollup.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'toolbar.item','icon'=>'chevron-up','classes'=>'js-toolbar-scrollup','mods'=>'scrollup','attributes'=>array('title'=>$_tmp1)),$_smarty_tpl);?>
<?php }} ?>