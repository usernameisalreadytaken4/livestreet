<?php /* Smarty version Smarty-3.1.13, created on 2018-06-26 19:21:56
         compiled from "C:\xampp\htdocs\application\plugins\admin\frontend\skin\default\actions\ActionAdmin\plugins\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10798738805b326824c4a038-49250547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9d282d98d02cf8ec7d5aed4f8445fc5347c15df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\plugins\\admin\\frontend\\skin\\default\\actions\\ActionAdmin\\plugins\\list.tpl',
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
  'nocache_hash' => '10798738805b326824c4a038-49250547',
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
  'unifunc' => 'content_5b326824ce6457_35230148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b326824ce6457_35230148')) {function content_5b326824ce6457_35230148($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_json')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.json.php';
if (!is_callable('smarty_function_lang_load')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang_load.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
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
                
	<?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin/plugins/list'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['sType']->value==null){?><?php echo "active";?><?php }?><?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'admin:button','url'=>$_tmp1,'text'=>$_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['plugins']['menu']['filter']['all'],'badge'=>array('value'=>$_smarty_tpl->tpl_vars['aPluginsInfo']->value['count_all']),'classes'=>$_tmp2),$_smarty_tpl);?>


	<?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin/plugins/list'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['sType']->value=='activated'){?><?php echo "active";?><?php }?><?php $_tmp4=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'admin:button','url'=>$_tmp3."activated",'text'=>$_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['plugins']['menu']['filter']['activated'],'badge'=>array('value'=>$_smarty_tpl->tpl_vars['aPluginsInfo']->value['count_active']),'classes'=>$_tmp4),$_smarty_tpl);?>


	<?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin/plugins/list'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['sType']->value=='deactivated'){?><?php echo "active";?><?php }?><?php $_tmp6=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'admin:button','url'=>$_tmp5."deactivated",'text'=>$_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['plugins']['menu']['filter']['deactivated'],'badge'=>array('value'=>$_smarty_tpl->tpl_vars['aPluginsInfo']->value['count_inactive']),'classes'=>$_tmp6),$_smarty_tpl);?>


	<?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin/plugins/list'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['sType']->value=='updates'){?><?php echo "active";?><?php }?><?php $_tmp8=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'admin:button','url'=>$_tmp7."updates",'text'=>$_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['plugins']['menu']['filter']['updates'],'badge'=>array('value'=>$_smarty_tpl->tpl_vars['iPluginUpdates']->value),'classes'=>$_tmp8),$_smarty_tpl);?>


            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            
            <?php echo smarty_function_component(array('_default_short'=>'admin:p-actionbar','backUrl'=>$_smarty_tpl->tpl_vars['layoutBackUrl']->value,'backText'=>$_smarty_tpl->tpl_vars['layoutBackText']->value,'content'=>Smarty::$_smarty_vars['capture']['actionbar']),$_smarty_tpl);?>


            

            <div class="content-padding">
                
                    <h2 class="page-header">
	<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['plugins']['list']['titles'][$_smarty_tpl->tpl_vars['sType']->value];?>
 <span>(<?php echo count($_smarty_tpl->tpl_vars['aPluginsInfo']->value['collection']);?>
)</span>
</h2>
                

                
                <?php if (!$_smarty_tpl->tpl_vars['bNoSystemMessages']->value){?>
                    <?php if ($_smarty_tpl->tpl_vars['aMsgError']->value){?>
                        <?php echo smarty_function_component(array('_default_short'=>'admin:alert','text'=>$_smarty_tpl->tpl_vars['aMsgError']->value,'mods'=>'error','dismissible'=>true),$_smarty_tpl);?>

                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['aMsgNotice']->value){?>
                        <?php echo smarty_function_component(array('_default_short'=>'admin:alert','text'=>$_smarty_tpl->tpl_vars['aMsgNotice']->value,'dismissible'=>true),$_smarty_tpl);?>

                    <?php }?>
                <?php }?>

                
	<?php echo smarty_function_component(array('_default_short'=>'admin:p-plugin','template'=>'list','plugins'=>$_smarty_tpl->tpl_vars['aPluginsInfo']->value['collection'],'updates'=>$_smarty_tpl->tpl_vars['aPluginUpdates']->value,'type'=>$_smarty_tpl->tpl_vars['sType']->value),$_smarty_tpl);?>


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