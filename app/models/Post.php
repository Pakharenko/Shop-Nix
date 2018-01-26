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

}