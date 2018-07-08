<?php

class PluginSitemap_ModuleMain extends Module
{

    public function Init()
    {
    }

    public function getDataForGeneral($iCurrPage) 
    {
        $aData   = array();
        $aData[] = $this->getDataForSitemapRow(
            Config::Get('path.root.web'),
            time(),
            Config::Get('plugin.sitemap.general.mainpage.priority'),
            Config::Get('plugin.sitemap.general.mainpage.changefreq')
        );
        return $aData;
    }

    public function getUsersCount() 
    {
        $aStatUsers = $this->User_GetStatUsers();
        return (int)$aStatUsers['count_all'];
    }

    public function getDataForUsers($iCurrPage) 
    {
        $iPerPage  = $this->getPerPage('users');
        $sCacheKey = $this->GetCacheIdPrefix() . "sitemap_users_{$iCurrPage}_{$iPerPage}";
        if (false === ($aData = $this->Cache_Get($sCacheKey))) 
        {
            $aResult = $this->User_GetUsersByFilter(
                array(
                    'activate' => 1,
                ), 
                array(
                    'user_id' => 'asc',
                ), 
                $iCurrPage, 
                $iPerPage
            );
            $aData = array();
            foreach ($aResult['collection'] as $oUser) 
            {
                $aData[] = $this->getDataForSitemapRow(
                    $oUser->getUserWebPath(),
                    is_null($oUser->getProfileDate()) ? $oUser->getDateRegister() : $oUser->getProfileDate(),
                    Config::Get('plugin.sitemap.users.profile.priority'),
                    Config::Get('plugin.sitemap.users.profile.changefreq')
                );
                $aData[] = $this->getDataForSitemapRow(
                    $oUser->getUserWebPath() . 'created/topics/',
                    null,
                    Config::Get('plugin.sitemap.users.topics.priority'),
                    Config::Get('plugin.sitemap.users.topics.changefreq')
                );
                $aData[] = $this->getDataForSitemapRow(
                    $oUser->getUserWebPath() . 'created/comments/',
                    $oUser->getDateCommentLast(),
                    Config::Get('plugin.sitemap.users.comments.priority'),
                    Config::Get('plugin.sitemap.users.comments.changefreq')
                );
                $this->Cache_Set($aData, $sCacheKey, array('user_new', 'user_update'), Config::Get('plugin.sitemap.users.cache_lifetime'));
            }
        }
        return $aData;
    }

    public function getTopicsCount() 
    {
        $aFilter = array(
            'blog_type'     => array(
                'open', 
                'personal',
            ),
            'topic_publish' => 1,
        );
        return (int)$this->Topic_GetCountTopicsByFilter($aFilter);
    }

    public function getDataForTopics($iCurrPage) 
    {
        $iPerPage  = $this->getPerPage('topics');
        $sCacheKey = $this->GetCacheIdPrefix() . "sitemap_topics_{$iCurrPage}_{$iPerPage}";
        if (false === ($aData = $this->Cache_Get($sCacheKey))) 
        {
            $aFilter = array(
                'blog_type'     => array(
                    'open', 
                    'personal',
                ),
                'topic_publish' => 1,
            );
            $aResult = $this->Topic_GetTopicsByFilter(
                $aFilter,
                $iCurrPage, 
                $iPerPage,
                array('blog' => array())
            );
            $aData = array();
            foreach ($aResult['collection'] as $oTopic) 
            {
                $aData[] = $this->getDataForSitemapRow(
                    $oTopic->getUrl(),
                    is_null($oTopic->getDateEdit()) ? $oTopic->getDateAdd() : $oTopic->getDateEdit(),
                    Config::Get('plugin.sitemap.topics.priority'),
                    Config::Get('plugin.sitemap.topics.changefreq')
                );
            }
            $this->Cache_Set($aData, $sCacheKey, array('topic_new', 'blog_update'), Config::Get('plugin.sitemap.topics.cache_lifetime'));
        }
        return $aData;
    }

    public function GetBlogsCount() 
    {
        $aResult = $this->Blog_GetBlogsByFilter(array('type' => 'open'), array(), 1, 1000);
        return (int)$aResult['count'];
    }


    public function getDataForBlogs($iCurrPage) 
    {
        $iPerPage  = $this->getPerPage('blogs');
        $sCacheKey = $this->GetCacheIdPrefix() . "sitemap_blogs_{$iCurrPage}_{$iPerPage}";

        if (false === ($aData = $this->Cache_Get($sCacheKey))) 
        {
            $aResult = $this->Blog_GetBlogsByFilter(array('type' => 'open'), array('blog_count_user' => 'desc'), $iCurrPage, $iPerPage);
            $aData = array();
            foreach ($aResult['collection'] as $oBlog) 
            {
                $aData[] = $this->getDataForSitemapRow(
                    $oBlog->getUrlFull(),
                    null,
                    Config::Get('plugin.sitemap.blogs.priority'),
                    Config::Get('plugin.sitemap.blogs.changefreq')
                );
            }
            $this->Cache_Set($aData, $sCacheKey, array('blog_new'), Config::Get('plugin.sitemap.blogs.cache_lifetime'));
        }
        
        return $aData;
    }

    public function getPerPage($sType = 'objects') 
    {
        $aPerPage  = Config::Get('plugin.sitemap.per_page');
        if (!array_key_exists($sType, $aPerPage))
        {
            $sType = 'objects';
        }
        return isset($aPerPage[$sType])
            ? $aPerPage[$sType]
            : 1000;
    }

    public function getDataForSitemapRow($sUrl, $sLastMod = null, $sChangeFreq = null, $sPriority = null) 
    {
        return array(
            'loc'        => $sUrl,
            'lastmod'    => $this->DateToLastMod($sLastMod),
            'priority'   => $sChangeFreq,
            'changefreq' => $sPriority,
        );
    }

    private function DateToLastMod($mDate = null) 
    {
        if (is_null($mDate)) 
        {
            return null;
        }
        $mDate = is_int($mDate) 
            ? $mDate 
            : strtotime($mDate);
        return date('Y-m-d\TH:i:s+00:00', $mDate);
    }

    public function getExternalCounters() 
    {
        return array();
    }

    public function getExternalLinks() 
    {
        return array();
    }

    public function getCacheIdPrefix()
    {
        return '';
    }

}
