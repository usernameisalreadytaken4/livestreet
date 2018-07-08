<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:06:37
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/media/media-content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19357002765b34cf4db33d26-67859016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e844729bcaee8c3c3814a09862e4fb60bdf1fc9' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/media/media-content.tpl',
      1 => 1529954495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19357002765b34cf4db33d26-67859016',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cf4db6cc75_89730284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cf4db6cc75_89730284')) {function content_5b34cf4db6cc75_89730284($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
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