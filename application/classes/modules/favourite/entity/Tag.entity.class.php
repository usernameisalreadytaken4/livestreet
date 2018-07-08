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
 * Объект сущности тега для избранного
 *
 * @package application.modules.favourite
 * @since 1.0
 */
class ModuleFavourite_EntityTag extends Entity
{
    /**
     * Возвращает URL страницы тега
     * todo: на странице списка топиков получение пользователя может стать узким местом
     *
     * @return string
     */
    public function getUrl()
    {
        $_this = $this;
        $oUser = $this->Cache_Remember("favourite_tag_user_{$this->getUserId()}",
            function () use ($_this) {
                return $_this->User_GetUserById($_this->getUserId());
            }, false, array(), 'life', true);

        if ($oUser) {
            return $oUser->getUserWebPath() . 'favourites/topics/tag/' . urlencode($this->getText()) . '/';
        }
        return null;
    }
}