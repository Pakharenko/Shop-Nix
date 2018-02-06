<?php

namespace app\models;

use fw\core\base\Model;

class Category extends Model
{

    public function getCategories()
    {
        return $this->findBySql("SELECT * FROM categories");
    }


    public function getCategoryId($id)
    {
    	return $this->findBySql("SELECT * FROM categories WHERE id = $id");
    }


    public function createCategory($add_category)
    {
        return $this->findBySql("INSERT INTO categories (`name`) VALUES ('$add_category[name]')");
    }


    public function editCategory($id, $edit_category)
    {
        return $this->findBySql(" UPDATE categories SET name = '$edit_category[name]' WHERE id = $id ");
    }


    public function deleteCategory($id)
    {
        return $this->findBySql("DELETE FROM categories WHERE id = $id");
    }

}