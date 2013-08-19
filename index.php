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
        require __DIR__."/home.php";
        break;
    case "pirate":
        require __DIR__."/pirate.php";
        break;
    case "guru":
        require __DIR__."/guru.php";
        break;
    default:
        die("Route not found"); //FIXME Yuck....
}

