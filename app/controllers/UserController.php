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
    }

    public function registerAction()
    {
    }

    public function logoutAction()
    {
        User::logout();
    }
}