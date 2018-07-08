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
 * Получает значение поля по его имени
 *
 * @param  array  $form  Массив с данными формы
 * @param  string $name  Атрибут name поля в формате item[subitem][...]
 * @return string        Значение поля
 *
 * @author  Denis Shakhov
 */
function smarty_function_field_get_value($aParams, &$oSmarty)
{
    $mResult = null;

    if (!empty($aParams['name']) && !empty($aParams['form'])) {
        $aForm = $aParams['form'];
        $sName = $aParams['name'];

        $sName = str_replace("[]", "", $sName);
        $mPos = strpos($sName, "[");

        if ($mPos !== false) {
            $aKeys = explode("][", substr_replace(substr($sName, 0, -1), "]", $mPos, 0));
            $mResult = func_array_multisearch($aForm, $aKeys);
        } elseif (isset($aForm[$sName])) {
            $mResult = $aForm[$sName];
        }
    }

    if (!empty($aParams['assign'])) {
        $oSmarty->assign($aParams['assign'], $mResult);
    } else {
        return $mResult;
    }
}