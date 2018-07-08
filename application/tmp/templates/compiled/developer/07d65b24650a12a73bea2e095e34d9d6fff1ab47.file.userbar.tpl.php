<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 18:44:40
         compiled from "C:\xampp\htdocs\application\frontend\components\userbar\userbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10785438055b32695c2c3c54-93164870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07d65b24650a12a73bea2e095e34d9d6fff1ab47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\userbar\\userbar.tpl',
      1 => 1530188510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10785438055b32695c2c3c54-93164870',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b32695c311e60_58928129',
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'LS' => 0,
    'type' => 0,
    'iUserCurrentCountTopicDraft' => 0,
    'iUserCurrentCountWall' => 0,
    'iUserCurrentCountCreated' => 0,
    'iUserCurrentCountFavourite' => 0,
    'iUserCurrentCountFriends' => 0,
    'iUserCurrentCountTalkNew' => 0,
    'aLang' => 0,
    'createMenu' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'sMenuHeadItemSelect' => 0,
    'items' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b32695c311e60_58928129')) {function content_5b32695c311e60_58928129($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<div class="ls-userbar">
    <div class="ls-userbar-inner ls-clearfix" style="min-width: <?php echo Config::Get('view.grid.fluid_min_width');?>
; max-width: <?php echo Config::Get('view.grid.fluid_max_width');?>
;">
        <?php if (!Config::Get('view.layout_show_banner')){?>
            <h1 class="ls-userbar-logo">
                <a href="<?php echo smarty_function_router(array('page'=>'/'),$_smarty_tpl);?>
"><?php echo Config::Get('view.name');?>
</a>
            </h1>
        <?php }?>

        <nav class="ls-userbar-nav">
            <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
                <?php $_smarty_tpl->tpl_vars['createMenu'] = new Smarty_variable(array(), null, 0);?>

                <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LS']->value->Topic_GetTopicTypes(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
                    <?php $_smarty_tpl->createLocalArrayVariable('createMenu', null, 0);
$_smarty_tpl->tpl_vars['createMenu']->value[] = array('name'=>$_smarty_tpl->tpl_vars['type']->value->getCode(),'text'=>$_smarty_tpl->tpl_vars['type']->value->getName(),'url'=>$_smarty_tpl->tpl_vars['type']->value->getUrlForAdd());?>
                <?php } ?>

                <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'modal_create.items.blog'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'blog/add'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('createMenu', null, 0);
$_smarty_tpl->tpl_vars['createMenu']->value[] = array('name'=>'blog','text'=>$_tmp1,'url'=>$_tmp2);?>
                <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'modal_create.items.talk'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'talk/add'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('createMenu', null, 0);
$_smarty_tpl->tpl_vars['createMenu']->value[] = array('name'=>'talk','text'=>$_tmp3,'url'=>$_tmp4);?>
                <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'topic.drafts'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'content/drafts'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('createMenu', null, 0);
$_smarty_tpl->tpl_vars['createMenu']->value[] = array('name'=>'drafts','text'=>$_tmp5,'url'=>$_tmp6,'count'=>$_smarty_tpl->tpl_vars['iUserCurrentCountTopicDraft']->value);?>

                <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.info'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.wall'),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.publications'),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.favourite'),$_smarty_tpl);?>
<?php $_tmp10=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.friends'),$_smarty_tpl);?>
<?php $_tmp11=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.activity'),$_smarty_tpl);?>
<?php $_tmp12=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.messages'),$_smarty_tpl);?>
<?php $_tmp13=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
<?php $_tmp14=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.settings'),$_smarty_tpl);?>
<?php $_tmp15=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
<?php $_tmp16=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'admin.title'),$_smarty_tpl);?>
<?php $_tmp17=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
<?php $_tmp18=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
<?php $_tmp19=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'auth'),$_smarty_tpl);?>
<?php $_tmp20=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array(array('text'=>"<img src=\"".((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getProfileAvatarPath(24))."\" alt=\"".((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getDisplayName())."\" class=\"avatar\" /> ".((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getDisplayName()),'url'=>((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath()),'classes'=>'ls-nav-item--userbar-username','menu'=>array('items'=>array(array('name'=>'whois','text'=>$_tmp7,'url'=>((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath())),array('name'=>'wall','text'=>$_tmp8,'url'=>((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath())."wall/",'count'=>$_smarty_tpl->tpl_vars['iUserCurrentCountWall']->value),array('name'=>'created','text'=>$_tmp9,'url'=>((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath())."created/topics/",'count'=>$_smarty_tpl->tpl_vars['iUserCurrentCountCreated']->value),array('name'=>'favourites','text'=>$_tmp10,'url'=>((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath())."favourites/topics/",'count'=>$_smarty_tpl->tpl_vars['iUserCurrentCountFavourite']->value),array('name'=>'friends','text'=>$_tmp11,'url'=>((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath())."friends/",'count'=>$_smarty_tpl->tpl_vars['iUserCurrentCountFriends']->value),array('name'=>'activity','text'=>$_tmp12,'url'=>((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath())."stream/"),array('name'=>'talk','text'=>$_tmp13,'url'=>$_tmp14,'count'=>$_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value),array('name'=>'settings','text'=>$_tmp15,'url'=>$_tmp16),array('name'=>'admin','text'=>$_tmp17,'url'=>$_tmp18,'is_enabled'=>$_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator())))),array('text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['create'],'menu'=>array('hook'=>'create','items'=>$_smarty_tpl->tpl_vars['createMenu']->value)),array('text'=>$_smarty_tpl->tpl_vars['aLang']->value['talk']['title'],'url'=>$_tmp19,'title'=>$_smarty_tpl->tpl_vars['aLang']->value['talk']['new_messages'],'is_enabled'=>$_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value,'count'=>$_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value),array('text'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['logout'],'url'=>$_tmp20."logout/?security_ls_key=".((string)$_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value))), null, 0);?>
            <?php }else{ ?>
                <?php ob_start();?><?php echo smarty_function_router(array('page'=>'auth/login'),$_smarty_tpl);?>
<?php $_tmp21=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'auth/register'),$_smarty_tpl);?>
<?php $_tmp22=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array(array('text'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['login']['title'],'classes'=>'js-modal-toggle-login','url'=>$_tmp21),array('text'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['registration']['title'],'classes'=>'js-modal-toggle-registration','url'=>$_tmp22)), null, 0);?>
            <?php }?>

            <?php echo smarty_function_component(array('_default_short'=>'nav','hook'=>'userbar_nav','hookParams'=>array('user'=>$_smarty_tpl->tpl_vars['oUserCurrent']->value),'activeItem'=>$_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value,'mods'=>'userbar','items'=>$_smarty_tpl->tpl_vars['items']->value),$_smarty_tpl);?>

        </nav>

        <?php echo smarty_function_component(array('_default_short'=>'search','template'=>'main','mods'=>'light'),$_smarty_tpl);?>

    </div>
</div>
<?php }} ?>