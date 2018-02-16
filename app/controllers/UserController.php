<?php

namespace app\controllers;

use app\models\User;
use fw\providers\Request;

class UserController extends AppController
{
    public function loginAction()
    {
        $model = new User();
        $data = $_POST;
        if (Request::isPost()) {
            $model->load($data);
            $userId = $model->userData($data);
            if ($model->validate($data)) {
                User::auth($userId);
                Request::redirect('/');
            } else {
                $_SESSION['error'] = 'Логин/пароль введены неверно';
            }
        }

    }

    public function registerAction()
    {
        $user = new User();
        $data = $_POST;
        if (Request::isPost()) {
            $user->load($data);
            if ($user->validate($data)) {
                $user->registerUser($data);
                $_SESSION['success'] = 'Вы успешно зарегистрировались';
            } else {
                $user->getErrors();
            }
            Request::redirect();
        }
    }

    public function logoutAction()
    {
        User::logout();
    }
}