<?php

class SnwServerManager_ControllerPublic_View extends XenForo_ControllerPublic_Abstract {

    public function _preDispatch($action) {
        parent::_preDispatch($action);
        if (!SnwServerManager_Helpers_PermissionHelper::helperHasManagerAccess()) {
            throw $this->getNoPermissionResponseException();
        }
    }

    public function actionIndex() {
        return $this->responseView('SnwServerManager_ViewPublic_View', 'management_view', array());
    }
}