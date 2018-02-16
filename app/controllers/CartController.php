<?php

namespace app\controllers;

use app\models\Order;
use fw\providers\Cart;
use app\models\Product;
use app\models\User;

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

    public function ordersAction()
    {
        $model_cart = new Product();
        $products_cart = Cart::getProducts();

        if ($products_cart) {
            $product_id = array_keys($products_cart);
            $products = $model_cart->getProductId($product_id);
            $total_products_price = Cart::getTotalPrice($products);
        }


        $errors = false;
        $products_cart = Cart::getProducts();
        $model = new Order();

        if (empty($products_cart)) {
            header("location: /");
        }


        $name_user = false;

        if (User::isAuth()) {
            foreach (User::isAuth() as $user) {
                $user_id = $user['id'];
                $name_user = $user['name'];
            }
        } else {
            $user_id = 0;
            $name_user = false;
        }

        if (isset($_POST['submit'])) {
            
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $comment = $_POST['comment'];

            if (!User::validateName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::validatePhone($phone)) {
                $errors[] = 'Неправильный номер';
            }
            if (!User::validateComment($comment)) {
                $errors[] = 'Поле не должен быть короче 4-ох символов';
            }

            if ($errors == false) {
                $model->saveOrders($user_id, $name, $phone, $comment, $products_cart);
                Cart::clear();
                header("location: /cart");
            }
            $this->set(compact('phone', 'comment', 'errors'));
        }

        $this->set([
            'name_user' => $name_user,
            'Error' => $errors,
            'total_products_price' => $total_products_price,
        ]);
    }

}