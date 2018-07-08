<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:06:38
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/media/panes/pane.url.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5310262245b34cf4e278543-65933121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0bcce351b6afd704c170ffec7980eecc9fa7a8e' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/media/panes/pane.url.tpl',
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
  'nocache_hash' => '5310262245b34cf4e278543-65933121',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cf4e2b8947_50189640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cf4e2b8947_50189640')) {function content_5b34cf4e2b8947_50189640($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_lang')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>
    <?php echo smarty_function_component_define_params(array('params'=>array('id')),$_smarty_tpl);?>


    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('tab-media-url', null, 0);?>


<div class="ls-media-pane-content js-media-pane-content">
    
    <form method="post" action="" enctype="multipart/form-data" class="ls-mb-20 js-media-url-form">
        
        
        

        
        <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'media.url.fields.url.label'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>'url','inputClasses'=>'js-media-url-form-url','label'=>$_tmp1),$_smarty_tpl);?>

    </form>

    <div class="ls-mb-15 js-media-url-image-preview" style="display: none"></div>

    <div class="js-media-url-settings-blocks">
        <?php echo smarty_function_component(array('_default_short'=>'media','template'=>'uploader-block.insert.image','useSizes'=>false),$_smarty_tpl);?>

    </div>

</div>

<div class="ls-media-pane-footer">
    
    <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'media.url.submit_insert'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'button','mods'=>'primary','classes'=>'js-media-url-submit-insert','text'=>$_tmp1),$_smarty_tpl);?>


    <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'media.url.submit_upload'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'button','mods'=>'primary','classes'=>'js-media-url-submit-upload','text'=>$_tmp2),$_smarty_tpl);?>


</div><?php }} ?>