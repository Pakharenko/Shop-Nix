<?php

namespace app\controllers;

use app\models\Product;

class ProductController extends AppController
{

    public function indexAction()
    {
        $model= new Product();
        $products = $model->findOne($this->route['alias']);
        $this->set(['products' => $products]);
    }

}