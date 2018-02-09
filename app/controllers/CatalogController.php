<?php

namespace app\controllers;

use app\models\Product;
use fw\providers\Pagination;

class CatalogController extends AppController
{

    public function indexAction()
    {
        $model = new Product();
        $page = 1;
        $product_all = $model->getAllProducts($page);

        if (isset($this->route['alias'])) {
            $page = $this->route['alias'];
        }

        $limit = Product::VIEW_PAGE_LIST;
        $total = $model->getTotalCountProduct();

        $pagination = new Pagination($total, $page, $limit, 'page-');

        $this->set(compact('product_all', 'pagination'));

    }


    public function categoryAction()
    {
        $id = $this->route['alias'];
        $model = new Product();
        $product_category = $model->getProductCategory($id);
        $this->set(compact('product_category'));
    }

    public function filterAction()
    {
        $model = new Product();
        $product_all = $model->getFilterSelected($_POST['filter-group']);
        $this->set(compact('product_all'));
    }

}