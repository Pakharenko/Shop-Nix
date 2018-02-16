<?php
namespace fw\core\base;

use fw\core\Session;
use fw\core\ErrorHandler;

abstract class Controller
{
    public $route = [];
    public $view;
    public $layout;
    public $vars = []; //определение переменных в шаблонах(видах) сайта
    public function __construct($route)
    {
        @Session::start();
        $this->route = $route;
        $this->view = $route['action'];

    }
    public function getView()
    {
        $viewObj = new View($this->route, $this->layout, $this->view);
        $viewObj->render($this->vars);
    }
    public function set($vars)
    {
        $this->vars = $vars;
    }
}