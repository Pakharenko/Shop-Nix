<?php

namespace app\models;

<<<<<<< HEAD
use fw\core\Session;
=======
use framework\core\Session;
>>>>>>> 69e86e9c9d4ecb17cbffcaae81c7e22be0bab678

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
<<<<<<< HEAD

        unset($_SESSION['email']);

=======
>>>>>>> 69e86e9c9d4ecb17cbffcaae81c7e22be0bab678
//        unset($_SESSION['email']);
        Session::destroy();
        header("location: /");
    }
}