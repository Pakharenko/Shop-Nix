<?php
error_reporting(E_ALL);

<<<<<<< HEAD
use fw\core\Router;
=======
use vendor\framework\core\Router;
>>>>>>> 69e86e9c9d4ecb17cbffcaae81c7e22be0bab678

$query = rtrim($_SERVER['QUERY_STRING'], '/'); // запрос пользователя в адресной строке
define('WWW', __DIR__);
define('CORE', dirname(__DIR__) . '/vendor/framework/core');
define('ROOT', dirname(__DIR__));
define('APP', dirname(__DIR__) . '/app');
define('LAYOUT', 'default');

<<<<<<< HEAD
require '../vendor/fw/libs/functions.php';

require '../vendor/autoload.php';

//spl_autoload_register(function ($class) {
//    $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';
//    if (is_file($file)) {
//        require_once $file;
//    }
//});

require '../vendor/fw/libs/functions.php';
=======
require '../vendor/framework/libs/functions.php';
>>>>>>> 69e86e9c9d4ecb17cbffcaae81c7e22be0bab678

spl_autoload_register(function ($class) {
    $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';
    if (is_file($file)) {
        require_once $file;
    }
});
<<<<<<< HEAD

=======
>>>>>>> 69e86e9c9d4ecb17cbffcaae81c7e22be0bab678
//Router::add('^page/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$', ['controller' => 'PageController']);
//Router::add('^page/(?P<alias>[a-z-]+)$',['controller'=>'UserController', 'action' => 'login']);

//Правила по умолчанию
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

Router::dispatch($query);