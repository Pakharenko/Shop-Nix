<?php

namespace fw\providers;

use app\models\Product;


class Search
{
    public static function search()
    {
        $model = new Product();
        if (isset($_POST['search'])) {
            $str = $_POST['text'];
            $model->searchProduct($str);
        }
    }
}