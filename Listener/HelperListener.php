<?php

class SnwServerManager_Listener_HelperListener {

    /**
     * Listen to the "init_dependencies" code event.
     *
     * @param XenForo_Dependencies_Abstract $dependencies
     * @param array $data
     */
    public static function init(XenForo_Dependencies_Abstract $dependencies, array $data) {
        XenForo_Template_Helper_Core::$helperCallbacks += array(
            'has_snw_manager_access' => array('SnwServerManager_Helpers_PermissionHelper', 'helperHasManagerAccess')
        );
    }
}