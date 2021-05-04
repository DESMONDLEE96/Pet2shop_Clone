<?php
class ModelCatalogStoreCategory extends Model {
	public function addStoreCategory($data) {

		$this->db->query("INSERT INTO " . DB_PREFIX . "store_category SET store_id = '" . (int) $data['store_id'] . "', category_name = '". $this->db->escape($data['category_name']) ."'");

		$store_category_id = $this->db->getLastId();

		return $store_category_id;
	}

	public function saveStoreCategory($data) {
		//check is the seller already create the store before
		$store = $this->getStoreBySellerId($data['seller_id']);

		if (!empty($store)) { //update
			$this->db->query("UPDATE " . DB_PREFIX . "store SET name = '" . $this->db->escape($data['name']) . "', description = '". $this->db->escape($data['description']) ."', address = '". $this->db->escape($data['address']) ."', image = '". $this->db->escape($data['image']) ."', last_update = NOW() WHERE seller_id = '". (int)$data['seller_id'] . "'");
		} else { //add
			$this->db->query("INSERT INTO " . DB_PREFIX . "store SET name = '" . $this->db->escape($data['name']) . "', seller_id = '". (int)$data['seller_id'] ."', description = '". $this->db->escape($data['description']) ."', address = '". $this->db->escape($data['address']) ."', image = '". $this->db->escape($data['image']) ."', created_date= NOW(), last_update = NOW()");
		}

		$store_id = $this->db->getLastId();

		return $store_id;
	}

	public function checkStoreCategoryName($data) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "store_category WHERE store_id = '" . (int)$data['store_id'] . "' AND category_name = '". $this->db->escape($data['category_name']) ."'");

		if (!empty($query->row)) {
			return true;
		}

		return false;
	}

	public function getStoreCategory($store_id, $store_category_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "store_category WHERE store_id = '" . (int)$store_id . "' AND store_category_id = '".  (int)$store_category_id ."'");

		return $query->row;
	}

	public function getStoreCategoryByStoreId($store_id) {
		$query = $this->db->query("SELECT sc.*, (SELECT COUNT(*) FROM ". DB_PREFIX ."store_category_product WHERE store_category_id = sc.store_category_id) AS total_product FROM " . DB_PREFIX . "store_category as sc WHERE store_id = '" . (int)$store_id . "'");

		return $query->rows;
	}

	public function getStoreCategoryProducts($store_category_id) {
		$query = $this->db->query("SELECT scp.product_id, p.*, (SELECT pd.name FROM " . DB_PREFIX . "product_description pd WHERE pd.product_id = scp.product_id) AS name FROM " . DB_PREFIX . "store_category_product scp LEFT JOIN " . DB_PREFIX . "product p ON scp.product_id = p.product_id WHERE store_category_id = '". $store_category_id ."'");

		return $query->rows;
	}

	public function getNotCategoryProducts($store_id, $store_category_id, $page = 0) {
		$startNo = $page * 10;

		$query = $this->db->query("SELECT p.*, (SELECT pd.name FROM " . DB_PREFIX . "product_description pd WHERE pd.product_id = p.product_id) AS name FROM " . DB_PREFIX . "product p WHERE p.product_id NOT IN (SELECT product_id FROM ". DB_PREFIX . "store_category_product WHERE store_category_id = '". $store_category_id ."') AND store_id = '". $store_id . "' LIMIT 10 OFFSET ".$startNo);

		return $query->rows;
	}

	public function getNotCategoryProductsTotal($store_id, $store_category_id) {

		$query = $this->db->query("SELECT COUNT(DISTINCT p.product_id) AS total FROM " . DB_PREFIX . "product p WHERE p.product_id NOT IN (SELECT product_id FROM ". DB_PREFIX . "store_category_product WHERE store_category_id = '". $store_category_id ."') AND store_id = '". $store_id ."'");

		return $query->row['total'];
	}

	public function addCategoryProduct($store_category_id, $product_id) {

		//avoid duplicate
		$query = $this->db->query("SELECT * FROM ". DB_PREFIX ."store_category_product WHERE store_category_id='".$store_category_id."' AND product_id='". $product_id ."'");

		if (empty($query->row)) {
			$this->db->query("INSERT INTO ". DB_PREFIX ."store_category_product SET store_category_id='".$store_category_id."', product_id='". $product_id ."'");
		}
	}

	public function deleteCategoryProduct($store_category_id, $product_id) {

		$this->db->query("DELETE FROM ". DB_PREFIX ."store_category_product WHERE store_category_id='".$store_category_id."' AND product_id='". $product_id ."'");
		
	}

}