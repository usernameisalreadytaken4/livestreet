<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 14:53:24
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/search/search-form.main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12417369305b34cc347b6841-80940675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '739623acb4b032e2f4e5ac69a4a85750d0afaeff' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/search/search-form.main.tpl',
      1 => 1529954498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12417369305b34cc347b6841-80940675',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'searchType' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cc347d1de4_55771862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cc347d1de4_55771862')) {function content_5b34cc347d1de4_55771862($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_router')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('searchType','mods','classes','attributes')),$_smarty_tpl);?>


<?php ob_start();?><?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['searchType']->value)===null||$tmp==='' ? 'topics' : $tmp);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'search-form','name'=>'main','action'=>$_tmp1.$_tmp2,'params'=>$_smarty_tpl->tpl_vars['params']->value),$_smarty_tpl);?>
<?php }} ?>