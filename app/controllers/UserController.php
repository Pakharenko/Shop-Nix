<?php

namespace app\controllers;

use app\models\User;

class UserController extends AppController
{
    public function loginAction()
    {
        if (isset($_POST['submit'])) {
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['pass'] = $_POST['pass'];
        }
<<<<<<< HEAD

        $this->set($auth = User::isAuth());


=======
>>>>>>> 69e86e9c9d4ecb17cbffcaae81c7e22be0bab678
    }

    public function registerAction()
    {
    }

    public function logoutAction()
    {
        User::logout();
    }
}