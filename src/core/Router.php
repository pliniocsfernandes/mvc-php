<?php
/**
 * Class Router
 *
 * Responsible for translating a route to the corresponding Controller and Action
 */
class Router {
    private $baseUrl;
    private $controller;
    private $action;

    public function __construct($baseUrl) {
        $this->baseUrl = $baseUrl;
    }

    public function prepare($route) {
        $route = $route ? $route : "";

        //loading array that contains the routes from config file
        $routes = require_once __DIR__ . '/../config/routes.inc.php';

        if (array_key_exists($route, $routes)) {
            $controllerName = $routes[$route]['controller'];
            $this->action = $routes[$route]['action'];
        } else {
            $controllerName = "Default";
            $this->action = 'NotFound';
        }

        //adding appropriate suffixes to the names
        $controllerName .= "Controller";
        $this->action .= "Action";

        //WARNING use dynamic file inclusion with caution
        require_once __DIR__ . "/../controller/{$controllerName}.php";
        $this->controller = new $controllerName($this->baseUrl);
    }

    public function execute(){
        $controller = $this->controller;
        $action = $this->action;

        //using php dynamic interpretation goodness
        //$action will be replaced with the apropriate name before execution
        //e.g.: resulting in $controller->NotFoundAction()
        $controller->$action();
    }
}