<?php

namespace app\controllers;

use app\models\User;

class UserController extends AppController
{
    public function loginAction()
    {
        $model = new User();
        $email = false;
        $password = false;

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            $userId = $model->userData($email, $password);

            if ($userId == false) {
                $errors[] = 'Неправильный логин или пароль';
            } else {
                User::auth($userId);
                header("Location: /");
            }
        }

        $this->set(compact('email', 'password', 'errors'));

    }

    public function registerAction()
    {
        $name = false;
        $email = false;
        $password = false;

        $model = new User();

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;
            if (!User::validateName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::validateEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::validatePassword($password)) {
                $errors[] = 'Пароль не должен быть короче 4-ох символов';
            }

            if ($errors == false) {
                $model->registerUser($name, $email, $password);
            }
        }

          $this->set(compact('name', 'email', 'password', 'errors'));

    }

    public function logoutAction()
    {
        User::logout();
    }
}