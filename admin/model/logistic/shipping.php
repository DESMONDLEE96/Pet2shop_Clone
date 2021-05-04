<?php
class ModelLogisticShipping extends Model {
	public function addShippingCourier($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "shipping_courier SET shipping_courier_code = '" . $this->db->escape($data['shipping_courier_code']) . "', shipping_courier_name = '" . $this->db->escape($data['shipping_courier_name']) . "'");
		
		return $this->db->getLastId();
	}

	public function editShippingCourier($shippingCourierId, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "shipping_courier SET shipping_courier_code = '" . $this->db->escape($data['shipping_courier_code']) . "', shipping_courier_name = '" . $this->db->escape($data['shipping_courier_name']) . "' WHERE shipping_courier_id = '" . $shippingCourierId . "'");
	}

	public function deleteShippingCourier($shippingCourierId) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "shipping_courier WHERE shipping_courier_id = " . (int)$shippingCourierId);
	}

	public function getShippingCourier($shippingCourierId) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "shipping_courier WHERE shipping_courier_id = '" . (int)$shippingCourierId . "'");

		return $query->row;
	}

	public function getShippingCouriers($data = array()) {

		$sql = "SELECT * FROM " . DB_PREFIX . "shipping_courier";

		$sort_data = array(
			'shipping_courier_code',
			'shipping_courier_name',
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY shipping_courier_name";
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

	public function getTotalShippingCouriers() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "shipping_courier");

		return $query->row['total'];
	}

	public function addOrEditShippingLocation($data = array(), $shipping_location_id = 0) {
		$location = explode("-", $this->db->escape($data['location_name']));
		if ($location[0] == "country") {
			$country_id = $location[1];
			$geo_zone_id = "NULL";
		} else {
			$geo_zone_id = $location[1];
			$country_id = "NULL";
		}

		if ($shipping_location_id == 0) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "shipping_location SET shipping_courier_id = '" . $this->db->escape($data['shipping_courier_id']) . "', country_id = " . $country_id . ", geo_zone_id = " . $geo_zone_id . ", weight_setting = '" . $this->db->escape(html_entity_decode($data['weight_setting'])) ."', status='" .(int)$data['status']. "'");
		} else {
			$this->db->query("UPDATE " . DB_PREFIX . "shipping_location SET shipping_courier_id = '" . $this->db->escape($data['shipping_courier_id']) . "', country_id = " . $country_id . ", geo_zone_id = " . $geo_zone_id . ", weight_setting = '" . $this->db->escape(html_entity_decode($data['weight_setting'])) ."', status='" .(int)$data['status']. "' WHERE id = '" . (int)$shipping_location_id . "'");
		}

		
		
		return $this->db->getLastId();
	}

	public function getShippingLocation($shipping_location_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM ". DB_PREFIX ."shipping_location WHERE id ='" . $shipping_location_id . "'");

		// $res = $query->row;
		// if ($res['country_id'] !== NULL) {
		// 	$country = $this->db->query("SELECT DISTINCT name FROM ". DB_PREFIX ."country WHERE country_id ='" . (int)$res['country_id'] . "'");
		// 	$res['location_name'] = $country->row['name'];
		// }
		// else if ($res['geo_zone_id'] !== NULL) {
		// 	$geo_zone = $this->db->query("SELECT DISTINCT name FROM ". DB_PREFIX ."geo_zone WHERE geo_zone_id ='" . (int)$res['geo_zone_id'] . "'");
		// 	$res['location_name'] = $geo_zone->row['name'];
		// }
		// else {
		// 	$res['location_name'] = "";
		// }

		return $query->row;
	}

	public function getShippingLocations($data = array()) {
		$query = $this->db->query("SELECT a.*, b.* FROM ". DB_PREFIX . "shipping_location a, ". DB_PREFIX ."shipping_courier b WHERE a.shipping_courier_id = b.shipping_courier_id");
		$ship_loc = $query->rows;
		$geo_zone_ids = array();
		$country_ids = array();
		//geo zone priority is first, den only country
		foreach($ship_loc as $r) {
			if (!empty($r['geo_zone_id'])) {
				array_push($geo_zone_ids, $r['geo_zone_id']);
			}
			if (!empty($r['country_id'])) {
				array_push($country_ids, $r['country_id']);
			}
		}
		$geo_zone = array();
		$country = array();
		if (!empty($geo_zone_ids)) {
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "geo_zone WHERE geo_zone_id IN (". implode(',', $geo_zone_ids) .")");
			$geo_zone = $query->rows;
		}
		if (!empty($geo_zone)) {
			foreach($geo_zone as $g) {
				foreach($ship_loc as $k => $v) {
					if ($g['geo_zone_id'] == $v['geo_zone_id']) {
						$ship_loc[$k]['location_name'] = $g['name'];
					}
				}
			}
		}

		if (!empty($country_ids)) {
			$query = $this->db->query("SELECT country_id, name FROM " . DB_PREFIX . "country WHERE country_id IN (". implode(',', $country_ids) .")");
			$country = $query->rows;
		}

		if (!empty($country)) {
			foreach($country as $c) {
				foreach($ship_loc as $k => $v) {
					if ($c['country_id'] == $v['country_id']) {
						$ship_loc[$k]['location_name'] = $c['name'];
					}
				}
			}
		}

		return $ship_loc;
	}

	public function getTotalShippingLocations() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "shipping_location");

		return $query->row['total'];
	}

	public function getShippingLocationSelections() {
		//getcountry
		$countries = $this->db->query("SELECT * FROM " . DB_PREFIX . "country WHERE status = 1");

		//get geo zone
		$geo_zones = $this->db->query("SELECT * FROM " . DB_PREFIX . "geo_zone");
		
		return array("countries" => $countries->rows, "geo_zones" => $geo_zones->rows);
	}

	public function checkNotRepeatLocation($shipping_location_id, $shipping_courier_id, $location_name) {
		$location = explode("-", $this->db->escape($location_name));

		$sql = "SELECT DISTINCT * FROM " . DB_PREFIX . "shipping_location WHERE id <> ".$shipping_location_id. " AND shipping_courier_id = ". $shipping_courier_id;
		
		if ($location[0] == "country") {
			$sql.= " AND country_id = ". $location[1];
		} else {
			$sql.= " AND geo_zone_id = ". $location[1];
		}

		$res = $this->db->query($sql);

		if (!empty($res->row)) {
			return false;
		}
		
		return true;
	}
}