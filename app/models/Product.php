<?php

namespace app\models;

use fw\core\base\Model;

class Product extends Model
{
    protected $table = 'products';

    public function getNewProducts()
    {
        return $this->findBySql("SELECT * FROM products WHERE is_new = 1 ORDER BY id DESC LIMIT 3");
    }

    public function getHitsProducts()
    {
        return $this->findBySql("SELECT * FROM products WHERE is_hits = 1 ORDER BY id DESC LIMIT 3");
    }

    public function getAllProducts()
    {
        return $this->findBySql("SELECT * FROM products");
    }

    public function getProductCategory($categoryId)
    {
        return $this->findBySql("SELECT * FROM products WHERE category_id = $categoryId ORDER BY id DESC LIMIT 9");
    }

    public function getProdustId($id)
    {
        $string_id = implode(',', $id);
        return $this->findBySql("SELECT * FROM products WHERE id IN($string_id)");
    }

    public function searchProduct($str)
    {
        return $this->findBySql("SELECT * FROM products WHERE name LIKE '%$str%' ");
    }

}