<?php
error_reporting(E_ALL);

$query = rtrim($_SERVER['QUERY_STRING'], '/'); // запрос пользователя в адресной строке
define('WWW', __DIR__);
define('CORE', dirname(__DIR__) . '/vendor/fw/core');
define('ROOT', dirname(__DIR__));
define('APP', dirname(__DIR__) . '/app');
define('LAYOUT', 'default');

require '../vendor/fw/libs/functions.php';
require '../vendor/autoload.php';
require '../vendor/fw/libs/functions.php';
require '../routes/routes.php';


//spl_autoload_register(function ($class) {
//    $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';
//    if (is_file($file)) {
//        require_once $file;
//    }
//});



