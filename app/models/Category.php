<?php

namespace app\models;

use fw\core\base\Model;

class Category extends Model
{

    public function getCategories()
    {
        return $this->findBySql("SELECT * FROM categories");
    }

}