<?php

namespace app\controllers;

use app\models\Product;

class SearchController extends AppController
{
    public function indexAction()
    {
        $model = new Product();
        if (isset($_POST['search'])) {
            $str = $_POST['text'];
            $search = $model->searchProduct($str);
        }
      $this->set(['search' => $search]);
    }
}