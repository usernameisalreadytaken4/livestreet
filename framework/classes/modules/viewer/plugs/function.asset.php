<?php
/*
 * LiveStreet CMS
 * Copyright © 2013 OOO "ЛС-СОФТ"
 *
 * ------------------------------------------------------
 *
 * Official site: www.livestreetcms.com
 * Contact e-mail: office@livestreetcms.com
 *
 * GNU General Public License, version 2:
 * http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 * ------------------------------------------------------
 *
 * @link http://www.livestreetcms.com
 * @copyright 2013 OOO "ЛС-СОФТ"
 * @author Maxim Mzhelskiy <rus.engine@gmail.com>
 *
 */

/**
 * Плагин для смарти
 * Подключает css/js на странице с учетом дублирования (но только в рамках плагина asset)
 *
 * @param   array $aParams
 * @param   Smarty $oSmarty
 * @return  string
 */
function smarty_function_asset($aParams, &$oSmarty)
{
    if (empty($aParams['file'])) {
        trigger_error("Asset: missing 'file' parametr", E_USER_WARNING);
        return;
    }
    if (empty($aParams['type'])) {
        trigger_error("Asset: missing 'type' parametr", E_USER_WARNING);
        return;
    }

    $sTypeAsset = $aParams['type'];
    $oEngine = Engine::getInstance();
    /**
     * Проверяем тип
     */
    if (!$oEngine->Asset_CheckAssetType($sTypeAsset)) {
        trigger_error("Asset: wrong 'type' parametr", E_USER_WARNING);
        return;
    }
    /**
     * Получаем список текущих подключенных файлов
     */
    $sKeyIncluded = 'smarty_asset_included';
    $aIncluded = $oEngine->Cache_GetLife($sKeyIncluded);
    /**
     * Проверяем на компонент
     */
    if (preg_match('#^Component@(.+)#i', $aParams['file'], $aMatch)) {
        $aPath = explode('.', $aMatch[1], 2);
        $aParams['name'] = 'component.' . $aPath[0] . '.' . $aPath[1];
        if ($aParams['file'] = Engine::getInstance()->Component_GetAssetPath($aPath[0], $sTypeAsset, $aPath[1])) {
            $aParams['file'] = Engine::getInstance()->Fs_GetPathWebFromServer($aParams['file']);
        } else {
            return;
        }
    }
    /**
     * Подготавливаем параметры
     */
    $aParams = $oEngine->Asset_PrepareParams($aParams);
    $sFileKey = $aParams['name'] ? $aParams['name'] : $aParams['file'];
    /**
     * Проверяем на дубли
     */
    if (isset($aIncluded[$sTypeAsset][$sFileKey])) {
        return;
    }
    $aIncluded[$sTypeAsset][$sFileKey] = $aParams;
    $oEngine->Cache_SetLife($aIncluded, $sKeyIncluded);
    /**
     * Формируем HTML
     */
    $oAsset = $oEngine->Asset_CreateObjectType($sTypeAsset);
    $sHtml = $oAsset->getHeadHtml($aParams['file'], $aParams);

    return $sHtml;
}