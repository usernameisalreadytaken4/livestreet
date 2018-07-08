<?php

if (!class_exists('Plugin'))
{
    die('That in the garbage?!');
}

class PluginSitemap extends Plugin
{

    public function Activate()
    {
        return true;
    }

    public function Deactivate()
    {
        return true;
    }

    public function Init()
    {
    }

}
