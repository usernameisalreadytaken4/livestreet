<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:08:55
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/blog/join.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2357898545b34cfd77812d6-10844981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07c0b0fe35b71831c5c17b0fbd2437c1633758f3' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/blog/join.tpl',
      1 => 1529954492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2357898545b34cfd77812d6-10844981',
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
  'unifunc' => 'content_5b34cfd77c0075_65860807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cfd77c0075_65860807')) {function content_5b34cfd77c0075_65860807($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('blog')),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()!=$_smarty_tpl->tpl_vars['blog']->value->getOwnerId()&&$_smarty_tpl->tpl_vars['blog']->value->getType()=='open'){?>
    <?php echo smarty_function_component(array('_default_short'=>'button','attributes'=>array('data-blog-id'=>$_smarty_tpl->tpl_vars['blog']->value->getId()),'classes'=>'js-blog-join','text'=>$_smarty_tpl->tpl_vars['blog']->value->getUserIsJoin() ? $_smarty_tpl->tpl_vars['aLang']->value['blog']['join']['leave'] : $_smarty_tpl->tpl_vars['aLang']->value['blog']['join']['join'],'mods'=>$_smarty_tpl->tpl_vars['blog']->value->getUserIsJoin() ? false : 'primary'),$_smarty_tpl);?>

<?php }?><?php }} ?>