<?php

namespace app\controllers;

use app\models\Contact;

class ContactController extends AppController
{

    public function indexAction()
    {
        $model = new Contact();
        $this->set(['contacts' => $model->getContacts()]);
    }

}