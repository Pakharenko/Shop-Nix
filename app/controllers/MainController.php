<?php
namespace app\controllers;

<<<<<<< HEAD
use app\models\User;

=======
>>>>>>> 69e86e9c9d4ecb17cbffcaae81c7e22be0bab678
class MainController extends AppController
{
    public function indexAction()
    {
<<<<<<< HEAD

        $auth = User::isAuth();
        $this->set(compact('auth'));

        $title = 'Page Main - view INDEX';
        $this->set(compact('title'));

=======
        $title = 'Page Main - view INDEX';
        $this->set(compact('title'));
>>>>>>> 69e86e9c9d4ecb17cbffcaae81c7e22be0bab678
    }

    public function testAction()
    {
        $title = 'Page Main - view INDEX';
        $this->set(compact('title'));
    }
}