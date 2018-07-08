<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 14:53:24
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/tags/search-form.tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5810222745b34cc343987e5-00539019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a0cab327958a4603c06736c30d56c1b612d2083' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/tags/search-form.tags.tpl',
      1 => 1529954593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5810222745b34cc343987e5-00539019',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mods' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cc343b0431_75892833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cc343b0431_75892833')) {function content_5b34cc343b0431_75892833($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_lang')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('mods','classes','attributes')),$_smarty_tpl);?>


<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'tags.search.label'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'search-form','name'=>'tags','mods'=>$_smarty_tpl->tpl_vars['mods']->value,'placeholder'=>$_tmp1,'classes'=>'js-tag-search-form','inputClasses'=>'autocomplete-tags js-tag-search','inputName'=>'tag','value'=>$_smarty_tpl->tpl_vars['tag']->value),$_smarty_tpl);?>
<?php }} ?>