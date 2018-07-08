<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:04:03
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/user/blocks/block.user-nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7789340455b34ceb32a5738-38592281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f15b71bd80f41c8cac33aeef13c6f6e3e0771ba' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/components/user/blocks/block.user-nav.tpl',
      1 => 1529954501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7789340455b34ceb32a5738-38592281',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34ceb32aee04_72180077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34ceb32aee04_72180077')) {function content_5b34ceb32aee04_72180077($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'user','template'=>'nav'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'nopadding transparent user-nav','content'=>$_tmp1),$_smarty_tpl);?>
<?php }} ?>