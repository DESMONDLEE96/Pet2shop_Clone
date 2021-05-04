<?php
class ModelStoreStore extends Model {
	public function getStore($store_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "store WHERE store_id = '". $store_id ."'");

		return $query->row;
	}

	public function getStoreCategory($store_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "store_category WHERE store_id = '". $store_id ."'");

		return $query->rows;
	}
}