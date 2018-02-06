<?php

namespace app\models;

use fw\core\base\Model;

class Post extends Model
{
    public function getAllPosts()
    {
        return $this->findBySql("SELECT * FROM posts ORDER BY id DESC");
    }

    public function getOnePost($id)
    {
        return $this->findBySql("SELECT * FROM posts WHERE id = $id");
    }


    public function createPost($add_post)
    {
        return $this->findBySql("INSERT INTO posts (title, author, mini_desc, description, image, `date`) VALUES ('$add_post[title]', '$add_post[author]', '$add_post[mini_desc]', '$add_post[description]', '$add_post[image]', '$add_post[date]')");
    }


    public function editPost($id, $edit_post)
    {
        return $this->findBySql(" UPDATE posts SET title = '$edit_post[title]', author = '$edit_post[author]', title= '$edit_post[title]', mini_desc = '$edit_post[mini_desc]', description = '$edit_post[description]', image= '$edit_post[image]', `date` = '$edit_post[date]' WHERE id = $id ");
    }


    public function deletePost($id)
    {
        return $this->findBySql("DELETE FROM posts WHERE id = $id");
    }

}