<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:04:03
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/user/blocks/block.user-note.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17064422725b34ceb32813d0-53301232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16f555d84b6117e0a404c728cd46234c49c25760' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/user/blocks/block.user-note.tpl',
      1 => 1529954501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17064422725b34ceb32813d0-53301232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'oUserProfile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34ceb32a1339_30826681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34ceb32a1339_30826681')) {function content_5b34ceb32a1339_30826681($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()!=$_smarty_tpl->tpl_vars['oUserProfile']->value->getId()){?>
    <?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'note','classes'=>'js-user-note','note'=>$_smarty_tpl->tpl_vars['oUserProfile']->value->getUserNote(),'targetId'=>$_smarty_tpl->tpl_vars['oUserProfile']->value->getId()),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'nopadding transparent user-note','content'=>$_tmp1),$_smarty_tpl);?>

<?php }?><?php }} ?>