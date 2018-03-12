<?php

namespace fw\providers;

use app\models\User;
use fw\core\Session;

class Auth
{
    public function auth()
    {
        $user_auth = [];
        if (!empty(User::isAuth())) {
            foreach (User::isAuth() as $user) {
                $user_auth = $user;
            }
            return $user_auth['name'];
        }
        return false;
    }

    public static function getAdminAuth()
    {
        Session::start();
        $auth_admin = false;
        if (!empty(User::isAuth())) {
            foreach (User::isAuth() as $user) {
                $auth_admin = $user['is_admin'];
            }
        }
        return intval($auth_admin);
    }

    public static function getNameUser()
    {
        $name = false;
        foreach (User::isAuth() as $nameUser) {
            $name = $nameUser['name'];
        }
        return $name;
    }

    public static function getAllUserData()
    {
        $name = [];
        foreach (User::isAuth() as $allData) {
            $name = $allData;
        }
        return $name;
    }


}


