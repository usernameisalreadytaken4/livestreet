<?php /* Smarty version Smarty-3.1.13, created on 2018-06-26 21:07:50
         compiled from "C:\xampp\htdocs\application\plugins\admin\frontend\skin\default\actions\ActionAdmin\plugins\install.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5950504215b3280f6337554-44154899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '731bf0f7dfa862c8b26fc947fb14fbef54624873' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\plugins\\admin\\frontend\\skin\\default\\actions\\ActionAdmin\\plugins\\install.tpl',
      1 => 1493631928,
      2 => 'file',
    ),
    '75780b84697e27f56044aca7f5fe6914694c4a48' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\plugins\\admin\\frontend\\skin\\default\\layouts\\layout.base.tpl',
      1 => 1493631928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5950504215b3280f6337554-44154899',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTemplatePathPlugin' => 0,
    'sHtmlDescription' => 0,
    'sHtmlKeywords' => 0,
    'sHtmlTitle' => 0,
    'aHtmlHeadFiles' => 0,
    'aAdminTemplateWebPathPlugin' => 0,
    'aHtmlRssAlternate' => 0,
    'sHtmlCanonical' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    '_sPhpSessionId' => 0,
    '_sPhpSessionName' => 0,
    'aRouter' => 0,
    'sPage' => 0,
    'sPath' => 0,
    'LS' => 0,
    'sBodyClasses' => 0,
    'bNoSidebar' => 0,
    'layoutBackUrl' => 0,
    'layoutBackText' => 0,
    'bNoSystemMessages' => 0,
    'aMsgError' => 0,
    'aMsgNotice' => 0,
    'oMenuMain' => 0,
    'sLayoutAfter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b3280f63fe902_90414575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3280f63fe902_90414575')) {function content_5b3280f63fe902_90414575($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_json')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.json.php';
if (!is_callable('smarty_function_lang_load')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang_load.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
if (!is_callable('smarty_function_request_filter')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.request_filter.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_hook')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.hook.php';
?><!doctype html>



<!--[if lt IE 7]>
<html class="no-js ie6 oldie" lang="ru"> <![endif]-->
<!--[if IE 7]>
<html class="no-js ie7 oldie" lang="ru"> <![endif]-->
<!--[if IE 8]>
<html class="no-js ie8 oldie" lang="ru"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="ru"> <!--<![endif]-->

<head>
    
    

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['sHtmlDescription']->value;?>
">
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['sHtmlKeywords']->value;?>
">

    <title><?php echo $_smarty_tpl->tpl_vars['sHtmlTitle']->value;?>
</title>

    
    <?php echo $_smarty_tpl->tpl_vars['aHtmlHeadFiles']->value['css'];?>


    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href="<?php echo $_smarty_tpl->tpl_vars['aAdminTemplateWebPathPlugin']->value['admin'];?>
assets/images/favicon.ico" rel="shortcut icon" />
    <link rel="search" type="application/opensearchdescription+xml" href="<?php echo smarty_function_router(array('page'=>"search/opensearch"),$_smarty_tpl);?>
" title="<?php echo Config::Get('view.name');?>
"/>

    
    <?php if ($_smarty_tpl->tpl_vars['aHtmlRssAlternate']->value){?>
        <link rel="alternate" type="application/rss+xml" href="<?php echo $_smarty_tpl->tpl_vars['aHtmlRssAlternate']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['aHtmlRssAlternate']->value['title'];?>
">
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['sHtmlCanonical']->value){?>
        <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['sHtmlCanonical']->value;?>
"/>
    <?php }?>


    <script>
        var PATH_ROOT = '<?php echo Router::GetPath('/');?>
',
                PATH_SKIN = '<?php echo Config::Get("path.skin.web");?>
',
                PATH_FRAMEWORK_FRONTEND = '<?php echo Config::Get("path.framework.frontend.web");?>
',
                PATH_FRAMEWORK_LIBS_VENDOR = '<?php echo Config::Get("path.framework.libs_vendor.web");?>
',
                /**
                 * Для совместимости с прошлыми версиями. БУДУТ УДАЛЕНЫ
                 */
                DIR_WEB_ROOT = '<?php echo Config::Get("path.root.web");?>
',
                DIR_STATIC_SKIN = '<?php echo Config::Get("path.skin.web");?>
',
                DIR_STATIC_FRAMEWORK = '<?php echo Config::Get("path.framework.frontend.web");?>
',
                DIR_ENGINE_LIBS = '<?php echo Config::Get("path.framework.web");?>
/libs',

                LIVESTREET_SECURITY_KEY = '<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
',
                SESSION_ID = '<?php echo $_smarty_tpl->tpl_vars['_sPhpSessionId']->value;?>
',
                SESSION_NAME = '<?php echo $_smarty_tpl->tpl_vars['_sPhpSessionName']->value;?>
',
                LANGUAGE = '<?php echo Config::Get('lang.current');?>
',
                WYSIWYG = <?php if (Config::Get('view.wysiwyg')){?>true<?php }else{ ?>false<?php }?>;

        var aRouter = [];
        <?php  $_smarty_tpl->tpl_vars['sPath'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sPath']->_loop = false;
 $_smarty_tpl->tpl_vars['sPage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aRouter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sPath']->key => $_smarty_tpl->tpl_vars['sPath']->value){
$_smarty_tpl->tpl_vars['sPath']->_loop = true;
 $_smarty_tpl->tpl_vars['sPage']->value = $_smarty_tpl->tpl_vars['sPath']->key;
?>
        aRouter['<?php echo $_smarty_tpl->tpl_vars['sPage']->value;?>
'] = '<?php echo $_smarty_tpl->tpl_vars['sPath']->value;?>
';
        <?php } ?>
    </script>

    
    <?php echo $_smarty_tpl->tpl_vars['aHtmlHeadFiles']->value['js'];?>


    <script>
        ls.lang.load(<?php echo smarty_function_json(array('var'=>$_smarty_tpl->tpl_vars['LS']->value->Lang_GetLangJs()),$_smarty_tpl);?>
);
        ls.lang.load(<?php echo smarty_function_lang_load(array('name'=>"blog"),$_smarty_tpl);?>
);
    </script>


    
    

</head>


<body class="<?php echo $_smarty_tpl->tpl_vars['sBodyClasses']->value;?>
  ls-admin">




<div id="container" class=" <?php if ($_smarty_tpl->tpl_vars['bNoSidebar']->value){?>no-sidebar<?php }?>">
    
    <?php echo smarty_function_component(array('_default_short'=>'admin:p-userbar'),$_smarty_tpl);?>


    
    <div id="wrapper" class=" ls-clearfix">
        
        <div id="content" role="main">
            
            <?php $_smarty_tpl->_capture_stack[0][] = array('actionbar', null, null); ob_start(); ?>
                
	<?php $_smarty_tpl->tpl_vars['sVersionCurrent'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['sVersionCurrent']->value)===null||$tmp==='' ? 'all' : $tmp), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['sSectionCurrent'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['sSectionCurrent']->value)===null||$tmp==='' ? 'all' : $tmp), null, 0);?>

	<?php  $_smarty_tpl->tpl_vars['sPluginType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sPluginType']->_loop = false;
 $_from = Config::Get('plugin.admin.catalog.remote.addons.type'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sPluginType']->key => $_smarty_tpl->tpl_vars['sPluginType']->value){
$_smarty_tpl->tpl_vars['sPluginType']->_loop = true;
?>
		<?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin/plugins/install'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_request_filter(array('name'=>array('order','type','version','section'),'value'=>array($_smarty_tpl->tpl_vars['sSortOrderCurrent']->value,$_smarty_tpl->tpl_vars['sPluginType']->value,$_smarty_tpl->tpl_vars['sVersionCurrent']->value,$_smarty_tpl->tpl_vars['sSectionCurrent']->value)),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['sPluginTypeCurrent']->value==$_smarty_tpl->tpl_vars['sPluginType']->value){?><?php echo "active";?><?php }?><?php $_tmp3=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'admin:button','url'=>$_tmp1.$_tmp2,'text'=>$_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['plugins']['install']['filter']['type'][$_smarty_tpl->tpl_vars['sPluginType']->value],'classes'=>$_tmp3),$_smarty_tpl);?>

	<?php } ?>

	<?php $_smarty_tpl->tpl_vars['menu'] = new Smarty_variable(array(), null, 0);?>

	<?php  $_smarty_tpl->tpl_vars['sSorting'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sSorting']->_loop = false;
 $_from = Config::Get('plugin.admin.catalog.remote.addons.sorting'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sSorting']->key => $_smarty_tpl->tpl_vars['sSorting']->value){
$_smarty_tpl->tpl_vars['sSorting']->_loop = true;
?>
		<?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin/plugins/install'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_request_filter(array('name'=>array('order','type','version','section'),'value'=>array($_smarty_tpl->tpl_vars['sSorting']->value,$_smarty_tpl->tpl_vars['sPluginTypeCurrent']->value,$_smarty_tpl->tpl_vars['sVersionCurrent']->value,$_smarty_tpl->tpl_vars['sSectionCurrent']->value)),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>"plugin.admin.plugins.install.filter.sorting.".((string)$_smarty_tpl->tpl_vars['sSorting']->value)),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('menu', null, 0);
$_smarty_tpl->tpl_vars['menu']->value[] = array('name'=>$_smarty_tpl->tpl_vars['sSorting']->value,'url'=>$_tmp4.$_tmp5,'text'=>$_tmp6);?>
	<?php } ?>

	<?php echo smarty_function_component(array('_default_short'=>'admin:dropdown','text'=>'...','classes'=>'js-admin-actionbar-dropdown','activeItem'=>$_smarty_tpl->tpl_vars['sSortOrderCurrent']->value,'menu'=>$_smarty_tpl->tpl_vars['menu']->value),$_smarty_tpl);?>



	<?php $_smarty_tpl->tpl_vars['menu'] = new Smarty_variable(array(), null, 0);?>

	<?php  $_smarty_tpl->tpl_vars['sVersion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sVersion']->_loop = false;
 $_from = Config::Get('plugin.admin.catalog.remote.addons.versions'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sVersion']->key => $_smarty_tpl->tpl_vars['sVersion']->value){
$_smarty_tpl->tpl_vars['sVersion']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars['sVersion'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['sVersion']->value)===null||$tmp==='' ? 'all' : $tmp), null, 0);?>

		<?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin/plugins/install'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_request_filter(array('name'=>array('order','type','version','section'),'value'=>array($_smarty_tpl->tpl_vars['sSortOrderCurrent']->value,$_smarty_tpl->tpl_vars['sPluginTypeCurrent']->value,$_smarty_tpl->tpl_vars['sVersion']->value,$_smarty_tpl->tpl_vars['sSectionCurrent']->value)),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>"plugin.admin.plugins.install.filter.versions.".((string)$_smarty_tpl->tpl_vars['sVersion']->value)),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('menu', null, 0);
$_smarty_tpl->tpl_vars['menu']->value[] = array('name'=>$_smarty_tpl->tpl_vars['sVersion']->value,'url'=>$_tmp7.$_tmp8,'text'=>$_tmp9);?>
	<?php } ?>

	<?php echo smarty_function_component(array('_default_short'=>'admin:dropdown','text'=>'...','classes'=>'js-admin-actionbar-dropdown','activeItem'=>$_smarty_tpl->tpl_vars['sVersionCurrent']->value,'menu'=>$_smarty_tpl->tpl_vars['menu']->value),$_smarty_tpl);?>



	<?php $_smarty_tpl->tpl_vars['menu'] = new Smarty_variable(array(), null, 0);?>

	<?php  $_smarty_tpl->tpl_vars['sSection'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sSection']->_loop = false;
 $_from = Config::Get('plugin.admin.catalog.remote.addons.sections'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sSection']->key => $_smarty_tpl->tpl_vars['sSection']->value){
$_smarty_tpl->tpl_vars['sSection']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars['sSection'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['sSection']->value)===null||$tmp==='' ? 'all' : $tmp), null, 0);?>

		<?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin/plugins/install'),$_smarty_tpl);?>
<?php $_tmp10=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_request_filter(array('name'=>array('order','type','version','section'),'value'=>array($_smarty_tpl->tpl_vars['sSortOrderCurrent']->value,$_smarty_tpl->tpl_vars['sPluginTypeCurrent']->value,$_smarty_tpl->tpl_vars['sVersionCurrent']->value,$_smarty_tpl->tpl_vars['sSection']->value)),$_smarty_tpl);?>
<?php $_tmp11=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>"plugin.admin.plugins.install.filter.sections.".((string)$_smarty_tpl->tpl_vars['sSection']->value)),$_smarty_tpl);?>
<?php $_tmp12=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('menu', null, 0);
$_smarty_tpl->tpl_vars['menu']->value[] = array('name'=>$_smarty_tpl->tpl_vars['sSection']->value,'url'=>$_tmp10.$_tmp11,'text'=>$_tmp12);?>
	<?php } ?>

	<?php echo smarty_function_component(array('_default_short'=>'admin:dropdown','text'=>'...','classes'=>'js-admin-actionbar-dropdown','activeItem'=>$_smarty_tpl->tpl_vars['sSectionCurrent']->value,'menu'=>$_smarty_tpl->tpl_vars['menu']->value),$_smarty_tpl);?>


	
	<?php if (Config::Get('sys.cache.use')){?>
		<?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin/plugins/install/resetcache'),$_smarty_tpl);?>
<?php $_tmp13=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'admin:button','url'=>$_tmp13."?security_ls_key=".((string)$_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value),'text'=>$_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['plugins']['install']['update']),$_smarty_tpl);?>

	<?php }?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            
            <?php echo smarty_function_component(array('_default_short'=>'admin:p-actionbar','backUrl'=>$_smarty_tpl->tpl_vars['layoutBackUrl']->value,'backText'=>$_smarty_tpl->tpl_vars['layoutBackText']->value,'content'=>Smarty::$_smarty_vars['capture']['actionbar']),$_smarty_tpl);?>


            

            <div class="content-padding">
                
                    <h2 class="page-header">
	<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['plugins']['install']['title'];?>
 <?php if ($_smarty_tpl->tpl_vars['aPaging']->value&&$_smarty_tpl->tpl_vars['aPaging']->value['iCount']){?><span>(<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['iCount'];?>
)</span><?php }?>
</h2>
                

                
                <?php if (!$_smarty_tpl->tpl_vars['bNoSystemMessages']->value){?>
                    <?php if ($_smarty_tpl->tpl_vars['aMsgError']->value){?>
                        <?php echo smarty_function_component(array('_default_short'=>'admin:alert','text'=>$_smarty_tpl->tpl_vars['aMsgError']->value,'mods'=>'error','dismissible'=>true),$_smarty_tpl);?>

                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['aMsgNotice']->value){?>
                        <?php echo smarty_function_component(array('_default_short'=>'admin:alert','text'=>$_smarty_tpl->tpl_vars['aMsgNotice']->value,'dismissible'=>true),$_smarty_tpl);?>

                    <?php }?>
                <?php }?>

                
	
	<?php echo smarty_function_component(array('_default_short'=>'admin:p-plugin','template'=>'install-help'),$_smarty_tpl);?>


	
	<?php echo smarty_function_component(array('_default_short'=>'admin:p-plugin','template'=>'plugin-market-list','plugins'=>$_smarty_tpl->tpl_vars['aAddons']->value,'pagination'=>$_smarty_tpl->tpl_vars['aPaging']->value),$_smarty_tpl);?>


            </div>
        </div>

        
        <?php echo smarty_function_component(array('_default_short'=>'admin:p-menu','menu'=>$_smarty_tpl->tpl_vars['oMenuMain']->value),$_smarty_tpl);?>

    </div> 

    
    <footer id="footer">
        

        <ul>
            <li>&copy; 2008-<?php echo date("Y");?>
 LiveStreet CMS</li>
        </ul>

        <ul>
            <li><a href="https://catalog.livestreetcms.com/" class="link-border" target="_blank"><span>Каталог расширений</a></span></li>
            <li><a href="http://livestreet.ru/" class="link-border" target="_blank"><span>Сообщество</a></span></li>
            <li><a href="http://job.livestreetcms.com/" class="link-border" target="_blank"><span>Работа</a></span></li>
        </ul>

        <ul class="footer-right">
            <li><a href="<?php echo Router::GetPath('/');?>
" class="link-border"><span>Перейти на сайт</a></span></li>
        </ul>

        
    </footer>
</div> 



<?php echo smarty_function_hook(array('run'=>'admin_body_end'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->tpl_vars['sLayoutAfter']->value;?>


</body>
</html>
<?php }} ?>