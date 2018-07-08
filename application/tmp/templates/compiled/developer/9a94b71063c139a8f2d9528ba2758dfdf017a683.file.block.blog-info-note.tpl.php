<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:08:32
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/blog/blocks/block.blog-info-note.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2886092995b34cfc0468893-80141780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a94b71063c139a8f2d9528ba2758dfdf017a683' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/blog/blocks/block.blog-info-note.tpl',
      1 => 1529954492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2886092995b34cfc0468893-80141780',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cfc0478e70_83593341',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cfc0478e70_83593341')) {function content_5b34cfc0478e70_83593341($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'topic.blocks.tip.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'topic.blocks.tip.text'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'info','title'=>$_tmp1,'content'=>$_tmp2),$_smarty_tpl);?>
<?php }} ?>