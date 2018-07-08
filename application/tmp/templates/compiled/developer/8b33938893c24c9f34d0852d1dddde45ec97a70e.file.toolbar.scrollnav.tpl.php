<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 14:53:25
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/toolbar-scrollnav/toolbar.scrollnav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18207725085b34cc356fb961-76795437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b33938893c24c9f34d0852d1dddde45ec97a70e' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/toolbar-scrollnav/toolbar.scrollnav.tpl',
      1 => 1529954500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18207725085b34cc356fb961-76795437',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cc35712aa8_10099015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cc35712aa8_10099015')) {function content_5b34cc35712aa8_10099015($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<div class="js-toolbar-topics">
    <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'toolbar.topic_nav.prev'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'toolbar.item','icon'=>'arrow-up','classes'=>'js-toolbar-topics-prev','attributes'=>array('title'=>$_tmp1)),$_smarty_tpl);?>


    <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'toolbar.topic_nav.next'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'toolbar.item','icon'=>'arrow-down','classes'=>'js-toolbar-topics-next','attributes'=>array('title'=>$_tmp2)),$_smarty_tpl);?>

</div><?php }} ?>