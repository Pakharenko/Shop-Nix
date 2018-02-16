<?php

$query = rtrim($_SERVER['QUERY_STRING'], '/'); // запрос пользователя в адресной строке
define("DEBUG", 1);
define('WWW', __DIR__);
define('CORE', dirname(__DIR__) . '/vendor/fw/core');
define('ROOT', dirname(__DIR__));
define('APP', dirname(__DIR__) . '/app');
define('LAYOUT', 'default');

require '../vendor/fw/libs/functions.php';
require '../vendor/autoload.php';
require '../routes/routes.php';



