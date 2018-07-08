<?php
/**
 * 
 * @author Oleg Demidov
 *
 */

/**
 * Запрещаем напрямую через браузер обращение к этому файлу.
 */
if (!class_exists('Plugin')) {
    die('Hacking attempt!');
}

class PluginFixCategory extends Plugin
{

    protected $aInherits = array(
        'module' => array(
            'ModuleCategory' => 'PluginFixCategory_ModuleCategory',
        ),
    );

    public function Init()
    {
       
     }

    public function Activate()
    {
        return true;
    }

    public function Deactivate()
    {
        return true;
    }
}