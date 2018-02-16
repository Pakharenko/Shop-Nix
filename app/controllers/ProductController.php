<?php

namespace app\controllers;

use app\models\Product;
use app\models\User;
use app\models\Comment;

class ProductController extends AppController
{

    public function indexAction()
    {
        $model = new Product();
        $model_comment = new Comment();
        $model_user = new User();

        $user_auth = $model_user->isAuth();

        $products = $model->findOne($this->route['alias']);
        if (!$products) {
            abort();
        }

        $product_id = $this->route['alias'];

        if (isset($_POST['submit_comment'])) {

        	$name = $_POST['name'];
        	$comment = $_POST['comment'];

        	$model_comment->setCommentUserProduct($comment, $name, $product_id);
        } 

        $get_comments = $model_comment->getCommentsProduct($product_id);

        $this->set([
        	'products' => $products,
        	'get_comments' => $get_comments,
        	'user_auth' => $user_auth,
      ]);
    }

}