<?php

namespace app\models;

use fw\core\base\Model;

class Comment extends Model
{

	public function setCommentUserProduct($comment, $name, $product_id)
	{
		 return $this->findBySql(" INSERT INTO comments (`text`, `author_name`, `product_id`) VALUES ('$comment', '$name', '$product_id')");
	}

	public function getCommentsProduct($product_id)
	{
		 return $this->findBySql("SELECT * FROM comments WHERE product_id = $product_id");
	}


	// Subscribe
	public function setSubscribe($name, $email)
	{
		return $this->findBySql(" INSERT INTO subscribes (`name`, `email`) VALUES ('$name', '$email')");
	}

}