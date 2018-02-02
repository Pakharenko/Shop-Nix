<?php

namespace fw\providers;

use app\models\Category;
use app\models\Product;

class CategoryProvider
{

    public function getCategory()
    {
        $category = new Category();
        return $category->getCategories();
    }

    public function getPopularProducts()
    {
    	$model = new Product;
    	return $model->getPopularProducts();
    }

}