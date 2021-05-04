<?php
namespace Cart;
class Seller {
	private $seller_id;
	private $username;
	private $store_id = 0;

	public function __construct($registry) {
		$this->db = $registry->get('db');
		$this->request = $registry->get('request');
		$this->session = $registry->get('session');

		if (isset($this->session->data['seller_id'])) {
			$seller_query = $this->db->query("SELECT a.*, b.* from " . DB_PREFIX . "seller a,  " . DB_PREFIX . "customer b WHERE a.customer_id = b.customer_id AND a.seller_id = '". (int)$this->session->data['seller_id']."'");

			if ($seller_query->num_rows) {
				$this->seller_id = $seller_query->row['seller_id'];
				$this->username = $seller_query->row['firstname']. ' ' .$seller_query->row['lastname'];

				//get store
				$store = $this->db->query("SELECT store_id FROM " . DB_PREFIX . "store WHERE seller_id = '". $this->seller_id ."'");
				if (!empty($store->row)) {
					$this->store_id = $store->row['store_id'];
				}

				$this->db->query("UPDATE " . DB_PREFIX . "seller SET ip = '" . $this->db->escape($this->request->server['REMOTE_ADDR']) . "' WHERE seller_id = '" . (int)$this->session->data['seller_id'] . "'");

			} else {
				$this->logout();
			}
		}
	}

	public function login($email, $password) {
		$customer_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE email = '" . $this->db->escape($email) . "' AND (password = SHA1(CONCAT(salt, SHA1(CONCAT(salt, SHA1('" . $this->db->escape($password) . "'))))) OR password = '" . $this->db->escape(md5($password)) . "') AND status = '1'");

		if ($customer_query->num_rows) {

			$seller_query = $this->db->query("SELECT a.*, b.* from " . DB_PREFIX . "seller a,  " . DB_PREFIX . "customer b WHERE a.customer_id = b.customer_id AND a.customer_id = '". (int)$this->db->escape($customer_query->row['customer_id'])."'");

			if (empty($seller_query->num_rows)) { //new seller
				$this->db->query("INSERT INTO " . DB_PREFIX . "seller SET customer_id = '". (int) $customer_query->row['customer_id'] ."', ip = '". $this->db->escape($this->request->server['REMOTE_ADDR']) ."', status = 1, last_login = NOW(), date_added = NOW()");
				$seller_id = $this->db->getLastId();

				$seller_query = $this->db->query("SELECT a.*, b.* from " . DB_PREFIX . "seller a,  " . DB_PREFIX . "customer b WHERE a.customer_id = b.customer_id AND a.seller_id = '". (int)$seller_id."'");
			}

			$this->session->data['seller_id'] = $seller_query->row['seller_id'];

			return true;
		} else {
			return false;
		}
	}

	public function logout() {
		unset($this->session->data['seller_id']);

		$this->seller_id = '';
		$this->username = '';
	}

	public function isLogged() {
		return $this->seller_id;
	}

	public function getId() {
		return $this->seller_id;
	}

	public function getUserName() {
		return $this->username;
	}

	public function getGroupId() {
		return $this->user_group_id;
	}

	public function getStoreId() {
		return $this->store_id;
	}
}