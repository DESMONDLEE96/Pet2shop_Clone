<?php
class ControllerCheckoutShippingMethod extends Controller {
	public function index() {
		$this->load->language('checkout/checkout');

		$data = array();

		$this->load->model('localisation/shipping');

		$courier = array();
		if (isset($this->session->data['shipping_address']) && !empty($this->session->data['shipping_address'])) {
			$courier =$this->model_localisation_shipping->getShippingCouriers($this->session->data['shipping_address']['zone_id'], $this->session->data['shipping_address']['country_id']);
		}

		$total_weight = 0;

		foreach($this->cart->getProducts($this->session->data['checkout_cart_ids']) as $p) {
			$total_weight+= $p['weight'];
		}

		$data['total_weight'] = $total_weight;
		$ship_cost = 0;
		//foreach($courier)
		//print_r($courier); exit();

		$method_data = array();

		foreach ($courier as $c) {
			$tmp_wp = 0;
			$ws_array = (array) json_decode($c['weight_setting']);
			foreach($ws_array as $k => $v) {
				if ($total_weight == $k) {
					$tmp_wp = $v;
					break;
				} 
				else if ($total_weight < $k) {
					$tmp_wp = $v;
					break;
				}
				$tmp_wp = $v;
			}

			$method_data[$c['shipping_courier_code']] = array(
				'shipping_courier_id' => $c['shipping_courier_id'],
				'code'      => $c['shipping_courier_code'],
				'title'		=> $c['shipping_courier_name'],
				'cost'		=> $tmp_wp,
				'text'		=> $this->currency->format($tmp_wp, $this->session->data['currency']),
				'tax_class_id'		=> 9,

			);
		}

		$this->session->data['shipping_methods'] = $method_data;

		if (empty($this->session->data['shipping_methods'])) {
			$data['error_warning'] = sprintf($this->language->get('error_no_shipping'), $this->url->link('information/contact'));
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['shipping_methods'])) {
			$data['shipping_methods'] = $this->session->data['shipping_methods'];
		} else {
			$data['shipping_methods'] = array();
		}

		if (isset($this->session->data['shipping_comment'])) {
			$data['shipping_comment'] = $this->session->data['shipping_comment'];
		} else {
			$data['shipping_comment'] = '';
		}
		
		return $data;
		//$this->response->setOutput($this->load->view('checkout/shipping_method', $data));
	}


	public function save() {
		$this->load->language('checkout/checkout');

		$json = array();

		// Validate if shipping is required. If not the customer should not have reached this page.
		if (!$this->cart->hasShipping()) {
			$json['redirect'] = $this->url->link('checkout/checkout', '', true);
		}

		// Validate if shipping address has been set.
		if (!isset($this->session->data['shipping_address'])) {
			$json['redirect'] = $this->url->link('checkout/checkout', '', true);
		}

		// Validate cart has products and has stock.
		if ((!$this->cart->hasProducts() && empty($this->session->data['vouchers'])) || (!$this->cart->hasStock() && !$this->config->get('config_stock_checkout'))) {
			$json['redirect'] = $this->url->link('checkout/cart');
		}

		// Validate minimum quantity requirements.
		$products = $this->cart->getProducts();

		foreach ($products as $product) {
			$product_total = 0;

			foreach ($products as $product_2) {
				if ($product_2['product_id'] == $product['product_id']) {
					$product_total += $product_2['quantity'];
				}
			}

			if ($product['minimum'] > $product_total) {
				$json['redirect'] = $this->url->link('checkout/cart');

				break;
			}
		}

		if (!isset($this->request->post['shipping_method'])) {
			$json['error']['warning'] = $this->language->get('error_shipping');
		} else {
			$shipping = explode('.', $this->request->post['shipping_method']);

			if (!isset($shipping[0]) || !isset($shipping[1]) || !isset($this->session->data['shipping_methods'][$shipping[0]]['quote'][$shipping[1]])) {
				$json['error']['warning'] = $this->language->get('error_shipping');
			}
		}

		if (!$json) {
			$this->session->data['shipping_method'] = $this->session->data['shipping_methods'][$shipping[0]]['quote'][$shipping[1]];

			$this->session->data['comment'] = strip_tags($this->request->post['comment']);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}