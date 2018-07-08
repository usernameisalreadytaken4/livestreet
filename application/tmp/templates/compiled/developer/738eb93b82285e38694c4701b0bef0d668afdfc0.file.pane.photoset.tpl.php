<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:06:38
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/media/panes/pane.photoset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5737698195b34cf4e24c183-56162040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '738eb93b82285e38694c4701b0bef0d668afdfc0' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/media/panes/pane.photoset.tpl',
      1 => 1529954495,
      2 => 'file',
    ),
    'a07000d5876dc6bb6f858c75c01a234d9b2e2928' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/media/panes/pane.tpl',
      1 => 1529954495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5737698195b34cf4e24c183-56162040',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cf4e2707c7_69834290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cf4e2707c7_69834290')) {function content_5b34cf4e2707c7_69834290($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_lang')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>
    <?php echo smarty_function_component_define_params(array('params'=>array('id')),$_smarty_tpl);?>


    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('tab-media-photoset', null, 0);?>


<div class="ls-media-pane-content js-media-pane-content">
    
</div>

<div class="ls-media-pane-footer">
    
    <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.photoset.submit'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'button','mods'=>'primary','classes'=>'js-media-photoset-submit','text'=>$_tmp1),$_smarty_tpl);?>


</div><?php }} ?>