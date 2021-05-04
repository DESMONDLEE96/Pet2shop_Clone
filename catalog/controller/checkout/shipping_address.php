<?php
class ControllerCheckoutShippingAddress extends Controller {
	public function index() {
		$this->load->language('checkout/checkout');

		$this->session->data['shipping_address_id'] = $this->customer->getAddressId();
		$data['shipping_address_id'] = $this->session->data['shipping_address_id'];

		$this->session->data['shipping_address'] = $this->model_account_address->getAddress($data['shipping_address_id']);

		$this->session->data['shipping_address_country_id'] = $this->config->get('config_country_id');
		$data['shipping_address_country_id'] = $this->session->data['shipping_address_country_id'];

		return $data;
		
		//$this->response->setOutput($this->load->view('checkout/shipping_address', $data));
	}

	public function addNewAddress() {
		$this->load->language('checkout/checkout');
		
		$json = array();

		if ((utf8_strlen(trim($this->request->post['firstname'])) < 1) || (utf8_strlen(trim($this->request->post['firstname'])) > 32)) {
			$json['error']['firstname'] = $this->language->get('error_firstname');
		}

		if ((utf8_strlen(trim($this->request->post['lastname'])) < 1) || (utf8_strlen(trim($this->request->post['lastname'])) > 32)) {
			$json['error']['lastname'] = $this->language->get('error_lastname');
		}

		if ((utf8_strlen(trim($this->request->post['address_1'])) < 3) || (utf8_strlen(trim($this->request->post['address_1'])) > 128)) {
			$json['error']['address_1'] = $this->language->get('error_address_1');
		}

		if ((utf8_strlen(trim($this->request->post['city'])) < 2) || (utf8_strlen(trim($this->request->post['city'])) > 128)) {
			$json['error']['city'] = $this->language->get('error_city');
		}

		$this->load->model('localisation/country');

		$country_info = $this->model_localisation_country->getCountry($this->request->post['country_id']);

		if ($country_info && $country_info['postcode_required'] && (utf8_strlen(trim($this->request->post['postcode'])) < 2 || utf8_strlen(trim($this->request->post['postcode'])) > 10)) {
			$json['error']['postcode'] = $this->language->get('error_postcode');
		}

		if ($this->request->post['country_id'] == '') {
			$json['error']['country_id'] = $this->language->get('error_country');
		}

		if (!isset($this->request->post['zone_id']) || $this->request->post['zone_id'] == '' || !is_numeric($this->request->post['zone_id'])) {
			$json['error']['zone_id'] = $this->language->get('error_zone');
		}

		if (empty($json)) {
			$this->load->model('account/address');

			$address_id = $this->model_account_address->addAddress($this->customer->getId(), $this->request->post);

			$this->session->data['shipping_address'] = $this->model_account_address->getAddress($address_id);

			// If no default address ID set we use the last address
			if (!$this->customer->getAddressId()) {
				$this->load->model('account/customer');
				
				$this->model_account_customer->editAddressId($this->customer->getId(), $address_id);
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}