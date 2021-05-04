<?php
class ModelSellerSeller extends Model {

	public function getSeller($seller_id) {
		$query = $this->db->query("SELECT a.*, b.* FROM ". DB_PREFIX ."seller a, ". DB_PREFIX ."customer b WHERE a.customer_id = b.customer_id AND a.seller_id = '". $seller_id ."'");

		return $query->row;
	}

	public function getSellerByEmail($email) {
		$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "seller` WHERE LCASE(email) = '" . $this->db->escape(utf8_strtolower($email)) . "'");

		return $query->row;
	}

}