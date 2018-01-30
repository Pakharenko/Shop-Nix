<?php

namespace app\models;

use fw\core\Session;
use fw\core\base\Model;

class User extends Model
{
    public function registerUser($name, $email, $password)
    {
      $this->findBySql(" INSERT INTO users (`name`, `email`, `password`) VALUES ('$name', '$email', '$password') ");

      return header("location: /user/register");
    }

    public function userData($email, $password)
    {
        return $this->findBySql(" SELECT * FROM users WHERE email = '$email' AND password = '$password' ");
    }

    public function editUser($id, $name, $email, $password)
    {
        return $this->findBySql("UPDATE users SET `name` = '$name', `email` = '$email', password = '$password' WHERE id = '$id'");
    }

    public static function auth($userId)
    {
        $_SESSION['user'] = $userId;
    }

    public static function isAuth()
    {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
        return false;
    }

    public static function logout()
    {
        unset($_SESSION['email']);
        Session::destroy();
        header("location: /");
    }


    public static function validateName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        }
            return false;
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
        if (strlen($password) >= 4) {
            return true;
        }
        return false;
    }

    public static function validatePhone($phone)
    {
        if (strlen($phone) >= 10) {
            return true;
        }
        return false;
    }

    public static function validateComment($comment)
    {
        if (strlen($comment) >= 4) {
            return true;
        }
        return false;
    }




}