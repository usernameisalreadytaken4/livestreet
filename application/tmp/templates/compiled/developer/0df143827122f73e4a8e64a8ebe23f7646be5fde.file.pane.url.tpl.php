<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:21
         compiled from "C:\xampp\htdocs\application\frontend\components\media\panes\pane.url.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1823284635b350291cca1a5-49311777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0df143827122f73e4a8e64a8ebe23f7646be5fde' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\media\\panes\\pane.url.tpl',
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
  'nocache_hash' => '1823284635b350291cca1a5-49311777',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b350291cdda36_42800047',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b350291cdda36_42800047')) {function content_5b350291cdda36_42800047($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
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