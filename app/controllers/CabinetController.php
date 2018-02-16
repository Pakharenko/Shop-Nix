<?php

namespace app\controllers;

use app\models\User;
use fw\providers\Auth;
use fw\providers\Request;
use Valitron\Validator;

class CabinetController extends AppController
{

    public function indexAction()
    {
        if (User::isAuth()) {
            $this->set(['user_name' => Auth::getNameUser()]);
        } else {
            Request::redirect('/user/login');
        }
    }

    public function editAction()
    {
        $user = new User();
        $errors = false;
        $name_user_edit = Auth::getAllUserData();
        $id = intval($name_user_edit['id']);

        $data = $_POST;
        if (Request::isPost()) {
            $user->load($data);
            if ($user->validate($data)) {
                $user->editUser($data, $id);
                $userId = $user->userData($data);
                User::auth($userId);
                $_SESSION['success'] = 'Вы успешно обновили данные';
            } else {
                $user->getErrors();
            }
            Request::redirect();
        }

        $this->set([
            'name_user_edit' => $name_user_edit
        ]);

    }

}