<?php

namespace fw\providers;

use app\models\Category;
use app\models\Product;

class CategoryProvider
{

    public function run()
    {
       return $this->getTree();
    }

    private function getTree()
    {
        $data = $this->getCategory();
        $tree = [];
        foreach ($data as $key => $item) {
            $tree[$item['parent_id']] [$item['id']] = $item;
        }

        $treeElement = $tree[0];
        $generateTree = $this->generateTree($treeElement, $tree);

        return $treeElement;
    }

    private function generateTree(&$treeElement, $tree)
    {
        foreach ($treeElement as $key => $item) {
            if (!isset($item['child'])) {
                $treeElement[$key]['child'] = [];
            }
            if (array_key_exists($key, $tree)) {
                $treeElement[$key]['child'] = $tree[$key];
                $this->generateTree($treeElement[$key]['child'], $tree);
            }
        }
    }


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