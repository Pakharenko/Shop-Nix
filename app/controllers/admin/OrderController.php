<?php

namespace app\controllers\admin;

use app\models\Order;
use app\models\Product;

class OrderController extends AppController
{

	  public function indexAction()
    {
        $model = new Order();
        $orders = $model->getAllOrders();
        $this->set(compact('orders'));
    }


    public function viewAction()
    {
    	$model = new Order();
    	$product_goods = new Product();

    	$id = intval($this->route['alias']);
    	$view_order = $model->getViewOrder($id);

    	foreach ($view_order as $product) {
    		$productsQuantity = $product['products'];
    	}

    	$product_count = json_decode($productsQuantity, true);
    	$product_id = array_keys($product_count);
    	
    	$products = $product_goods->getProductsIdForOrders($product_id);

    	$this->set(compact('view_order', 'products', 'product_count'));
    }


    public function editAction()
    {

        $model_order = new Order();
        $id = intval($this->route['alias']);
        $orders = $model_order->getViewOrder($id);
        $edit_order = [];

        if (isset($_POST['submit'])) {

            $edit_order['user_name'] = $_POST['user_name'];
            $edit_order['user_phone'] = $_POST['user_phone'];
            $edit_order['user_comment'] = $_POST['user_comment'];
            $edit_order['created_at'] = $_POST['created_at'];
            $edit_order['status'] = $_POST['status'];

            $model_order->editOrder($id, $edit_order);

            header("Location: /admin/order");
        }

        $this->set(compact('orders'));
    }


    public function deleteAction()
    {
        $model = new Order();
        $id = intval($this->route['alias']);
        $model->deleteOrder($id);
        header("location: /admin/order");
    }


}