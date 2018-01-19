<?php

namespace app\controllers;

use app\models\Product;

class CatalogController extends AppController
{
    public function indexAction()
    {
        $model = new Product();
        $product_all = $model->getAllProducts();
        $this->set(compact('product_all'));
    }
}