<?php /* Smarty version Smarty-3.1.13, created on 2018-06-26 19:25:49
         compiled from "C:\xampp\htdocs\application\plugins\admin\frontend\components\p-category\form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1859352335b32690d46b8d2-28079774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de4662ee358c069e5d7f541384b04b08aee5c918' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\plugins\\admin\\frontend\\components\\p-category\\form.tpl',
      1 => 1493631928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1859352335b32690d46b8d2-28079774',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
    'items' => 0,
    '_aRequest' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b32690d486e54_60767156',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b32690d486e54_60767156')) {function content_5b32690d486e54_60767156($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('p-cron-form', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('categories')),$_smarty_tpl);?>


<form method="post">
    <?php echo smarty_function_component(array('_default_short'=>'admin:field','template'=>'hidden.security-key'),$_smarty_tpl);?>


    <?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array(array('value'=>'','text'=>'')), null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
        <?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('text'=>(str_pad('',(2*$_smarty_tpl->tpl_vars['category']->value['level']),'-')).($_smarty_tpl->tpl_vars['category']->value['entity']->getTitle()),'value'=>$_smarty_tpl->tpl_vars['category']->value['entity']->getId());?>
    <?php } ?>

    <?php echo smarty_function_component(array('_default_short'=>'admin:field','template'=>'select','name'=>'category[pid]','label'=>'Вложить в','items'=>$_smarty_tpl->tpl_vars['items']->value),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'admin:field','template'=>'text','name'=>'category[title]','label'=>'Название'),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'admin:field','template'=>'textarea','name'=>'category[description]','label'=>'Описание','escape'=>false),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'admin:field','template'=>'text','name'=>'category[url]','label'=>'Url'),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'admin:field','template'=>'text','name'=>'category[order]','label'=>'Сортировка'),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'admin:button','name'=>'category_submit','text'=>((string)($_smarty_tpl->tpl_vars['_aRequest']->value ? $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['save'] : $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['add'])),'value'=>1,'mods'=>'primary'),$_smarty_tpl);?>

</form><?php }} ?>