<?php

namespace fw\providers;

use app\models\Category;

class CategoryProvider
{

    public function __construct()
    {
      $this->run();
    }

    public function run()
    {

        $category = new Category();
        return $category->getCategories();
    }

}