<?php

namespace app\controllers;

use app\models\Product;
use fw\providers\Breadcrumbs;

class MainController extends AppController
{
    public function indexAction()
    {
        $model = new Product();
        $product_new = $model->getNewProducts();
        $product_hits = $model->getHitsProducts();
        $result = Breadcrumbs::testAllResult(10,10);

        $this->set(compact('product_new','product_hits','result'));
    }

}