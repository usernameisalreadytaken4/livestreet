<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 20:06:38
         compiled from "C:\xampp\htdocs\application\frontend\components\user\nav.user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10539586205b327a5c5c8f02-51814183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5215ef4f7ba6f079f7e0aa82a3b184bd9c31d62b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\user\\nav.user.tpl',
      1 => 1530188509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10539586205b327a5c5c8f02-51814183',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b327a5c5f0011_81630045',
  'variables' => 
  array (
    'sMenuProfileItemSelect' => 0,
    'oUserProfile' => 0,
    'iCountWallUser' => 0,
    'iCountCreated' => 0,
    'iCountFavourite' => 0,
    'iCountFriendsUser' => 0,
    'iUserCurrentCountTalkNew' => 0,
    'oUserCurrent' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b327a5c5f0011_81630045')) {function content_5b327a5c5f0011_81630045($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_router')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.info'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.wall'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.publications'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.favourite'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.friends'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.activity'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.messages'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.settings'),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
<?php $_tmp10=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'nav','hook'=>'user_profile','activeItem'=>$_smarty_tpl->tpl_vars['sMenuProfileItemSelect']->value,'mods'=>'stacked','classes'=>'user-nav','hookParams'=>array('oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),'items'=>array(array('name'=>'whois','text'=>$_tmp1,'url'=>((string)$_smarty_tpl->tpl_vars['oUserProfile']->value->getUserWebPath())),array('name'=>'wall','text'=>$_tmp2,'url'=>((string)$_smarty_tpl->tpl_vars['oUserProfile']->value->getUserWebPath())."wall/",'count'=>$_smarty_tpl->tpl_vars['iCountWallUser']->value),array('name'=>'created','text'=>$_tmp3,'url'=>((string)$_smarty_tpl->tpl_vars['oUserProfile']->value->getUserWebPath())."created/topics/",'count'=>$_smarty_tpl->tpl_vars['iCountCreated']->value),array('name'=>'favourites','text'=>$_tmp4,'url'=>((string)$_smarty_tpl->tpl_vars['oUserProfile']->value->getUserWebPath())."favourites/topics/",'count'=>$_smarty_tpl->tpl_vars['iCountFavourite']->value),array('name'=>'friends','text'=>$_tmp5,'url'=>((string)$_smarty_tpl->tpl_vars['oUserProfile']->value->getUserWebPath())."friends/",'count'=>$_smarty_tpl->tpl_vars['iCountFriendsUser']->value),array('name'=>'activity','text'=>$_tmp6,'url'=>((string)$_smarty_tpl->tpl_vars['oUserProfile']->value->getUserWebPath())."stream/"),array('name'=>'talk','text'=>$_tmp7,'url'=>$_tmp8,'count'=>$_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value,'is_enabled'=>$_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()==$_smarty_tpl->tpl_vars['oUserProfile']->value->getId()),array('name'=>'settings','text'=>$_tmp9,'url'=>$_tmp10,'is_enabled'=>$_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()==$_smarty_tpl->tpl_vars['oUserProfile']->value->getId()))),$_smarty_tpl);?>
<?php }} ?>