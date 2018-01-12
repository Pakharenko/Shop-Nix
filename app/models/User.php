<?php

namespace app\models;

use fw\core\Session;

class User
{
    public static function isAuth()
    {
        if (isset($_SESSION['email'])) {
            return  $_SESSION['email'];
        }
        return false;
    }
    
    public static function logout()
    {

        unset($_SESSION['email']);

//        unset($_SESSION['email']);
        Session::destroy();
        header("location: /");
    }
}