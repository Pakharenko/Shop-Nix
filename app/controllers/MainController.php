<?php
namespace app\controllers;

use app\models\User;

class MainController extends AppController
{
    public function indexAction()
    {

        $auth = User::isAuth();
        $this->set(compact('auth'));

        $title = 'Page Main - view INDEX';
        $this->set(compact('title'));

    }

    public function testAction()
    {
        $title = 'Page Main - view INDEX';
        $this->set(compact('title'));
    }
}