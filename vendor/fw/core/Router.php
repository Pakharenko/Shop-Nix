<?php
namespace fw\core;

class Router
{
    protected static $routes = []; // массив маршрутов
    protected static $route = []; // текущий маршрут
    // Добавление маршрутов
    public static function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;
    }
    // вспомогательный метод для распечатки маршрутов
    public static function getRoutes()
    {
        return self::$routes;
    }
    // текущий маршрут приложения
    public static function getRoute()
    {
        return self::$route;
    }
    // ищет совпадение маршрутов если true записываем в текущий маршрут
    public static function matchRoute($url)
    {
        foreach (self::$routes as $pattern => $route) {
            if (preg_match("#$pattern#i", $url, $matches)) {
                foreach ($matches as $k => $v) {
                    if (is_string($k)) {
                        $route[$k] = $v;
                    }
                }

                if (!isset($route['action'])) {
                    $route['action'] = 'index';
                }

                // For Admin
                if (!isset($route['prefix'])) {
                    $route['prefix'] = '';
                } else {
                    $route['prefix'] .= '\\';
                }

                $route['controller'] = self::upperCamelCase($route['controller']);
                self::$route = $route; // на выходе получаем Controller и Action
                return true;
            }
        }
        return false;
    }
    // перенаправляет URL по корректному маршруту. $url - входящий URL
    public static function dispatch($url)
    {
        $url = self::removeQueryString($url);
        if (self::matchRoute($url)) {
            $controller = 'app\controllers\\' . self::$route['prefix'] . self::$route['controller'] . 'Controller';
            if (class_exists($controller)) {
                $contrObj = new $controller(self::$route); // объект контроллера
                // получили action  постфиксом action для методов
                $action = self::lowerCamelCase(self::$route['action']) . 'Action';
                if (method_exists($contrObj, $action)) {
                    $contrObj->$action();
                    $contrObj->getView();
                } else {
                    echo "<br> Метод <b>$controller::$action</b> не найден";
                }
            } else {
                echo "Контроллер <b> $controller </b> не найден";
            }
        } else {
            http_response_code(404);
            include '404.html';
        }
    }
    //Нужный вид контроллера в верхнем регистре
    protected static function upperCamelCase($name)
    {
        $name = str_replace('-', ' ', $name);
        $name = ucwords($name);
        $name = str_replace(' ', '', $name);
        return $name;
    }
    //первую букву делает мленькой а второе слово с большой
    protected static function lowerCamelCase($name)
    {
        $name = str_replace('-', ' ', $name);
        $name = lcfirst($name);
        $name = str_replace(' ', '', $name);
        return $name;
    }
    protected static function removeQueryString($url)
    {
        if ($url) {
            $params = explode('&', $url, 2);
            if (false === strpos($params[0], '=')) {
                return rtrim($params[0], '/');
            } else {
                return '';
            }
        }
    }
}