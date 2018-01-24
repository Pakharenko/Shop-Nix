<?php

namespace fw\providers;

use app\models\User;

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
}