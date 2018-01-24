<?php

namespace fw\providers;

use app\models\User;

class Auth
{
    public  function auth()
    {
        $user_auth = User::isAuth();
        if(!empty($user_auth)) {
           return $this->set(['user_auth' => $user_auth]);
        }
        return false;
    }
}