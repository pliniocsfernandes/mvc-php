<?php
//Using /mvc-php/ for acessing it via http://localhost/mvc-php/
$base_url = '/mvc-php/public/';
// Comment the following line to use it with apache rewrite
//$base_url .= 'index.php?route=';

require_once __DIR__ . "/../src/core/Router.php";

$route = $_GET['route'];

//create the router instance with the route given by the user
$router = new Router($base_url);
$router->prepare($route);
$router->execute();