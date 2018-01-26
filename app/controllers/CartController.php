<?php

namespace app\controllers;

use fw\providers\Cart;
use app\models\Product;

class CartController extends AppController
{

    public function indexAction()
    {
        $model = new Product();
        $products_cart = Cart::getProducts();

        if ($products_cart) {
            $product_id = array_keys($products_cart);
            $products = $model->getProdustId($product_id);
            $total_products_price = Cart::getTotalPrice($products);
        }

        $this->set(compact( 'total_products_price','products', 'products_cart') );
    }

    public function addAction()
    {
        Cart::addProduct($this->route['alias']);
        $ref = $_SERVER['HTTP_REFERER'];
        header("location: $ref");
    }

    public function actionAddAjax()
    {
        echo Cart::addProduct($this->route['alias']);
        return true;
    }

    public function deleteAction()
    {
        Cart::deleteProduct($this->route['alias']);
        header("Location: /cart");
    }
    
}