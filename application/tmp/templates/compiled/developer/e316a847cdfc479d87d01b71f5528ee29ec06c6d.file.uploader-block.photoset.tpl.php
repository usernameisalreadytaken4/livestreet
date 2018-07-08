<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:06:38
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/media/uploader/uploader-block.photoset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16178583395b34cf4e1da8c1-88994890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e316a847cdfc479d87d01b71f5528ee29ec06c6d' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/media/uploader/uploader-block.photoset.tpl',
      1 => 1529954495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16178583395b34cf4e1da8c1-88994890',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cf4e204a17_82860638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cf4e204a17_82860638')) {function content_5b34cf4e204a17_82860638($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('block_content', null, null); ob_start(); ?>
    <form method="post" action="" enctype="multipart/form-data">
        
        <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.photoset.settings.fields.use_thumbs.label'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'checkbox','name'=>'use_thumbs','checked'=>true,'label'=>$_tmp1),$_smarty_tpl);?>


        
        <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.photoset.settings.fields.show_caption.label'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'checkbox','name'=>'show_caption','label'=>$_tmp2),$_smarty_tpl);?>

    </form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'media.photoset.settings.title'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'uploader','template'=>'block','title'=>$_tmp3,'content'=>Smarty::$_smarty_vars['capture']['block_content'],'classes'=>'js-media-info-block','attributes'=>array('data-type'=>'photoset','data-filetype'=>'1')),$_smarty_tpl);?>
<?php }} ?>