<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:45:12
         compiled from "C:\xampp\htdocs\application\frontend\components\user\blocks\block.users-search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16454268115b327c7328b344-47828060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f2c47de24cd4019ee1480cb1a77e8fc2e8b2de5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\user\\blocks\\block.users-search.tpl',
      1 => 1530188509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16454268115b327c7328b344-47828060',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b327c7329ad53_80033497',
  'variables' => 
  array (
    'countriesUsed' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b327c7329ad53_80033497')) {function content_5b327c7329ad53_80033497($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('block_content', null, null); ob_start(); ?>
    
    <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'user.search.form.is_online'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'checkbox','name'=>'is_online','inputClasses'=>'js-search-ajax-user-online','checked'=>false,'label'=>$_tmp1),$_smarty_tpl);?>


    
    <p class="ls-mb-10">Пол</p>
    <div class="ls-field-checkbox-group">
        <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'user.search.form.gender.any'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'radio','inputClasses'=>'js-search-ajax-user-sex','name'=>'sex','value'=>'','checked'=>true,'label'=>$_tmp2),$_smarty_tpl);?>

        <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'user.search.form.gender.male'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'radio','inputClasses'=>'js-search-ajax-user-sex','name'=>'sex','value'=>'man','label'=>$_tmp3),$_smarty_tpl);?>

        <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'user.search.form.gender.female'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'radio','inputClasses'=>'js-search-ajax-user-sex','name'=>'sex','value'=>'woman','label'=>$_tmp4),$_smarty_tpl);?>

    </div>

    
    <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.settings.profile.fields.place.label'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'geo','classes'=>'js-field-geo-default','targetType'=>'user','countries'=>$_smarty_tpl->tpl_vars['countriesUsed']->value,'name'=>'geo','label'=>$_tmp5),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'user.search.title'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'users-search','title'=>$_tmp6,'content'=>Smarty::$_smarty_vars['capture']['block_content']),$_smarty_tpl);?>
<?php }} ?>