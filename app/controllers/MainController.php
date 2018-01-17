<?php
namespace app\controllers;

use app\models\User;

class MainController extends AppController
{
    public function indexAction()
    {
        $title = 'Page Main - view INDEX';
        $this->set(compact('title'));


        $title = 'Page Main - view INDEX';
        $this->set(compact('title'));

    }

    public function testAction()
    {
        $title = 'Page Main - view INDEX';
        $this->set(compact('title'));
    }
}