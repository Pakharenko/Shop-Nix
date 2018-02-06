<?php

namespace fw\providers;
use app\models\Product;

class Cart
{

    public static function addProduct($id)
    {
        $id = intval($id);
        $productsCart = [];
        if (isset($_SESSION['products'])) {
            $productsCart = $_SESSION['products'];
        }

        if (array_key_exists($id, $productsCart)) {
            $productsCart[$id]++;
        } else {
            $productsCart[$id] = 1;
        }

        $_SESSION['products'] = $productsCart;

        return self::totalProductsCart();

    }


    public static function totalProductsCart()
    {
        if (isset($_SESSION['products'])) {
            $count = 0;
            foreach ($_SESSION['products'] as $id=> $quantity) {
                $count = $count +$quantity;
            }
            return $count;
        } else {
            return 0;
        }
    }

    public static function getProducts()
    {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }

    public static function getTotalPrice($products)
    {
        $productsInCart = self::getProducts();
        $total = 0;
        if ($productsInCart) {
            foreach ($products as $item) {
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }
        return $total;
    }

    public static function getTotalPriceInHeader()
    {
        $model = new Product();
        $products_cart = Cart::getProducts();

        if ($products_cart) {
            $product_id = array_keys($products_cart);
            $products = $model->getProductId($product_id);
            $total_products_price = Cart::getTotalPrice($products);
            return $total_products_price;
        }
        return $total_products_price = 0;
    }

    public static function deleteProduct($id)
    {
        $productsInCart = self::getProducts();
        unset($productsInCart[$id]);
        $_SESSION['products'] = $productsInCart;
    }

    public static function clear()
    {
        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }
    }

}