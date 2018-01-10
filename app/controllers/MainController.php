<?php
namespace app\controllers;

class MainController extends AppController
{
    public function indexAction()
    {
        $title = 'Page Main - view INDEX';
        $this->set(compact('title'));
    }

    public function testAction()
    {
        $title = 'Page Main - view INDEX';
        $this->set(compact('title'));
    }
}