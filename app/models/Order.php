<?php

namespace app\models;

use fw\core\base\Model;

class Order extends Model
{
	public function saveOrders($user_id, $name, $phone, $comment, $product_cart)
	{
		$product_cart = json_encode($product_cart);

		return $this->findBySql(" INSERT INTO orders (`user_name`, `user_phone`, `user_comment`, `user_id`, `products`) VALUES (?, ?, ?, ?, ?)", [$name, $phone, $comment, $user_id, $product_cart]);
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

