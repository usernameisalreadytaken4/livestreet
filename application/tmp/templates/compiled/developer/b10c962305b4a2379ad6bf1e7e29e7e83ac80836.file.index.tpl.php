<?php /* Smarty version Smarty-3.1.13, created on 2018-06-28 15:08:54
         compiled from "/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/skin/developer/actions/ActionBlogs/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3808702095b34cfd6cfc8b1-03909125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b10c962305b4a2379ad6bf1e7e29e7e83ac80836' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/skin/developer/actions/ActionBlogs/index.tpl',
      1 => 1529954505,
      2 => 'file',
    ),
    '51bc6488fe98e1c7e8b91bbc24a3183a67eac698' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/application/frontend/skin/developer/layouts/layout.base.tpl',
      1 => 1530133784,
      2 => 'file',
    ),
    '967e1cd31997b148f1f98721077270129a9c95ec' => 
    array (
      0 => '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/frontend/components/layout/layout.tpl',
      1 => 1529954587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3808702095b34cfd6cfc8b1-03909125',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'rtl' => 0,
    'sHtmlDescription' => 0,
    'sHtmlKeywords' => 0,
    'sHtmlRobots' => 0,
    'sHtmlTitle' => 0,
    'aHtmlRssAlternate' => 0,
    'sHtmlCanonical' => 0,
    'aHtmlHeadFiles' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'sAction' => 0,
    'aRouter' => 0,
    'sPage' => 0,
    'sPath' => 0,
    'oUserCurrent' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'LS' => 0,
    'sLayoutAfter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b34cfd71019c5_10745908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cfd71019c5_10745908')) {function content_5b34cfd71019c5_10745908($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_router')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_cfg')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_show_blocks')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.show_blocks.php';
if (!is_callable('smarty_function_hook')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_cmods')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_component')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.component.php';
if (!is_callable('smarty_function_add_block')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.add_block.php';
if (!is_callable('smarty_function_json')) include '/home/mmotalks/web/mmotalks.ru/public_html/cms/framework/classes/modules/viewer/plugs/function.json.php';
?>
<!doctype html>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('layout', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('mods','classes','attributes')),$_smarty_tpl);?>



    <?php $_smarty_tpl->tpl_vars['rtl'] = new Smarty_variable(Config::Get('view.rtl') ? 'dir="rtl"' : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['lang'] = new Smarty_variable(Config::Get('lang.current'), null, 0);?>

    <?php $_smarty_tpl->tpl_vars['layoutShowSidebar'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['layoutShowSidebar']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['layoutShowSystemMessages'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['layoutShowSystemMessages']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

    <?php $_smarty_tpl->tpl_vars['sMenuHeadItemSelect'] = new Smarty_variable('blogs', null, 0);?>


<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['rtl']->value;?>
> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['rtl']->value;?>
> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['rtl']->value;?>
> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['rtl']->value;?>
> <!--<![endif]-->

<head prefix="og: https://ogp.me/ns# article: https://ogp.me/ns/article#">
    
        <meta charset="utf-8">

        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['sHtmlDescription']->value;?>
">
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['sHtmlKeywords']->value;?>
">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="<?php echo $_smarty_tpl->tpl_vars['sHtmlRobots']->value;?>
">

        <title><?php echo $_smarty_tpl->tpl_vars['sHtmlTitle']->value;?>
</title>

        
        <?php if ($_smarty_tpl->tpl_vars['aHtmlRssAlternate']->value){?>
            <link rel="alternate" type="application/rss+xml" href="<?php echo $_smarty_tpl->tpl_vars['aHtmlRssAlternate']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['aHtmlRssAlternate']->value['title'];?>
">
        <?php }?>

        
        <?php if ($_smarty_tpl->tpl_vars['sHtmlCanonical']->value){?>
            <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['sHtmlCanonical']->value;?>
" />
        <?php }?>

        
        
            
            <?php echo $_smarty_tpl->tpl_vars['aHtmlHeadFiles']->value['css'];?>

        
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="search" type="application/opensearchdescription+xml" href="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
opensearch/" title="<?php echo Config::Get('view.name');?>
" />


        <link href="<?php echo smarty_function_cfg(array('_default_short'=>'path.skin.assets.web'),$_smarty_tpl);?>
/images/favicons/favicon.ico?v1" rel="shortcut icon" />

        <script>
            var PATH_ROOT                   = '<?php echo smarty_function_router(array('page'=>'/'),$_smarty_tpl);?>
',PATH_SKIN                   = '<?php echo smarty_function_cfg(array('_default_short'=>'path.skin.web'),$_smarty_tpl);?>
',PATH_FRAMEWORK_FRONTEND     = '<?php echo smarty_function_cfg(array('_default_short'=>'path.framework.frontend.web'),$_smarty_tpl);?>
',PATH_FRAMEWORK_LIBS_VENDOR  = '<?php echo smarty_function_cfg(array('_default_short'=>'path.framework.libs_vendor.web'),$_smarty_tpl);?>
',LIVESTREET_SECURITY_KEY = '<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
',LANGUAGE                = '<?php echo Config::Get('lang.current');?>
',WYSIWYG                 = <?php if (Config::Get('view.wysiwyg')){?>true<?php }else{ ?>false<?php }?>,ACTION = '<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
';var aRouter = [];<?php  $_smarty_tpl->tpl_vars['sPath'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sPath']->_loop = false;
 $_smarty_tpl->tpl_vars['sPage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aRouter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sPath']->key => $_smarty_tpl->tpl_vars['sPath']->value){
$_smarty_tpl->tpl_vars['sPath']->_loop = true;
 $_smarty_tpl->tpl_vars['sPage']->value = $_smarty_tpl->tpl_vars['sPath']->key;
?>aRouter['<?php echo $_smarty_tpl->tpl_vars['sPage']->value;?>
'] = '<?php echo $_smarty_tpl->tpl_vars['sPath']->value;?>
';<?php } ?>
        </script>

        
    
    
    <?php if ($_smarty_tpl->tpl_vars['layoutShowSidebar']->value){?>
        <?php echo smarty_function_show_blocks(array('group'=>'right','assign'=>'layoutSidebarBlocks'),$_smarty_tpl);?>


        <?php $_smarty_tpl->tpl_vars['layoutSidebarBlocks'] = new Smarty_variable(trim($_smarty_tpl->tpl_vars['layoutSidebarBlocks']->value), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['layoutShowSidebar'] = new Smarty_variable(!!$_smarty_tpl->tpl_vars['layoutSidebarBlocks']->value, null, 0);?>
    <?php }?>

    
    <?php ob_start();?><?php echo Config::Get('view.grid.type');?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=='fluid'){?>
        <style>
            .layout-userbar,
            .layout-nav .ls-nav--main,
            .layout-header .ls-jumbotron-inner,
            .layout-container {
                min-width: <?php echo Config::Get('view.grid.fluid_min_width');?>
;
                max-width: <?php echo Config::Get('view.grid.fluid_max_width');?>
;
            }
        </style>
    <?php }else{ ?>
        <style>
            .layout-userbar,
            .layout-nav .ls-nav--main,
            .layout-header .ls-jumbotron-inner,
            .layout-container { width: <?php echo Config::Get('view.grid.fixed_width');?>
; }
        </style>
    <?php }?>


    <?php echo smarty_function_hook(array('run'=>'html_head_end'),$_smarty_tpl);?>

</head>



<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." user-role-user", null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
        <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." user-role-admin", null, 0);?>
    <?php }?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." user-role-guest", null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['oUserCurrent']->value||!$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." user-role-not-admin", null, 0);?>
<?php }?>

<?php ob_start();?><?php echo Config::Get('view.skin');?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo Config::Get('view.grid.type');?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." template-".$_tmp1." ".$_tmp2, null, 0);?>

<body class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    
    <?php echo smarty_function_hook(array('run'=>'layout_body_begin'),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'userbar'),$_smarty_tpl);?>



    
    <?php if (Config::Get('view.layout_show_banner')){?>
        <?php ob_start();?><?php echo smarty_function_router(array('page'=>'/'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'jumbotron','title'=>Config::Get('view.name'),'subtitle'=>Config::Get('view.description'),'titleUrl'=>$_tmp1,'classes'=>'layout-header'),$_smarty_tpl);?>

    <?php }?>


    
    <nav class="ls-grid-row layout-nav">
        
            <?php ob_start();?><?php echo smarty_function_router(array('page'=>'/'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'blogs'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'stream'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'nav','hook'=>'main','activeItem'=>$_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value,'mods'=>'main','items'=>array(array('text'=>$_smarty_tpl->tpl_vars['aLang']->value['topic']['topics'],'url'=>$_tmp2,'name'=>'blog'),array('text'=>$_smarty_tpl->tpl_vars['aLang']->value['blog']['blogs'],'url'=>$_tmp3,'name'=>'blogs'),array('text'=>$_smarty_tpl->tpl_vars['aLang']->value['user']['users'],'url'=>$_tmp4,'name'=>'people'),array('text'=>$_smarty_tpl->tpl_vars['aLang']->value['activity']['title'],'url'=>$_tmp5."all/",'name'=>'stream'))),$_smarty_tpl);?>

        
    </nav>


    
    <div id="container" class="ls-grid-row layout-container <?php echo smarty_function_hook(array('run'=>'layout_container_class','action'=>$_smarty_tpl->tpl_vars['sAction']->value),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['layoutShowSidebar']->value){?>layout-has-sidebar<?php }else{ ?>layout-no-sidebar<?php }?>">
        
        <div class="ls-grid-row layout-wrapper <?php echo smarty_function_hook(array('run'=>'layout_wrapper_class','action'=>$_smarty_tpl->tpl_vars['sAction']->value),$_smarty_tpl);?>
">
            
            <div class="ls-grid-col ls-grid-col-8 layout-content"
                 role="main"
                 <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='profile'){?>itemscope itemtype="http://data-vocabulary.org/Person"<?php }?>>

                <?php echo smarty_function_hook(array('run'=>'layout_content_header_begin','action'=>$_smarty_tpl->tpl_vars['sAction']->value),$_smarty_tpl);?>


                
                
                    <h2 class="page-header">
                        
    <?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog']['blogs'];?>


                    </h2>


                
                    
                    <?php if ($_smarty_tpl->tpl_vars['layoutNav']->value){?>
                        <?php $_smarty_tpl->tpl_vars['_layoutNavContent'] = new Smarty_variable('', null, 0);?>

                        <?php if (is_array($_smarty_tpl->tpl_vars['layoutNav']->value)){?>
                            <?php  $_smarty_tpl->tpl_vars['layoutNavItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['layoutNavItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['layoutNav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['layoutNavItem']->key => $_smarty_tpl->tpl_vars['layoutNavItem']->value){
$_smarty_tpl->tpl_vars['layoutNavItem']->_loop = true;
?>
                                <?php if (is_array($_smarty_tpl->tpl_vars['layoutNavItem']->value)){?>
                                    <?php echo smarty_function_component(array('_default_short'=>'nav','mods'=>'pills','params'=>$_smarty_tpl->tpl_vars['layoutNavItem']->value,'assign'=>'_layoutNavItemContent'),$_smarty_tpl);?>

                                    <?php $_smarty_tpl->tpl_vars['_layoutNavContent'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['_layoutNavContent']->value)." ".((string)$_smarty_tpl->tpl_vars['_layoutNavItemContent']->value), null, 0);?>
                                <?php }else{ ?>
                                    <?php $_smarty_tpl->tpl_vars['_layoutNavContent'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['_layoutNavContent']->value)." ".((string)$_smarty_tpl->tpl_vars['layoutNavItem']->value), null, 0);?>
                                <?php }?>
                            <?php } ?>
                        <?php }else{ ?>
                            <?php $_smarty_tpl->tpl_vars['_layoutNavContent'] = new Smarty_variable($_smarty_tpl->tpl_vars['layoutNav']->value, null, 0);?>
                        <?php }?>

                        
                        <?php if (preg_replace('!\s+!u', '',$_smarty_tpl->tpl_vars['_layoutNavContent']->value)){?>
                            <div class="ls-nav-group">
                                <?php echo $_smarty_tpl->tpl_vars['_layoutNavContent']->value;?>

                            </div>
                        <?php }?>
                    <?php }?>

                    
                    <?php if ($_smarty_tpl->tpl_vars['layoutShowSystemMessages']->value){?>
                        <?php if ($_smarty_tpl->tpl_vars['aMsgError']->value){?>
                            <?php echo smarty_function_component(array('_default_short'=>'alert','text'=>$_smarty_tpl->tpl_vars['aMsgError']->value,'mods'=>'error','close'=>true),$_smarty_tpl);?>

                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['aMsgNotice']->value){?>
                            <?php echo smarty_function_component(array('_default_short'=>'alert','text'=>$_smarty_tpl->tpl_vars['aMsgNotice']->value,'close'=>true),$_smarty_tpl);?>

                        <?php }?>
                    <?php }?>
                

                <?php echo smarty_function_hook(array('run'=>'layout_content_begin','action'=>$_smarty_tpl->tpl_vars['sAction']->value),$_smarty_tpl);?>


                
    <?php echo smarty_function_component(array('_default_short'=>'blog','template'=>'search-form'),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'sort','template'=>'ajax','classes'=>'js-search-sort js-search-sort-menu','text'=>$_smarty_tpl->tpl_vars['aLang']->value['blog']['sort']['by_users'],'items'=>array(array('name'=>'blog_count_user','text'=>$_smarty_tpl->tpl_vars['aLang']->value['blog']['sort']['by_users']),array('name'=>'blog_count_topic','text'=>$_smarty_tpl->tpl_vars['aLang']->value['blog']['sort']['by_topics']),array('name'=>'blog_title','text'=>$_smarty_tpl->tpl_vars['aLang']->value['sort']['by_title']))),$_smarty_tpl);?>


    
    <div class="js-search-ajax-blog">
        <h3 class="h3 js-blog-list-search-title" style="display: none"></h3>

        <?php echo smarty_function_component(array('_default_short'=>'blog','template'=>'list','blogs'=>$_smarty_tpl->tpl_vars['blogs']->value,'useMore'=>true),$_smarty_tpl);?>

    </div>


                <?php echo smarty_function_hook(array('run'=>'layout_content_end','action'=>$_smarty_tpl->tpl_vars['sAction']->value),$_smarty_tpl);?>

            </div>

            
            <?php if ($_smarty_tpl->tpl_vars['layoutShowSidebar']->value){?>
                <aside class="ls-grid-col ls-grid-col-4 layout-sidebar" role="complementary">
                    <?php echo $_smarty_tpl->tpl_vars['layoutSidebarBlocks']->value;?>

                </aside>
            <?php }?>
        </div> 


        
        <footer class="ls-grid-row layout-footer">
            
                <?php echo smarty_function_hook(array('run'=>'layout_footer_begin'),$_smarty_tpl);?>

                <?php echo smarty_function_hook(array('run'=>'copyright'),$_smarty_tpl);?>

                <?php echo smarty_function_hook(array('run'=>'layout_footer_end'),$_smarty_tpl);?>

            
        </footer>
    </div> 


    
    <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
        <?php echo smarty_function_component(array('_default_short'=>'tags-personal','template'=>'modal'),$_smarty_tpl);?>

    <?php }else{ ?>
        <?php echo smarty_function_component(array('_default_short'=>'auth','template'=>'modal'),$_smarty_tpl);?>

    <?php }?>


    
    <?php echo smarty_function_add_block(array('group'=>'toolbar','name'=>'component@admin.toolbar.admin','priority'=>100),$_smarty_tpl);?>

    <?php echo smarty_function_add_block(array('group'=>'toolbar','name'=>'component@toolbar-scrollup.toolbar.scrollup','priority'=>-100),$_smarty_tpl);?>


    
    <?php ob_start();?><?php echo smarty_function_show_blocks(array('group'=>'toolbar'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'toolbar','classes'=>'js-toolbar-default','items'=>$_tmp6),$_smarty_tpl);?>


    <?php echo smarty_function_hook(array('run'=>'layout_body_end'),$_smarty_tpl);?>



    <?php echo smarty_function_hook(array('run'=>'body_end'),$_smarty_tpl);?>



    
    
        
        <?php echo $_smarty_tpl->tpl_vars['aHtmlHeadFiles']->value['js'];?>



        <script>
            ls.lang.load(<?php echo smarty_function_json(array('var'=>$_smarty_tpl->tpl_vars['LS']->value->Lang_GetLangJs()),$_smarty_tpl);?>
);
            ls.registry.set(<?php echo smarty_function_json(array('var'=>$_smarty_tpl->tpl_vars['LS']->value->Viewer_GetVarsJs()),$_smarty_tpl);?>
);
        </script>
    


    <?php echo $_smarty_tpl->tpl_vars['sLayoutAfter']->value;?>

</body>
</html><?php }} ?>