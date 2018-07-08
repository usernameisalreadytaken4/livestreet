<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:08:55
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/blog/search-form.blogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17059583625b34cfd74a9b70-95486134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1d5b11bfa145c70db36f77ac2427490361ae29d' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/blog/search-form.blogs.tpl',
      1 => 1529954492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17059583625b34cfd74a9b70-95486134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cfd74ba593_83928989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cfd74ba593_83928989')) {function content_5b34cfd74ba593_83928989($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php echo smarty_function_component(array('_default_short'=>'search-form','name'=>'blog','method'=>'post','placeholder'=>$_smarty_tpl->tpl_vars['aLang']->value['blog']['search']['placeholder'],'inputClasses'=>'js-search-text-main','inputName'=>'blog_title','noSubmitButton'=>true),$_smarty_tpl);?>
<?php }} ?>