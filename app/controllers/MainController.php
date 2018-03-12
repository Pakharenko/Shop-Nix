<?php

namespace app\controllers;

use app\models\Product;

class MainController extends AppController
{
    public function indexAction()
    {
        $model = new Product();
        $product_new = $model->getNewProducts();
        $product_hits = $model->getHitsProducts();
        $this->set(compact('product_new','product_hits','result'));
    }

}