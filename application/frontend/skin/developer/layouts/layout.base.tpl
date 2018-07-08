{**
 * Основной лэйаут, который наследуют все остальные лэйауты
 *
 * @param boolean $layoutShowSidebar        Показывать сайдбар или нет, сайдбар не будет выводится если он не содержит блоков
 * @param string  $layoutNavContent         Название навигации
 * @param string  $layoutNavContentPath     Кастомный путь до навигации контента
 * @param string  $layoutShowSystemMessages Показывать системные уведомления или нет
 *}

{extends 'component@layout.layout'}

{block 'layout_options' append}
    {$layoutShowSidebar = $layoutShowSidebar|default:true}
    {$layoutShowSystemMessages = $layoutShowSystemMessages|default:true}
{/block}

{block 'layout_head_styles' append}
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="search" type="application/opensearchdescription+xml" href="{router page='search'}opensearch/" title="{Config::Get('view.name')}" />
{/block}

{block 'layout_head' append}
    {* Получаем блоки для вывода в сайдбаре *}
    {if $layoutShowSidebar}
        {show_blocks group='right' assign=layoutSidebarBlocks}

        {$layoutSidebarBlocks = trim( $layoutSidebarBlocks )}
        {$layoutShowSidebar = !!$layoutSidebarBlocks}
    {/if}

    {**
     * Тип сетки сайта
     *}
    {if {Config::Get('view.grid.type')} == 'fluid'}
        <style>
            .layout-userbar,
            .layout-nav .ls-nav--main,
            .layout-header .ls-jumbotron-inner,
            .layout-container {
                min-width: {Config::Get('view.grid.fluid_min_width')};
                max-width: {Config::Get('view.grid.fluid_max_width')};
            }
        </style>
    {else}
        <style>
            .layout-userbar,
            .layout-nav .ls-nav--main,
            .layout-header .ls-jumbotron-inner,
            .layout-container { width: {Config::Get('view.grid.fixed_width')}; }
        </style>
    {/if}
{/block}

{block 'layout_body'}
    {hook run='layout_body_begin'}

    {**
     * Юзербар
     *}
    {component 'userbar'}


    {**
     * Шапка
     *}
    {if Config::Get( 'view.layout_show_banner' )}
        {component 'jumbotron'
            title    = Config::Get('view.name')
            subtitle = Config::Get('view.description')
            titleUrl = {router page='/'}
            classes  = 'layout-header'}
			
    {/if}


    {**
     * Основная навигация
     *}
    <nav class="ls-grid-row layout-nav">
        {block 'nav_main'}
            {component 'nav' hook='main' activeItem=$sMenuHeadItemSelect mods='main' items=[
                [ 'text' => $aLang.topic.topics,   'url' => {router page='/'},      'name' => 'blog' ],
                [ 'text' => $aLang.blog.blogs,     'url' => {router page='blogs'},  'name' => 'blogs' ],
                [ 'text' => $aLang.user.users,     'url' => {router page='people'}, 'name' => 'people' ],
                [ 'text' => $aLang.activity.title, 'url' => "{router page='stream'}all/", 'name' => 'stream' ]
            ]}
        {/block}
    </nav>


    {**
     * Основной контэйнер
     *}
    <div id="container" class="ls-grid-row layout-container {hook run='layout_container_class' action=$sAction} {if $layoutShowSidebar}layout-has-sidebar{else}layout-no-sidebar{/if}">
        {* Вспомогательный контейнер-обертка *}
        <div class="ls-grid-row layout-wrapper {hook run='layout_wrapper_class' action=$sAction}">
            {**
             * Контент
             *}
            <div class="ls-grid-col ls-grid-col-8 layout-content"
                 role="main"
                 {if $sMenuItemSelect == 'profile'}itemscope itemtype="http://data-vocabulary.org/Person"{/if}>

                {hook run='layout_content_header_begin' action=$sAction}

                {* Основной заголовок страницы *}
                {block 'layout_page_title' hide}
                    <h2 class="page-header">
                        {$smarty.block.child}
                    </h2>
                {/block}

                {block 'layout_content_header'}
                    {* Навигация *}
                    {if $layoutNav}
                        {$_layoutNavContent = ""}

                        {if is_array($layoutNav)}
                            {foreach $layoutNav as $layoutNavItem}
                                {if is_array($layoutNavItem)}
                                    {component 'nav' mods='pills' params=$layoutNavItem assign=_layoutNavItemContent}
                                    {$_layoutNavContent = "$_layoutNavContent $_layoutNavItemContent"}
                                {else}
                                    {$_layoutNavContent = "$_layoutNavContent $layoutNavItem"}
                                {/if}
                            {/foreach}
                        {else}
                            {$_layoutNavContent = $layoutNav}
                        {/if}

                        {* Проверяем наличие вывода на случай если меню с одним пунктом автоматом скрывается *}
                        {if $_layoutNavContent|strip:''}
                            <div class="ls-nav-group">
                                {$_layoutNavContent}
                            </div>
                        {/if}
                    {/if}

                    {* Системные сообщения *}
                    {if $layoutShowSystemMessages}
                        {if $aMsgError}
                            {component 'alert' text=$aMsgError mods='error' close=true}
                        {/if}

                        {if $aMsgNotice}
                            {component 'alert' text=$aMsgNotice close=true}
                        {/if}
                    {/if}
                {/block}

                {hook run='layout_content_begin' action=$sAction}

                {block 'layout_content'}{/block}

                {hook run='layout_content_end' action=$sAction}
            </div>

            {**
             * Сайдбар
             * Показываем сайдбар
             *}
            {if $layoutShowSidebar}
                <aside class="ls-grid-col ls-grid-col-4 layout-sidebar" role="complementary">
                    {$layoutSidebarBlocks}
                </aside>
            {/if}
        </div> {* /wrapper *}


        {* Подвал *}
        <footer class="ls-grid-row layout-footer">
            {block 'layout_footer'}
                {hook run='layout_footer_begin'}
                {hook run='layout_footer_end'}
				
				<!-- Yandex.Metrika informer --> <a href="https://metrika.yandex.ru/stat/?id=49413370&amp;from=informer" target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/49413370/3_0_FFFFFFFF_EFEFEFFF_0_pageviews" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="49413370" data-lang="ru" /></a> <!-- /Yandex.Metrika informer --> <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter49413370 = new Ya.Metrika2({ id:49413370, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/tag.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks2"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/49413370" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
<!-- uSocial -->
<script async src="https://usocial.pro/usocial/usocial.js?v=6.1.4" data-script="usocial" charset="utf-8"></script>
<div class="uSocial-Share" data-pid="7d528677ae1458abfbfcf303f5076293" data-type="share" data-options="round-rect,style4,default,right,slide-down,size32,eachCounter0,counter0" data-social="vk,fb,ok,twi,telegram,bookmarks" data-mobile="vi,wa,sms"></div>
<!-- /uSocial -->
            {/block}
        </footer>
    </div> {* /container *}


    {* Подключение модальных окон *}
    {if $oUserCurrent}
        {component 'tags-personal' template='modal'}
    {else}
        {component 'auth' template='modal'}
    {/if}


    {**
     * Тулбар
     * Добавление кнопок в тулбар
     *}
    {add_block group='toolbar' name='component@admin.toolbar.admin' priority=100}
    {add_block group='toolbar' name='component@toolbar-scrollup.toolbar.scrollup' priority=-100}

    {* Подключение тулбара *}
    {component 'toolbar' classes='js-toolbar-default' items={show_blocks group='toolbar'}}

    {hook run='layout_body_end'}
{/block}