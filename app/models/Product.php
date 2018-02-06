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

	public function getAllProductsToAdmin()
	{
		return $this->findBySql("SELECT * FROM products");
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


	public function getProductsIdForOrders($product_id)
	{
		$product_id = implode(',', $product_id);
		return $this->findBySql("SELECT * FROM products WHERE id IN ($product_id)");
	}


	public function createProduct($add_product)
	{
		return $this->findBySql("INSERT INTO products (category_id, `name`, brand, price, tiny_desc, description, is_new, is_hits, is_popular, image) VALUES ('$add_product[category_id]', '$add_product[name]', '$add_product[brand]', '$add_product[price]', '$add_product[tiny_desc]', '$add_product[description]', '$add_product[is_new]', '$add_product[is_hits]', '$add_product[is_popular]', '$add_product[image]')");
	}

	public function editProduct($id, $edit_product)
	{
		return $this->findBySql(" UPDATE products SET category_id = $edit_product[category_id], `name` = '$edit_product[name]', brand = '$edit_product[brand]', price = '$edit_product[price]', tiny_desc = '$edit_product[tiny_desc]', description = '$edit_product[description]', is_new = '$edit_product[is_new]', is_hits = '$edit_product[is_hits]', is_popular = '$edit_product[is_popular]', image = '$edit_product[image]' WHERE id = $id ");
	}

	public function deleteProduct($id)
	{
		return $this->findBySql("DELETE FROM products WHERE id = '$id' ");
	}


}