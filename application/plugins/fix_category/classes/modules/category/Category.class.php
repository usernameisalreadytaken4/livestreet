<?php

class PluginFixCategory_ModuleCategory extends PluginFixCategory_Inherit_ModuleCategory
{
    public function SaveCategories($oTarget, $sTargetType, $mCallbackCountTarget = null)
    {
        $aCategoriesId = $oTarget->_getDataOne('_categories_for_save');
        if (!is_array($aCategoriesId)) {
            return;
        }       
        
        /**
         * Удаляем текущие связи
         */
        $aCategoryIdChanged = $this->RemoveRelation($oTarget->_getPrimaryKeyValue(), $sTargetType);
        /**
         * Создаем
         */
        $this->CreateRelation($aCategoriesId, $oTarget->_getPrimaryKeyValue(), $sTargetType, $oTarget->category->getParam('object_type') );
        /**
         * Полный список категорий, которые затронули изменения
         */
        $aCategoryIdChanged = array_merge($aCategoryIdChanged, $aCategoriesId);
        /**
         * Подсчитываем количество новое элементов для каждой категории
         */
        $this->UpdateCountTarget($aCategoryIdChanged, $sTargetType, $mCallbackCountTarget);

        $oTarget->_setData(array('_categories_for_save' => null));
    }
	
    public function CreateRelation($aCategoryId, $iTargetId, $iType, $sObjectType=null)
    {
        
        if (!$aCategoryId or (is_array($aCategoryId) and !count($aCategoryId))) {
            return false;
        }
        if (!is_array($aCategoryId)) {
            $aCategoryId = array($aCategoryId);
        }
        if (is_numeric($iType)) {
            $oType = $this->GetTypeById($iType);
        } else {
            $oType = $this->GetTypeByTargetType($iType);
        }
        if (!$oType) {
            return false;
        }
        foreach ($aCategoryId as $iCategoryId) {
            if (!$this->GetTargetByCategoryIdAndTargetIdAndTypeId($iCategoryId, $iTargetId, $oType->getId())) {
                $oTarget = Engine::GetEntity('ModuleCategory_EntityTarget');
                $oTarget->setCategoryId($iCategoryId);
                $oTarget->setTargetId($iTargetId);
                $oTarget->setTargetType($oType->getTargetType());
                $oTarget->setObjectType( $sObjectType );
                $oTarget->setTypeId($oType->getId());
                $oTarget->Add();
            }
        }
        return true;
    }

}