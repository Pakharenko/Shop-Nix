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
        $this->set($auth = User::isAuth());
    }

    public function registerAction()
    {
        $name = false;
        $email = false;
        $password = false;
        $reg_user = false;


        $model = new User();

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

//            $errors = false;
//            if (!User::validateName($name) ) {
//                $errors[] = 'Имя не должно быть короче 2-х символов';
//            }
//            if (!User::validateEmail($email) ) {
//                $errors[] = 'Неправильный email';
//            }
//            if (!User::validatePassword($password) ) {
//                $errors[] = 'Пароль не должен быть короче 4-ох символов';
//            }

//            if ($errors == false) {
//                $reg_user = $model->registerUser($name, $email, $password);
//            }


            $model->registerUser($name, $email, $password);

        }



//        $this->set(compact('name','email','password', 'errors', 'reg_user'));

    }

    public function logoutAction()
    {
        User::logout();
    }
}