<?php

class SnwServerManager_Helpers_PermissionHelper {

    public static function helperHasManagerAccess() {
        $visitor = XenForo_Visitor::getInstance();
        return $visitor->hasPermission('SnwManagerPermissions', 'snwServerManagerAccess');
    }
}