<?php

class SnwServerManager_Routing_Prefix_View implements XenForo_Route_Interface {

    public function match($routePath, Zend_Controller_Request_Http $request, XenForo_Router $router) {
        $components = explode('/', $routePath);
        $subPrefix = strtolower(array_shift($components));
        $slice = false;
        switch ($subPrefix) {
            case 'view':
            default:
                $controller = 'View';
        }
        $routePathAction = ($slice ? implode('/', array_slice($components, 0, 2)) : $routePath).'/';
        $routePathAction = str_replace('//', '/', $routePathAction);

        $action = $router->resolveActionWithStringParam($routePathAction, $request, "string_id");
        return $router->getRouteMatch('SnwServerManager_ControllerPublic_' . $controller, $action, 'view');
    }
}