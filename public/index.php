<?php
error_reporting(E_ALL);

use fw\core\Router;

$query = rtrim($_SERVER['QUERY_STRING'], '/'); // запрос пользователя в адресной строке
define('WWW', __DIR__);
define('CORE', dirname(__DIR__) . '/vendor/fw/core');
define('ROOT', dirname(__DIR__));
define('APP', dirname(__DIR__) . '/app');
define('LAYOUT', 'default');


require '../vendor/fw/libs/functions.php';

require '../vendor/autoload.php';

//spl_autoload_register(function ($class) {
//    $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';
//    if (is_file($file)) {
//        require_once $file;
//    }
//});

require '../vendor/fw/libs/functions.php';


//Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)/(?P<id>[0-9]+)?$');
//Router::add('^catalog/(?P<action>[a-z-]+)/(?P<alias>[a-z]+)$', ['controller' => 'Catalog']);
Router::add('^catalog/(?P<alias>[0-9]+)$',['controller'=>'Catalog', 'action' => 'category']);
Router::add('^product/(?P<alias>[0-9]+)$',['controller'=>'Product', 'action' => 'index']);

//Правила по умолчанию
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

Router::dispatch($query);