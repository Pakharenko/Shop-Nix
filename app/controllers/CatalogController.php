<?php

namespace app\controllers;

use app\models\Product;
use fw\providers\Pagination;

class CatalogController extends AppController
{

    public function indexAction()
    {
        $model = new Product();
        if (isset($this->route['alias'])) {
            $page = $this->route['alias'];
        } else $page = 1;

        if (isset($_POST['filter'])) {

            switch ($_POST['filter-group']) {

                case 'expencive':
                $product_all = $model->getFilterExpenciveProducts($page);
                break;
                case 'inexpencive':   
                $product_all = $model->getFilterInExpenciveProducts($page);
                break;
                case 'a_z':
                $product_all = $model->getFilterAZProducts($page);
                break;
                case 'z_a':   
                $product_all = $model->getFilterZAProducts($page);
                break;

                $this->set(compact('product_all'));

            }

        } else {
            $product_all = $model->getAllProducts($page);
        }

        $limit = Product::VIEW_PAGE_LIST;
        $total = $model->getTotalCountProduct();

        $pagination = new Pagination($total, $page, $limit, 'page-');


        $this->set(compact('product_all','pagination'));

    }


    public function categoryAction()
    {
        $id = $this->route['alias'];
        $model = new Product();
        $product_category = $model->getProductCategory($id);
        $this->set(compact('product_category'));
    }

}