<?php /* Smarty version Smarty-3.1.13, created on 2018-06-26 19:26:48
         compiled from "C:\xampp\htdocs\application\frontend\skin\synio\components\user\info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20701067455b326948b6e151-30667313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54d9ccf7f401cb1db3b50da7c0fab22e0ba123c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\skin\\synio\\components\\user\\info.tpl',
      1 => 1493631808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20701067455b326948b6e151-30667313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'geoTarget' => 0,
    'items' => 0,
    'invitedByUser' => 0,
    'usersInvited' => 0,
    'users' => 0,
    'userInvited' => 0,
    'blogsCreated' => 0,
    'blogs' => 0,
    'blog' => 0,
    'blogsAdminister' => 0,
    'blogUser' => 0,
    'blogsModerate' => 0,
    'blogsJoined' => 0,
    'session' => 0,
    'userfields' => 0,
    'field' => 0,
    'friends' => 0,
    'aLang' => 0,
    'iCountFriendsUser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b326948c06709_49124935',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b326948c06709_49124935')) {function content_5b326948c06709_49124935($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_hook')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.hook.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_date_format')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.date_format.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
if (!is_callable('smarty_insert_block')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\insert.block.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('blogsAdminister','blogsCreated','blogsJoined','blogsModerate','friends','invitedByUser','user','usersInvited','mods','classes','attributes')),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['session'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->getSession(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['geoTarget'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->getGeoTarget(), null, 0);?>


<?php echo smarty_function_hook(array('run'=>'user_info_begin','user'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);?>



<div class="user-info-about">
    <h3 class="user-info-about-title">
        <?php echo smarty_function_lang(array('_default_short'=>'user.profile.about.title'),$_smarty_tpl);?>

    </h3>

    <?php if ($_smarty_tpl->tpl_vars['user']->value->getProfileAbout()){?>
        <div class="ls-text">
            <?php echo $_smarty_tpl->tpl_vars['user']->value->getProfileAbout();?>

        </div>
    <?php }else{ ?>
        <div class="user-info-about-empty-text">
            <?php echo smarty_function_lang(array('_default_short'=>'synio.user_about_empty'),$_smarty_tpl);?>

        </div>
    <?php }?>
</div>


<div class="user-info-group-wrapper ls-clearfix">
    <div class="user-info-group-col">
        
        <?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array(), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['userfields'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->getUserFieldValues(true,array('')), null, 0);?>

        
        <?php if ($_smarty_tpl->tpl_vars['user']->value->getProfileSex()!='other'){?>
            <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.personal.gender'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['user']->value->getProfileSex()=='man'){?><?php echo smarty_function_lang(array('name'=>'user.profile.personal.gender_male'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smarty_function_lang(array('name'=>'user.profile.personal.gender_female'),$_smarty_tpl);?>
<?php }?><?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>$_tmp1,'content'=>$_tmp2);?>
        <?php }?>

        
        <?php if ($_smarty_tpl->tpl_vars['user']->value->getProfileBirthday()){?>
            <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.personal.birthday'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['user']->value->getProfileBirthday(),'format'=>"j F Y",'notz'=>true),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>$_tmp3,'content'=>$_tmp4);?>
        <?php }?>

        
        <?php if ($_smarty_tpl->tpl_vars['geoTarget']->value){?>
            <?php $_smarty_tpl->_capture_stack[0][] = array('info_private_geo', null, null); ob_start(); ?>
                <span itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address">
                    <?php if ($_smarty_tpl->tpl_vars['geoTarget']->value->getCountryId()){?>
                        <span itemprop="country-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->getProfileCountry(), ENT_QUOTES, 'UTF-8', true);?>
</span><?php if ($_smarty_tpl->tpl_vars['geoTarget']->value->getCityId()){?>,<?php }?>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['geoTarget']->value->getCityId()){?>
                        <span itemprop="locality"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->getProfileCity(), ENT_QUOTES, 'UTF-8', true);?>
</span>
                    <?php }?>
                </span>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.personal.place'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>$_tmp5,'content'=>Smarty::$_smarty_vars['capture']['info_private_geo']);?>
        <?php }?>

        <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.personal.title'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'user.info-group','title'=>$_tmp6,'items'=>$_smarty_tpl->tpl_vars['items']->value),$_smarty_tpl);?>


        
        <?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array(), null, 0);?>

        
        <?php if ($_smarty_tpl->tpl_vars['invitedByUser']->value){?>
            <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.activity.invited_by'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>$_tmp7,'content'=>"<a href=\"".((string)$_smarty_tpl->tpl_vars['invitedByUser']->value->getUserWebPath())."\">".((string)$_smarty_tpl->tpl_vars['invitedByUser']->value->getDisplayName())."</a>");?>
        <?php }?>

        
        <?php if ($_smarty_tpl->tpl_vars['usersInvited']->value){?>
            <?php $_smarty_tpl->tpl_vars['users'] = new Smarty_variable('', null, 0);?>

            <?php  $_smarty_tpl->tpl_vars['userInvited'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userInvited']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usersInvited']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['userInvited']->key => $_smarty_tpl->tpl_vars['userInvited']->value){
$_smarty_tpl->tpl_vars['userInvited']->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars['users'] = new Smarty_variable(($_smarty_tpl->tpl_vars['users']->value).("<a href=\"".((string)$_smarty_tpl->tpl_vars['userInvited']->value->getUserWebPath())."\">".((string)$_smarty_tpl->tpl_vars['userInvited']->value->getDisplayName())."</a>&nbsp;"), null, 0);?>
            <?php } ?>

            <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.activity.invited'),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>$_tmp8,'content'=>$_smarty_tpl->tpl_vars['users']->value);?>
        <?php }?>

        
        <?php if ($_smarty_tpl->tpl_vars['blogsCreated']->value){?>
            <?php $_smarty_tpl->tpl_vars['blogs'] = new Smarty_variable('', null, 0);?>

            <?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogsCreated']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['blog']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['blog']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value){
$_smarty_tpl->tpl_vars['blog']->_loop = true;
 $_smarty_tpl->tpl_vars['blog']->iteration++;
 $_smarty_tpl->tpl_vars['blog']->last = $_smarty_tpl->tpl_vars['blog']->iteration === $_smarty_tpl->tpl_vars['blog']->total;
?>
                <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp9=ob_get_clean();?><?php ob_start();?><?php if (!$_smarty_tpl->tpl_vars['blog']->last){?><?php echo ", ";?><?php }?><?php $_tmp10=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['blogs'] = new Smarty_variable(($_smarty_tpl->tpl_vars['blogs']->value).("<a href=\"".((string)$_smarty_tpl->tpl_vars['blog']->value->getUrlFull())."\">".$_tmp9."</a>".$_tmp10), null, 0);?>
            <?php } ?>

            <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.activity.blogs_created'),$_smarty_tpl);?>
<?php $_tmp11=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>$_tmp11,'content'=>$_smarty_tpl->tpl_vars['blogs']->value);?>
        <?php }?>

        
        <?php if ($_smarty_tpl->tpl_vars['blogsAdminister']->value){?>
            <?php $_smarty_tpl->tpl_vars['blogs'] = new Smarty_variable('', null, 0);?>

            <?php  $_smarty_tpl->tpl_vars['blogUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blogUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogsAdminister']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['blogUser']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['blogUser']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['blogUser']->key => $_smarty_tpl->tpl_vars['blogUser']->value){
$_smarty_tpl->tpl_vars['blogUser']->_loop = true;
 $_smarty_tpl->tpl_vars['blogUser']->iteration++;
 $_smarty_tpl->tpl_vars['blogUser']->last = $_smarty_tpl->tpl_vars['blogUser']->iteration === $_smarty_tpl->tpl_vars['blogUser']->total;
?>
                <?php $_smarty_tpl->tpl_vars['blog'] = new Smarty_variable($_smarty_tpl->tpl_vars['blogUser']->value->getBlog(), null, 0);?>
                <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp12=ob_get_clean();?><?php ob_start();?><?php if (!$_smarty_tpl->tpl_vars['blogUser']->last){?><?php echo ", ";?><?php }?><?php $_tmp13=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['blogs'] = new Smarty_variable(($_smarty_tpl->tpl_vars['blogs']->value).("<a href=\"".((string)$_smarty_tpl->tpl_vars['blog']->value->getUrlFull())."\">".$_tmp12."</a>".$_tmp13), null, 0);?>
            <?php } ?>

            <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.activity.blogs_admin'),$_smarty_tpl);?>
<?php $_tmp14=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>$_tmp14,'content'=>$_smarty_tpl->tpl_vars['blogs']->value);?>
        <?php }?>

        
        <?php if ($_smarty_tpl->tpl_vars['blogsModerate']->value){?>
            <?php $_smarty_tpl->tpl_vars['blogs'] = new Smarty_variable('', null, 0);?>

            <?php  $_smarty_tpl->tpl_vars['blogUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blogUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogsModerate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['blogUser']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['blogUser']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['blogUser']->key => $_smarty_tpl->tpl_vars['blogUser']->value){
$_smarty_tpl->tpl_vars['blogUser']->_loop = true;
 $_smarty_tpl->tpl_vars['blogUser']->iteration++;
 $_smarty_tpl->tpl_vars['blogUser']->last = $_smarty_tpl->tpl_vars['blogUser']->iteration === $_smarty_tpl->tpl_vars['blogUser']->total;
?>
                <?php $_smarty_tpl->tpl_vars['blog'] = new Smarty_variable($_smarty_tpl->tpl_vars['blogUser']->value->getBlog(), null, 0);?>
                <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp15=ob_get_clean();?><?php ob_start();?><?php if (!$_smarty_tpl->tpl_vars['blogUser']->last){?><?php echo ", ";?><?php }?><?php $_tmp16=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['blogs'] = new Smarty_variable(($_smarty_tpl->tpl_vars['blogs']->value).("<a href=\"".((string)$_smarty_tpl->tpl_vars['blog']->value->getUrlFull())."\">".$_tmp15."</a>".$_tmp16), null, 0);?>
            <?php } ?>

            <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.activity.blogs_mod'),$_smarty_tpl);?>
<?php $_tmp17=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>$_tmp17,'content'=>$_smarty_tpl->tpl_vars['blogs']->value);?>
        <?php }?>

        
        <?php if ($_smarty_tpl->tpl_vars['blogsJoined']->value){?>
            <?php $_smarty_tpl->tpl_vars['blogs'] = new Smarty_variable('', null, 0);?>

            <?php  $_smarty_tpl->tpl_vars['blogUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blogUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogsJoined']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['blogUser']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['blogUser']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['blogUser']->key => $_smarty_tpl->tpl_vars['blogUser']->value){
$_smarty_tpl->tpl_vars['blogUser']->_loop = true;
 $_smarty_tpl->tpl_vars['blogUser']->iteration++;
 $_smarty_tpl->tpl_vars['blogUser']->last = $_smarty_tpl->tpl_vars['blogUser']->iteration === $_smarty_tpl->tpl_vars['blogUser']->total;
?>
                <?php $_smarty_tpl->tpl_vars['blog'] = new Smarty_variable($_smarty_tpl->tpl_vars['blogUser']->value->getBlog(), null, 0);?>
                <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp18=ob_get_clean();?><?php ob_start();?><?php if (!$_smarty_tpl->tpl_vars['blogUser']->last){?><?php echo ", ";?><?php }?><?php $_tmp19=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['blogs'] = new Smarty_variable(($_smarty_tpl->tpl_vars['blogs']->value).("<a href=\"".((string)$_smarty_tpl->tpl_vars['blog']->value->getUrlFull())."\">".$_tmp18."</a>".$_tmp19), null, 0);?>
            <?php } ?>

            <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.activity.blogs_joined'),$_smarty_tpl);?>
<?php $_tmp20=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>$_tmp20,'content'=>$_smarty_tpl->tpl_vars['blogs']->value);?>
        <?php }?>

        
        <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.date_registration'),$_smarty_tpl);?>
<?php $_tmp21=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['user']->value->getDateRegister()),$_smarty_tpl);?>
<?php $_tmp22=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>$_tmp21,'content'=>$_tmp22);?>

        
        <?php if ($_smarty_tpl->tpl_vars['session']->value){?>
            <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.date_last_session'),$_smarty_tpl);?>
<?php $_tmp23=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['session']->value->getDateLast()),$_smarty_tpl);?>
<?php $_tmp24=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>$_tmp23,'content'=>$_tmp24);?>
        <?php }?>

        <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.activity.title'),$_smarty_tpl);?>
<?php $_tmp25=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'user.info-group','name'=>'activity','title'=>$_tmp25,'items'=>$_smarty_tpl->tpl_vars['items']->value),$_smarty_tpl);?>

    </div>

    <div class="user-info-group-col">
        
        <?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array(), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['userfields'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->getUserFieldValues(true,array('contact')), null, 0);?>

        <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userfields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
            <?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>htmlspecialchars($_smarty_tpl->tpl_vars['field']->value->getTitle(), ENT_QUOTES, 'UTF-8', true),'content'=>$_smarty_tpl->tpl_vars['field']->value->getValue(true,true));?>
        <?php } ?>

        <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.contact'),$_smarty_tpl);?>
<?php $_tmp26=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'user.info-group','name'=>'contact','title'=>$_tmp26,'items'=>$_smarty_tpl->tpl_vars['items']->value),$_smarty_tpl);?>



        
        <?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array(), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['userfields'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->getUserFieldValues(true,array('social')), null, 0);?>

        <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userfields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
            <?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>htmlspecialchars($_smarty_tpl->tpl_vars['field']->value->getTitle(), ENT_QUOTES, 'UTF-8', true),'content'=>$_smarty_tpl->tpl_vars['field']->value->getValue(true,true));?>
        <?php } ?>

        <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.social_networks'),$_smarty_tpl);?>
<?php $_tmp27=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'user.info-group','name'=>'social-networks','title'=>$_tmp27,'items'=>$_smarty_tpl->tpl_vars['items']->value),$_smarty_tpl);?>

    </div>
</div>


<?php if ($_smarty_tpl->tpl_vars['friends']->value){?>
    <?php $_smarty_tpl->_capture_stack[0][] = array('user_info_friends', null, null); ob_start(); ?>
        <?php echo smarty_function_component(array('_default_short'=>'user.avatar-list','users'=>$_smarty_tpl->tpl_vars['friends']->value),$_smarty_tpl);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo smarty_function_component(array('_default_short'=>'user.info-group','url'=>((string)$_smarty_tpl->tpl_vars['user']->value->getUserWebPath())."friends/",'title'=>$_smarty_tpl->tpl_vars['aLang']->value['user']['friends']['title'],'count'=>$_smarty_tpl->tpl_vars['iCountFriendsUser']->value,'html'=>Smarty::$_smarty_vars['capture']['user_info_friends']),$_smarty_tpl);?>

<?php }?>


<?php echo smarty_function_hook(array('run'=>'user_info_end','user'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);?>



<?php $_smarty_tpl->_capture_stack[0][] = array('user_info_wall', null, null); ob_start(); ?>
    <?php echo smarty_insert_block(array('block' => 'wall', 'params' => array('classes'=>'js-wall-default','user_id'=>$_smarty_tpl->tpl_vars['user']->value->getId())),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'wall.title'),$_smarty_tpl);?>
<?php $_tmp28=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'user.info-group','name'=>'wall','title'=>$_tmp28,'html'=>Smarty::$_smarty_vars['capture']['user_info_wall']),$_smarty_tpl);?>
<?php }} ?>