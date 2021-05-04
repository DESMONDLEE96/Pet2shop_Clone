<?php
class ModelLocalisationShipping extends Model {
	public function getShippingCouriers($zone_id, $country_id, $store_id) {
		//first need to check geo_zone contain this zone or not
		$query = $this->db->query("SELECT geo_zone_id FROM " . DB_PREFIX . "zone_to_geo_zone WHERE zone_id = '" . (int)$zone_id . "'");
		//if is in the geo_zone_Set
		if (!empty($query->rows)) {
			$ship_courier = $this->db->query("SELECT a.*, b.weight_setting, c.shipping_courier_code, c.shipping_courier_name FROM " . DB_PREFIX . "shipping_courier a, " . DB_PREFIX . "shipping_location b, " . DB_PREFIX . "shipping_courier c WHERE a.shipping_courier_id = b.shipping_courier_id AND a.shipping_courier_id = c.shipping_courier_id AND b.geo_zone_id = '" . (int)$query->row['geo_zone_id'] . "' AND b.status = 1 AND b.store_id ='". (int)$store_id ."'");			
		} 
		else {
			//if dont have just get by country
			$ship_courier = $this->db->query("SELECT a.*, b.weight_setting, c.shipping_courier_code, c.shipping_courier_name FROM " . DB_PREFIX . "shipping_courier a, " . DB_PREFIX . "shipping_location b, " . DB_PREFIX . "shipping_courier c WHERE a.shipping_courier_id = b.shipping_courier_id AND a.shipping_courier_id = c.shipping_courier_id AND b.country_id = '" . $country_id . "' AND b.status = 1 AND b.store_id ='". (int)$store_id ."'");
		}

		return $ship_courier->rows;
	}

	public function getCourierByIdAndAddress($courier_id, $zone_id, $country_id) { //same courier id can have multiple zone or country, so need this function
		$query = $this->db->query("SELECT geo_zone_id FROM " . DB_PREFIX . "zone_to_geo_zone WHERE zone_id = '" . (int)$zone_id . "'");
		//if is in the geo_zone_Set
		if (!empty($query->rows)) {
			$ship_courier = $this->db->query("SELECT a.*, b.weight_setting FROM " . DB_PREFIX . "shipping_courier a, " . DB_PREFIX . "shipping_location b WHERE a.shipping_courier_id = b.shipping_courier_id AND b.geo_zone_id = '" . (int)$query->row['geo_zone_id'] . "' AND b.status = 1 AND b.shipping_courier_id ='". (int)$courier_id ."'");			
		} 
		else {
			//if dont have just get by country
			$ship_courier = $this->db->query("SELECT a.*, b.weight_setting FROM " . DB_PREFIX . "shipping_courier a, " . DB_PREFIX . "shipping_location b WHERE a.shipping_courier_id = b.shipping_courier_id AND b.country_id = '" . $country_id . "' AND b.status = 1 AND b.shipping_courier_id ='". (int)$courier_id ."'");
		}

		return $ship_courier->row;
	}

	public function getCourier($courier_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "shipping_courier WHERE shipping_courier_id = '" . (int)$courier_id . "'");

		return $query->row;
	}

}