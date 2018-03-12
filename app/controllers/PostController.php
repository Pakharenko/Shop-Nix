<?php

namespace app\controllers;

use app\models\Post;

class PostController extends AppController
{

    public function indexAction()
    {
        $model = new Post();
        $this->set(['posts' => $model->getAllPosts()]);
    }

    public function viewAction()
    {
        $model = new Post();
        $id = intval($this->route['alias']);
        $post = $model->getOnePost($id);
        $this->set(['post' => $post]);
    }

}