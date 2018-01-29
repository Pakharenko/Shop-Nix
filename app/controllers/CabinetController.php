<?php

namespace app\controllers;

use app\models\User;

class CabinetController extends AppController
{

    public function indexAction()
    {
        if (User::isAuth()) {
            foreach (User::isAuth() as $nameUser) {
                $name = $nameUser['name'];
            }
            return $this->set(['user_name' => $name]);
        } else {
            header("location: /user/login");
        }
    }

    public function editAction()
    {
        $model = new User();
        $errors = false;

        $name_user_edit = [];
        foreach (User::isAuth() as $user) {
            $name_user_edit = $user;
        }

        $id = intval($name_user_edit['id']);
        if (isset($_POST['edit_user'])) {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];


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
                $model->editUser($id, $name, $email, $password);
            }
        }

        $this->set([
            'name_user_edit' => $name_user_edit,
            'errors' => $errors,
        ]);

    }

}