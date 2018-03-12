<?php

namespace app\controllers;

use app\models\Product;
use fw\providers\Request;

class SearchController extends AppController
{
    public function indexAction()
    {
        $model = new Product();
        if (Request::isPost()) {
            $str = $_POST['text'];
            $search = $model->searchProduct($str);
        }
      $this->set(['search' => $search, 'search_text' => $str]);
    }
}