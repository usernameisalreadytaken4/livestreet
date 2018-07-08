<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:51:22
         compiled from "C:\xampp\htdocs\application\frontend\components\blog\join.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13614161045b3503fa7e6a88-65263596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '278314e4551438a2c9f2f512c3af2b0551ff7a7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\blog\\join.tpl',
      1 => 1530188506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13614161045b3503fa7e6a88-65263596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'blog' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3503fa7f6488_88933127',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3503fa7f6488_88933127')) {function content_5b3503fa7f6488_88933127($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('blog')),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()!=$_smarty_tpl->tpl_vars['blog']->value->getOwnerId()&&$_smarty_tpl->tpl_vars['blog']->value->getType()=='open'){?>
    <?php echo smarty_function_component(array('_default_short'=>'button','attributes'=>array('data-blog-id'=>$_smarty_tpl->tpl_vars['blog']->value->getId()),'classes'=>'js-blog-join','text'=>$_smarty_tpl->tpl_vars['blog']->value->getUserIsJoin() ? $_smarty_tpl->tpl_vars['aLang']->value['blog']['join']['leave'] : $_smarty_tpl->tpl_vars['aLang']->value['blog']['join']['join'],'mods'=>$_smarty_tpl->tpl_vars['blog']->value->getUserIsJoin() ? false : 'primary'),$_smarty_tpl);?>

<?php }?><?php }} ?>