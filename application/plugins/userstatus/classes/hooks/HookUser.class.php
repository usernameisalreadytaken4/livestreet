<?php
/*-------------------------------------------------------
*
*   Plugin name:    User Status
*   Author:         Chiffa
*   Web:            http://goweb.pro
*
---------------------------------------------------------
*/

/**
 * Регистрация хуков
 *
 */
class PluginUserstatus_HookUser extends Hook
{

    public function RegisterHook()
    {
        $this->AddHook('start_action', 'ComponentsInit');
        $this->AddHook('template_user_header_end', 'UserHeaderEnd');
        $this->AddHook('template_activity_event_update_status', 'ActivityEventUpdateStatus');
    }

    public function ComponentsInit()
    {
        $this->Component_Add('userstatus:p-user');
        $this->Component_Add('userstatus:p-activity');
    }

    public function UserHeaderEnd($aParams = [])
    {
        $oUserProfile = isset($aParams['user']) ? $aParams['user'] : null;
        if ($oUserProfile) {
            $oUserStatus = $this->PluginUserstatus_User_GetStatusByUserId($oUserProfile->getId());
            $this->Viewer_Assign('user', $oUserProfile, true);
            $this->Viewer_Assign('status', $oUserStatus, true);
            return $this->Viewer_Fetch("Component@userstatus:p-user.status");
        }
    }

    public function ActivityEventUpdateStatus($aParams = [])
    {
        if (isset($aParams['event'])) {
            $this->Viewer_Assign('event', $aParams['event'], true);
            return $this->Viewer_Fetch("Component@userstatus:p-activity.event_status");
        }
    }

}
