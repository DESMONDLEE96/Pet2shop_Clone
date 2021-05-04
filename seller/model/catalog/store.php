<?php
class ModelCatalogStore extends Model {
	public function saveStore($data) {
		//check is the seller already create the store before
		$store = $this->getStoreBySellerId($data['seller_id']);

		$img_query = isset($data['image']) && !empty($data['image']) ? ", image = '". $this->db->escape($data['image']) ."'" : '';

		if (!empty($store)) { //update
			$this->db->query("UPDATE " . DB_PREFIX . "store SET name = '" . $this->db->escape($data['name']) . "', description = '". $this->db->escape($data['description']) ."', address = '". $this->db->escape($data['address']) ."'".$img_query.", last_update = NOW() WHERE seller_id = '". (int)$data['seller_id'] . "'");
		} else { //add
			$this->db->query("INSERT INTO " . DB_PREFIX . "store SET name = '" . $this->db->escape($data['name']) . "', seller_id = '". (int)$data['seller_id'] ."', description = '". $this->db->escape($data['description']) ."', address = '". $this->db->escape($data['address']) ."'".$img_query.", created_date= NOW(), last_update = NOW()");
		}

		$store_id = $this->db->getLastId();

		return $store_id;
	}

	public function getStore($store_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "store WHERE store_id = '" . (int)$store_id . "'");

		return $query->row;
	}

	public function getStoreBySellerId($seller_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "store WHERE seller_id = '" . (int)$seller_id . "'");

		return $query->row;
	}

}