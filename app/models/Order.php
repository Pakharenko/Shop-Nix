<?php

namespace app\models;

use fw\core\base\Model;

class Order extends Model
{
    public function saveOrders($user_id, $name, $phone, $comment, $product_cart)
    {
        $product_cart = json_encode($product_cart);

        var_dump($product_cart);
        var_dump($user_id);
        var_dump($name);
        var_dump($phone);
        var_dump($comment);

        return $this->findBySql("INSERT INTO orders (`user_name`, `user_phone`, `user_comment`, `user_id`, `products`) VALUES ('$name', '$phone', '$comment', '$user_id', '$product_cart')");
    }
}

