<?php

namespace app\models;

use fw\core\Session;
use fw\core\base\Model;

class User extends Model
{
    public function registerUser($name, $email, $password)
    {
      $this->findBySql("INSERT INTO users (`name`, `email`, `password`) VALUES ('$name','$email','$password')");
      return header("location: /user/register");
    }

    public static function isAuth()
    {
        if (isset($_SESSION['email'])) {
            return $_SESSION['email'];
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


    public static function validateName($name)
    {
        if (strlen($name >= 2)) {
            return true;
        } else {
            return false;
        }

    }

    public static function validateEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public static function validatePassword($password)
    {
        if (strlen($password >= 4)) {
            return true;
        }
        return false;
    }

}