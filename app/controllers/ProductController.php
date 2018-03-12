<?php

namespace app\controllers;

use app\models\Product;
use app\models\User;
use app\models\Comment;
use fw\providers\Request;

class ProductController extends AppController
{

    public function indexAction()
    {
        $model = new Product();
        $model_comment = new Comment();
        $model_user = new User();

        $user_auth = $model_user->isAuth();
        $product_id = $this->route['alias'];
        $products = $model->findOne($product_id);

        if (Request::isPost()) {
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