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
 * Подключает обработчик блоков шаблона
 *
 * @param array $aParams
 * @param Smarty $oSmarty
 * @return string
 */
function smarty_insert_block($aParams, &$oSmarty)
{
    if (!isset($aParams['block'])) {
        trigger_error('Not found param "block"', E_USER_WARNING);
        return;
    }
    /**
     * Устанавливаем шаблон
     */
    $sBlock = ucfirst(basename($aParams['block']));
    /**
     * Проверяем наличие шаблона. Определяем значения параметров работы в зависимости от того,
     * принадлежит ли блок одному из плагинов, или является пользовательским классом движка
     */
    if (isset($aParams['params']) and isset($aParams['params']['plugin'])) {
        $sBlockTemplate = Plugin::GetTemplatePath($aParams['params']['plugin']) . 'blocks/block.' . $aParams['block'] . '.tpl';
        $sBlock = 'Plugin' . func_camelize($aParams['params']['plugin']) . '_Block' . $sBlock;
    } else {
        $sBlockTemplate = 'blocks/block.' . $aParams['block'] . '.tpl';
        $sBlock = 'Block' . $sBlock;
    }

    $sBlock = Engine::getInstance()->Plugin_GetDelegate('block', $sBlock);
    /**
     * параметры
     */
    $aParamsBlock = array();
    if (isset($aParams['params'])) {
        $aParamsBlock = $aParams['params'];
    }
    /**
     * Подключаем необходимый обработчик
     */
    $oBlock = new $sBlock($aParamsBlock);
    $oBlock->SetTemplate($sBlockTemplate);
    /**
     * Запускаем обработчик
     */
    $mResult = $oBlock->Exec();
    if (is_string($mResult) or $mResult === false) {
        /**
         * Если метод возвращает строку - выводим ее вместо рендеринга шаблона
         */
        return $mResult;
    } else {
        /**
         * Получаем шаблон, возможно его переопределили в обработчике блока
         */
        $sBlockTemplate = Engine::getInstance()->Plugin_GetDelegate('template', $oBlock->GetTemplate());
        if (!Engine::getInstance()->Viewer_TemplateExists($sBlockTemplate)) {
            return "<b>Not found template for block: <i>{$sBlockTemplate} ({$sBlock})</i></b>";
        }
    }
    /**
     * Возвращаем результат в виде обработанного шаблона блока
     */
    return Engine::getInstance()->Viewer_Fetch($sBlockTemplate);
}
