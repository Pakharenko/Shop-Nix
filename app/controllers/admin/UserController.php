<?php

namespace app\controllers\admin;

use app\models\User;

class UserController extends AppController
{

		  public function indexAction()
    {
        $model_user = new User();
        $users = $model_user->getAllUsers();
        $this->set(compact('users'));
    }


    public function editAction()
    {
        $model_user = new User();
        $id = intval($this->route['alias']);
        $users = $model_user->getOneUser($id);

        if (isset($_POST['submit'])) {

           $edit_user['name'] = $_POST['name'];
           $edit_user['email'] = $_POST['email'];
           $edit_user['password'] = $_POST['password'];
           $edit_user['is_admin'] = $_POST['is_admin'];

            $model_user->editUserInAdmin($id, $edit_user);

            header("Location: /admin/user");
        }

        $this->set(compact('users'));
    }


    public function deleteAction()
    {
        $model = new User();
        $id = $this->route['alias'];
        $model->deleteUser($id);
        header("location: /admin/user");
    }

}