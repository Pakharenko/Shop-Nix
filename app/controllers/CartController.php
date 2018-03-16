<?php

namespace app\controllers;

use app\models\Order;
use fw\providers\Cart;
use app\models\Product;
use app\models\User;
use fw\providers\Request;

class CartController extends AppController
{

    public function indexAction()
    {
        $model = new Product();
        $products_cart = Cart::getProducts();

        if ($products_cart) {
            $product_id = array_keys($products_cart);
            $products = $model->getProductId($product_id);
            $total_products_price = Cart::getTotalPrice($products);
        }

        $this->set(compact('total_products_price', 'products', 'products_cart'));
    }

    public function addAction()
    {
        Cart::addProduct($this->route['alias']);
        Cart::totalProductsCart();
        $ref = $_SERVER['HTTP_REFERER'];
        Request::redirect($ref);
    }

    public function ajaxAction()
    {
        $response = [];
        $response['total_count'] = Cart::addProduct($this->route['alias']);
        $response['total_price'] = Cart::getTotalPriceInHeader();
        echo json_encode($response);
        die();
    }

    public function deleteAction()
    {
        Cart::deleteProduct($this->route['alias']);
        Request::redirect('/cart');
    }

    public function ordersAction()
    {
        $model_cart = new Product();
        $model = new Order();
        $products_cart = Cart::getProducts();
        $data = $_POST;

        if ($products_cart) {
            $product_id = array_keys($products_cart);
            $products = $model_cart->getProductId($product_id);
            $total_products_price = Cart::getTotalPrice($products);
        }

        if (User::isAuth()) {
            foreach (User::isAuth() as $user) {
                $user_id = $user['id'];
                $name_user = $user['name'];
            }
        } else {
            $user_id = 0;
            $name_user = false;
        }

        if (Request::isPost()) {
            $model->load($data);
            if ($model->validate($data)) {
                if (empty($products_cart)) {
                    Request::redirect('/');
                }
                $model->saveOrders($data, $user_id, $products_cart);
                Cart::clear();
                $_SESSION['success'] = 'Вы успешно оформили заказ!';
            } else {
                $model->getErrors();
            }
        }

        $this->set([
            'name_user' => $name_user,
            'total_products_price' => $total_products_price,
        ]);
    }

}