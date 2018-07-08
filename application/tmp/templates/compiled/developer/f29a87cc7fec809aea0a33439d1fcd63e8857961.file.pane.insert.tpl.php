<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:06:37
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/media/panes/pane.insert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1173730065b34cf4db72623-09569814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f29a87cc7fec809aea0a33439d1fcd63e8857961' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/media/panes/pane.insert.tpl',
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
  'nocache_hash' => '1173730065b34cf4db72623-09569814',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cf4dbac736_57695817',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cf4dbac736_57695817')) {function content_5b34cf4dbac736_57695817($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
if (!is_callable('smarty_function_lang')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.lang.php';
?>
    <?php echo smarty_function_component_define_params(array('params'=>array('id')),$_smarty_tpl);?>


    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('tab-media-insert', null, 0);?>


<div class="ls-media-pane-content js-media-pane-content">
    
    <?php echo smarty_function_component(array('_default_short'=>'media','template'=>'uploader','attributes'=>array('id'=>'media-uploader'),'classes'=>'js-media-uploader','targetParams'=>$_smarty_tpl->tpl_vars['aTargetParams']->value,'targetType'=>$_smarty_tpl->tpl_vars['sMediaTargetType']->value,'targetId'=>$_smarty_tpl->tpl_vars['sMediaTargetId']->value,'targetTmp'=>$_smarty_tpl->tpl_vars['sMediaTargetTmp']->value),$_smarty_tpl);?>


</div>

<div class="ls-media-pane-footer">
    
    <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.insert.submit'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'button','mods'=>'primary','classes'=>'js-media-insert-submit','text'=>$_tmp1),$_smarty_tpl);?>


</div><?php }} ?>