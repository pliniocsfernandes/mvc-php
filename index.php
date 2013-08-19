<?php
/**
 * Using /mvc-php/ for acessing it via http://localhost/mvc-php/
 */
$base_url = '/mvc-php/';
/**
 * Comment the following line to use it with apache rewrite
 */
$base_url .= 'index.php?route=';

if ($_GET['route']);

switch ($_GET['route']) {
    case "":
    case "home":
        $controller = "Default";
        $action = "home";
        break;
    case "pirate":
        $controller = "Default";
        $action = "pirate";
        break;
    case "guru":
        $controller = "Default";
        $action = "guru";
        break;
    default:
        $controller = "Default";
        $action = "notfound";
}

$controller .= "Controller";
$action .= "Action";

require_once __DIR__ . "/controller/{$controller}.php";
$controller = new $controller($base_url);
$controller->$action();
