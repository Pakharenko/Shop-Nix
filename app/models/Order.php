<?php

namespace app\models;

use fw\core\base\Model;

class Order extends Model
{
    public $attributes = [
        'name' => '',
        'phone' => '',
        'comment' => '',
    ];

    public $rules = [
        'required' => [
            ['name'],
            ['phone'],
            ['comment'],
        ],
        'lengthMin' => [
            ['comment', 6],
            ['name', 3],
            ['phone', 10]
        ]
    ];


	public function saveOrders($data, $user_id, $product_cart)
	{
		$product_cart = json_encode($product_cart);
		return $this->findBySql(" INSERT INTO orders (`user_name`, `user_phone`, `user_comment`, `user_id`, `products`) VALUES (?, ?, ?, ?, ?)", [$data['name'], $data['phone'], $data['comment'], $user_id, $product_cart]);
	}

	public function getAllOrders()
	{
		return $this->findBySql("SELECT * FROM orders");
	}

	public function getCountNewOrders()
	{
		return $this->findBySql("SELECT count(status) FROM orders WHERE status = 0");
	}


	public function getViewOrder($id)
	{
		return $this->findBySql("SELECT * FROM orders WHERE id = ?", [$id]);
	}


	public function editOrder($id, $edit_order)
	{
		return $this->findBySql(" UPDATE orders SET user_name = '$edit_order[user_name]', user_phone = '$edit_order[user_phone]', user_comment = '$edit_order[user_comment]', created_at = '$edit_order[created_at]', status = '$edit_order[status]' WHERE id = $id");
	}


	public function deleteOrder($id)
	{
		return $this->findBySql("DELETE FROM orders WHERE id = ?", [$id]);
	}

}

