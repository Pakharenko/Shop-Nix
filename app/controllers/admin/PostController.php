<?php

namespace app\controllers\admin;

use app\models\Post;

class PostController extends AppController
{

	  public function indexAction()
    {
        $model_post = new Post();
        $posts = $model_post->getAllPosts();
        $this->set(compact('posts'));
    }


    public function createAction()
    {

        $post_id = new Post();
        $add_post = [];

        if (isset($_POST['submit'])) {

            $add_post['title'] = $_POST['title'];
            $add_post['author'] = $_POST['author'];
            $add_post['date'] = $_POST['date'];
            $add_post['mini_desc'] = $_POST['mini_desc'];
            $add_post['description'] = $_POST['description'];
            $add_post['image'] = $_FILES['image']['name'];


            if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/public/images/{$_FILES['image']['name']}");
            }

            $success_add_post =  $post_id->createPost($add_post);

            header("Location: /admin/post");
        }

    }


    public function editAction()
    {
        $post_id = new Post();
        $id = intval($this->route['alias']);
        $posts = $post_id->getOnePost($id);

        if (isset($_POST['submit'])) {

           $edit_post['title'] = $_POST['title'];
           $edit_post['author'] = $_POST['author'];
           $edit_post['date'] = $_POST['date'];
           $edit_post['mini_desc'] = $_POST['mini_desc'];
           $edit_post['description'] = $_POST['description'];
           $edit_post['image'] = $_FILES['image']['name'];
  

            if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
               move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/public/images/{$_FILES['image']['name']}");
            } else {
                $edit_post['image'] = 'noimage.jpg';
            }

            $post_id->editPost($id, $edit_product);

            header("Location: /admin/post");
        }


        $this->set(compact('posts'));
    }


    public function deleteAction()
    {
        $model = new Post();
        $id = $this->route['alias'];
        $model->deletePost($id);
        header("location: /admin/post");
    }

}