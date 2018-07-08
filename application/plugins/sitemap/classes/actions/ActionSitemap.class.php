<?php

class PluginSitemap_ActionSitemap extends ActionPlugin
{

    public function Init()
    {
        $this->SetDefaultEvent('index');
        $this->Viewer_Assign('sTemplateWebPathPluginSitemap', Plugin::GetTemplateWebPath(__CLASS__));
        Router::SetIsShowStats(false);
    }

    protected function RegisterEvent()
    {
        $this->AddEvent('index', 'EventIndex');
        $this->AddEvent('sitemap', 'EventSitemap');
    }

    protected function EventIndex() 
    {
        $aCounters = array(
            'general' => 1,
            'users'   => (int)ceil($this->PluginSitemap_Main_getUsersCount()/$this->PluginSitemap_Main_getPerPage('users')),
            'topics'  => (int)ceil($this->PluginSitemap_Main_getTopicsCount()/$this->PluginSitemap_Main_getPerPage('topics')),
            'blogs'   => (int)ceil($this->PluginSitemap_Main_getBlogsCount()/$this->PluginSitemap_Main_getPerPage('blogs')),
        );
        $aExternalCounters = $this->PluginSitemap_Main_getExternalCounters();
        if (is_array($aExternalCounters)) 
        {
            foreach ($aExternalCounters as $sKey => $sValue) 
            {
                if (is_string($sKey) && is_numeric($sValue)) 
                {
                    $aCounters[$sKey] = (int)$sValue;
                }
            }
        }
        $aData    = array();
        $sRootWeb = rtrim(str_replace('index/', '', Router::GetPath('index')), '/');
        foreach ($aCounters as $sType => $iCount) 
        {
            if ($iCount > 0) 
            {
                for ($i = 1; $i <= $iCount; ++$i) 
                {
                    $aData[] = array(
                        'loc' => $sRootWeb . '/sitemap_' . $sType . '_' . $i . '.xml'
                    );
                }
            }
        }
        $aLinks = $this->PluginSitemap_Main_GetExternalLinks();
        foreach ($aLinks as $sLink) 
        {
            $aData[] = array(
                'loc' => $sLink
            );
        }
        $this->DisplaySitemap($aData, 'sitemap_index.tpl');
    }

    public function EventSitemap() 
    {
        $iCurrPage = (int)$this->GetParam(1);
        $aType     = explode('_', $this->GetParam(0));
        $sName     = '';
        foreach ($aType as $val)
        {
            $sName .= ucfirst($val);
        }
        $aData = call_user_func_array(
            array($this, 'PluginSitemap_Main_getDataFor' . $sName),
            array($iCurrPage)
        );
        $this->DisplaySitemap($aData);
    }

    protected function DisplaySitemap(array $aData, $sTemplate = 'sitemap.tpl') 
    {
        header("Content-type: application/xml");
        $this->Viewer_Assign('aData', $aData);
        $this->SetTemplate(Plugin::GetTemplatePath(__CLASS__) . $sTemplate);
    }

}
