<?php

namespace app\controllers\admin;

use app\models\Product;
use app\models\Category;

class ProductController extends AppController
{

    public function indexAction()
    {
        $model = new Product();
        $all_products = $model->getAllProductsToAdmin();
        $this->set(compact('all_products'));
    }


    public function createAction()
    {

        $category_id = new Category();
        $model_product = new Product();
        $categories = $category_id->getCategories();
        $add_product = [];

        if (isset($_POST['submit'])) {

            $add_product['name'] = $_POST['name'];
            $add_product['brand'] = $_POST['brand'];
            $add_product['price'] = $_POST['price'];
            $add_product['category_id'] = $_POST['category_id'];
            $add_product['tiny_desc'] = $_POST['tiny_desc'];
            $add_product['description'] = $_POST['description'];
            $add_product['image'] = $_FILES['image']['name'];
            $add_product['is_new'] = $_POST['is_new'];
            $add_product['is_hits'] = $_POST['is_hits'];
            $add_product['is_popular'] = $_POST['is_popular'];

            if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/public/images/{$_FILES['image']['name']}");
            }

            $success_add_product =  $model_product->createProduct($add_product);

            header("Location: /admin/product");
        }

        $this->set(compact('categories'));
    }


    public function editAction()
    {
        $model_product = new Product();
        $category_id = new Category();
        $id = intval($this->route['alias']);
        $products = $model_product->findOne($id);
        $categories = $category_id->getCategories();

        if (isset($_POST['submit'])) {

            $edit_product['name'] = $_POST['name'];
            $edit_product['brand'] = $_POST['brand'];
            $edit_product['price'] = $_POST['price'];
            $edit_product['category_id'] = $_POST['category_id'];
            $edit_product['tiny_desc'] = $_POST['tiny_desc'];
            $edit_product['description'] = $_POST['description'];
            $edit_product['image'] = $_FILES["image"]["name"];
            $edit_product['is_new'] = $_POST['is_new'];
            $edit_product['is_hits'] = $_POST['is_hits'];
            $edit_product['is_popular'] = $_POST['is_popular'];

            if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
               move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/public/images/{$_FILES['image']['name']}");
            } else {
                $edit_product['image'] = 'noimage.jpg';
            }

            $model_product->editProduct($id, $edit_product);

            header("Location: /admin/product");
        }


        $this->set(compact('products','categories'));
    }


    public function deleteAction()
    {
        $model = new Product();
        $id = $this->route['alias'];
        $model->deleteProduct($id);
        header("location: /admin/product");
    }

}