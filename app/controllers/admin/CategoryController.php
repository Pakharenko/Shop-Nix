<?php

namespace app\controllers\admin;

use app\models\Category;

class CategoryController extends AppController
{


    public function indexAction()
    {
        $model = new Category();
        $categories = $model->getCategories();
        $this->set(compact('categories'));
    }


    public function createAction()
    {

        $categories = new Category();

        if (isset($_POST['submit'])) {

            $add_category['name'] = $_POST['name'];

            $success_add_category =  $categories->createCategory($add_category);

            header("Location: /admin/category");
        }

    }


    public function editAction()
    {

        $category = new Category();
        $id = intval($this->route['alias']);
        $categories = $category->getCategoryId($id);

        if (isset($_POST['submit'])) {

            $edit_category['name'] = $_POST['name'];

            $category->editCategory($id, $edit_category);

            header("Location: /admin/category");
        }


        $this->set(compact('categories'));
    }


    public function deleteAction()
    {
        $model = new Category();
        $id = intval($this->route['alias']);
        $model->deleteCategory($id);
        header("location: /admin/category");
    }

}