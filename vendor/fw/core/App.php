<?php

namespace fw\core;

use fw\core\Registry;
use fw\core\ErrorHandler;
use fw\core\Session;

class App
{
    
    public static $app;
    
    public function __construct()
    {
        Session::start();
        self::$app = Registry::instance();
        new ErrorHandler();
    }
    
}
