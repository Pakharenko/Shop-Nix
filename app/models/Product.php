<?php

namespace app\models;

use fw\core\base\Model;

class Product extends Model
{
    const VIEW_PAGE_LIST = 6;

    protected $table = 'products';

    public function getNewProducts()
    {
        return $this->findBySql("SELECT * FROM products WHERE is_new = 1 ORDER BY id DESC LIMIT 3");
    }

    public function getHitsProducts()
    {
        return $this->findBySql("SELECT * FROM products WHERE is_hits = 1 ORDER BY id DESC LIMIT 3");
    }

    public function getPopularProducts()
    {
        return $this->findBySql("SELECT * FROM products WHERE is_popular = 1 ORDER BY id DESC LIMIT 6");
    }

    public function getAllProducts($page = 1)
    {
        $offset = ($page - 1) * self::VIEW_PAGE_LIST;
        return $this->findBySql("SELECT * FROM products LIMIT 6 OFFSET $offset");
    }

    public function getProductCategory($categoryId)
    {
        return $this->findBySql("SELECT * FROM products WHERE category_id = $categoryId ORDER BY id DESC LIMIT 6");
    }

    public function getProductId($id)
    {
        $string_id = implode(',', $id);
        return $this->findBySql("SELECT * FROM products WHERE id IN($string_id)");
    }

    public function searchProduct($str)
    {
        return $this->findBySql("SELECT * FROM products WHERE name LIKE '%$str%' ");
    }

    public function getTotalCountProduct()
    {
        $result = 0;
        $sql = $this->findBySql("SELECT COUNT(id) AS count FROM products");

        foreach ($sql as $count_products) {
            $result = $count_products;
        }

        return $result['count'];
    }

    // --- Filters ---
    public function getFilterExpenciveProducts($page = 1)
    {
        $offset = ($page - 1) * self::VIEW_PAGE_LIST;
        return $this->findBySql("SELECT * FROM products ORDER BY price DESC LIMIT 6 OFFSET $offset");
    }

    public function getFilterInExpenciveProducts($page = 1)
    {
        $offset = ($page - 1) * self::VIEW_PAGE_LIST;
        return $this->findBySql("SELECT * FROM products ORDER BY price ASC LIMIT 6 OFFSET $offset");
    }

    public function getFilterZAProducts($page = 1)
    {
        $offset = ($page - 1) * self::VIEW_PAGE_LIST;
        return $this->findBySql("SELECT * FROM products ORDER BY name DESC LIMIT 6 OFFSET $offset");
    }

    public function getFilterAZProducts($page = 1)
    {
        $offset = ($page - 1) * self::VIEW_PAGE_LIST;
        return $this->findBySql("SELECT * FROM products ORDER BY name ASC LIMIT 6 OFFSET $offset");
    }
    // --- End Filters ---

}