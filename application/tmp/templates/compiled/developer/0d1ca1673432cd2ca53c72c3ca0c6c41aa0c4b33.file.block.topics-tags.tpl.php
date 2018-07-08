<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 14:53:24
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/topic/blocks/block.topics-tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13843756895b34cc3435e9d5-24301703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d1ca1673432cd2ca53c72c3ca0c6c41aa0c4b33' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/topic/blocks/block.topics-tags.tpl',
      1 => 1529954500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13843756895b34cc3435e9d5-24301703',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tags' => 0,
    'tagsUser' => 0,
    'oUserCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cc34392666_85960732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cc34392666_85960732')) {function content_5b34cc34392666_85960732($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_lang')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('tags','tagsUser')),$_smarty_tpl);?>


<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'tags.block_tags.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'tags','template'=>'search-form','mods'=>'light'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'tags.block_tags.nav.all'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'tags','template'=>'cloud','tags'=>$_smarty_tpl->tpl_vars['tags']->value),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'tags.block_tags.nav.favourite'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'tags','template'=>'cloud','tags'=>$_smarty_tpl->tpl_vars['tagsUser']->value),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','title'=>$_tmp1,'classes'=>'js-block-default','footer'=>$_tmp2,'tabs'=>array('tabs'=>array(array('text'=>$_tmp3,'content'=>$_tmp4),array('text'=>$_tmp5,'content'=>$_tmp6,'is_enabled'=>!!$_smarty_tpl->tpl_vars['oUserCurrent']->value)))),$_smarty_tpl);?>
<?php }} ?>