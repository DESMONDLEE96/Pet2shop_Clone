<?php
class ModelStoreStore extends Model {
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

	public function getStores($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "store WHERE store_id > 0";

		if (!empty($data['filter_name'])) {
			$sql .= " AND name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}
		if (isset($data['filter_status']) && $data['filter_status'] !== '') {
			$sql .= " AND status = '" . (int)$data['filter_status'] . "'";
		}
		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getStore($store_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "store WHERE store_id = '" . (int)$store_id . "'");

		return $query->row;
	}

	public function getStoreBySellerId($seller_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "store WHERE seller_id = '" . (int)$seller_id . "'");

		return $query->row;
	}

	public function getProducts($data = array()) {
		$sql = "SELECT *, (SELECT s.name FROM ". DB_PREFIX ."store s WHERE s.store_id = p.store_id) AS store_name FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		if (!empty($data['filter_name'])) {
			$sql .= " AND pd.name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}

		if (!empty($data['filter_model'])) {
			$sql .= " AND p.model LIKE '" . $this->db->escape($data['filter_model']) . "%'";
		}

		if (!empty($data['filter_price'])) {
			$sql .= " AND p.price LIKE '" . $this->db->escape($data['filter_price']) . "%'";
		}

		if (isset($data['filter_quantity']) && $data['filter_quantity'] !== '') {
			$sql .= " AND p.quantity = '" . (int)$data['filter_quantity'] . "'";
		}

		if (isset($data['filter_status']) && $data['filter_status'] !== '') {
			$sql .= " AND p.status = '" . (int)$data['filter_status'] . "'";
		}

		if (isset($data['store_id']) && $data['store_id'] !== '') {
			$sql .= " AND p.store_id = '". (int)$data['store_id'] . "'";
		}
		else if (isset($data['product_type']) && $data['product_type'] == 'vendor') {
			$sql .= " AND p.store_id != 0";
		}

		$sql .= " GROUP BY p.product_id";

		$sort_data = array(
			'pd.name',
			'p.model',
			'p.price',
			'p.quantity',
			'p.status',
			'p.sort_order',
			'p.store_id'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY pd.name";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

}