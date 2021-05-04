<?php
class ControllerCheckoutCheckout extends Controller {
	public function index() {
		if (!$this->customer->isLogged()) {
			$this->response->redirect($this->url->link('account/login'));
		}

		// Validate cart has products and has stock.
		if ((!$this->cart->hasProducts($this->session->data['checkout_cart_ids']) && empty($this->session->data['vouchers'])) || (!$this->cart->hasStock($this->session->data['checkout_cart_ids']) && !$this->config->get('config_stock_checkout')) || !isset($this->session->data['checkout_cart_ids']) || empty($this->session->data['checkout_cart_ids'])) {
			$this->response->redirect($this->url->link('checkout/cart'));
		}

		// Validate minimum quantity requirements.
		$products = $this->cart->getProducts($this->session->data['checkout_cart_ids']);

		$stores = array();

		foreach ($products as $product) {
			$product_total = 0;

			foreach ($products as $product_2) {
				if ($product_2['product_id'] == $product['product_id']) {
					$product_total += $product_2['quantity'];
				}
			}

			// if ($product['image']) {
			// 	$image = $this->model_tool_image->resize($product['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_height'));
			// } else {
			// 	$image = '';
			// }

			if ($product['minimum'] > $product_total) {
				$this->response->redirect($this->url->link('checkout/cart'));
			}

			// Display prices
			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$unit_price = $product['price'];
				
				$price = $this->currency->format($unit_price, $this->session->data['currency']);
				$total = $this->currency->format($unit_price * $product['quantity'], $this->session->data['currency']);

				//$total_price+= ($unit_price * $product['quantity']);
			} else {
				$price = false;
				$total = false;
			}

			if (array_search($product['store_id'], $stores) === false) { //will return key, so if 0 will equal to == false
				$stores[] = $product['store_id'];
			}

			$data['products'][] = array(
				'cart_id'   => $product['cart_id'],
				'store_id'	=> $product['store_id'],
				'thumb'     => $product['image'],
				'name'      => $product['name'],
				'model'     => $product['model'],
				'variation'=> $product['variation'],
				'weight'	=> $product['weight'],
				'quantity'  => $product['quantity'],
				'stock'     => $product['stock'] ? true : !(!$this->config->get('config_stock_checkout') || $this->config->get('config_stock_warning')),
				'reward'    => ($product['reward'] ? sprintf($this->language->get('text_points'), $product['reward']) : ''),
				'price'     => $price,
				'total'		=> $total,
				'href'      => $this->url->link('product/product', 'product_id=' . $product['product_id']),
				'unit_price'	=> $unit_price,
				'total_base_price'	=> (float) $unit_price * $product['quantity']
			);
		}

		$this->load->language('checkout/checkout');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js');
		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js');
		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js');
		$this->document->addStyle('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css');

		// Required by klarna
		if ($this->config->get('payment_klarna_account') || $this->config->get('payment_klarna_invoice')) {
			$this->document->addScript('http://cdn.klarna.com/public/kitt/toc/v1.0/js/klarna.terms.min.js');
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_cart'),
			'href' => $this->url->link('checkout/cart')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('checkout/checkout', '', true)
		);

		$data['text_checkout_option'] = sprintf($this->language->get('text_checkout_option'), 1);
		$data['text_checkout_account'] = sprintf($this->language->get('text_checkout_account'), 2);
		$data['text_checkout_payment_address'] = sprintf($this->language->get('text_checkout_payment_address'), 2);
		$data['text_checkout_shipping_address'] = sprintf($this->language->get('text_checkout_shipping_address'), 3);
		$data['text_checkout_shipping_method'] = sprintf($this->language->get('text_checkout_shipping_method'), 4);
		
		if ($this->cart->hasShipping()) {
			$data['text_checkout_payment_method'] = sprintf($this->language->get('text_checkout_payment_method'), 5);
			$data['text_checkout_confirm'] = sprintf($this->language->get('text_checkout_confirm'), 6);
		} else {
			$data['text_checkout_payment_method'] = sprintf($this->language->get('text_checkout_payment_method'), 3);
			$data['text_checkout_confirm'] = sprintf($this->language->get('text_checkout_confirm'), 4);	
		}

		if (isset($this->session->data['error'])) {
			$data['error_warning'] = $this->session->data['error'];
			unset($this->session->data['error']);
		} else {
			$data['error_warning'] = '';
		}

		$data['shipping_required'] = $this->cart->hasShipping($this->session->data['checkout_cart_ids']);

		$this->load->model('account/address');
		$data['addresses'] = $this->model_account_address->getAddresses();

		$this->session->data['shipping_addresses'] = $data['addresses'];

		$data['logged'] = $this->customer->isLogged();
		if (!empty($this->customer->isLogged())) {
			$data['default_address_id'] = $this->customer->getAddressId();
		}

		if (isset($this->session->data['account'])) {
			$data['account'] = $this->session->data['account'];
		} else {
			$data['account'] = '';
		}

		$this->load->model('localisation/country');
		$data['countries'] = $this->model_localisation_country->getCountries();

		$tmp_data = array();
		$tmp_data['shipping_details'] = $this->load->controller('checkout/shipping_address');
		//$tmp_data['shipping_method'] = $this->load->controller('checkout/shipping_method');
		$tmp_data['payment_details'] = $this->load->controller('checkout/payment_address');
		$tmp_data['payment_method'] = $this->load->controller('checkout/payment_method');

		$data['has_shipping_address'] = 0;
		if ($this->session->data['shipping_address'] != false && is_array($this->session->data['shipping_address'])) {
			$data['has_shipping_address'] = 1;
		}

		foreach($tmp_data as $t) {
			foreach($t as $k => $v) {
				$data[$k] = $v;
			}
		}

		$grand_total_price = 0;
		$this->load->model('store/store');
		$this->load->model('localisation/shipping');
		//get store information, and shipping methods for the store

		foreach($stores as $s) {
			if ($s == 0) {
				$data['stores'][$s] = array(
					'store_id' => 0,
					'name'     => $this->config->get('config_name'),
				);
			} else {
				$data['stores'][$s] = $this->model_store_store->getStore($s);
			}

			$courier = array();
			if (isset($this->session->data['shipping_address']) && !empty($this->session->data['shipping_address'])) {
				$courier = $this->model_localisation_shipping->getShippingCouriers($this->session->data['shipping_address']['zone_id'], $this->session->data['shipping_address']['country_id'], $s);
			}
	
			$total_weight = 0;
			$total_item_price = 0;
			foreach($data['products'] as $p) {
				if ($p['store_id'] == $s) {
					$total_weight+= $p['weight'];
					$total_item_price+= $p['total_base_price'];
				}
			}

			$data['stores'][$s]['total_weight'] = $p['weight'];

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
					'text'		=> $this->currency->format($tmp_wp, $this->session->data['currency'])

				);
			}

			$data['stores'][$s]['shipping_methods'] = $method_data;

			$data['shipping_methods'][$s]= $method_data;


			$default_shipping = "";
			$ship_price = 0;
			//find cheaper shipping method as default
			foreach($method_data as $sm) {
				if (empty($default_shipping)) {
					$default_shipping = $sm;
					$ship_price = $sm['cost'];
				} else {
					if ($sm['cost'] < $ship_price) {
						$default_shipping = $sm;
						$ship_price = $sm['cost'];
					}
				}
			}

			$total_price = $total_item_price + $ship_price;
			$data['stores'][$s]['total_item_price'] = $total_item_price;
			$data['stores'][$s]['total_price'] = $total_price;
			$data['stores'][$s]['default_shipping'] = $default_shipping;
			$data['stores'][$s]['ship_price'] = $ship_price;
			$data['stores'][$s]['total_price_with_currency'] = $this->currency->format($total_price, $this->session->data['currency']);
			$grand_total_price+= $total_price;
		}

		//$data['default_shipping'] = $default_shipping;
		//$this->session->data['shipping_method'] = $default_shipping;
		$data['shipping_method_modal'] = $this->load->view('checkout/shipping_method', $data);
		$data['currency_symbol_left'] = $this->currency->getSymbolLeft($this->session->data['currency']);

		$data['new_shipping_address_modal'] = $this->load->view('checkout/shipping_address', $data);
		//$data['total_price_with_currency'] = $this->currency->format($total_price, $this->session->data['currency']);
		$data['grand_total_price_with_currency'] = $this->currency->format($grand_total_price, $this->session->data['currency']);
		$data['grand_total_price'] = $grand_total_price;

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('checkout/checkout', $data));
	}

	public function country() {
		$json = array();

		$this->load->model('localisation/country');

		$country_info = $this->model_localisation_country->getCountry($this->request->get['country_id']);

		if ($country_info) {
			$this->load->model('localisation/zone');

			$json = array(
				'country_id'        => $country_info['country_id'],
				'name'              => $country_info['name'],
				'iso_code_2'        => $country_info['iso_code_2'],
				'iso_code_3'        => $country_info['iso_code_3'],
				'address_format'    => $country_info['address_format'],
				'postcode_required' => $country_info['postcode_required'],
				'zone'              => $this->model_localisation_zone->getZonesByCountryId($this->request->get['country_id']),
				'status'            => $country_info['status']
			);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function customfield() {
		$json = array();

		$this->load->model('account/custom_field');

		// Customer Group
		if (isset($this->request->get['customer_group_id']) && is_array($this->config->get('config_customer_group_display')) && in_array($this->request->get['customer_group_id'], $this->config->get('config_customer_group_display'))) {
			$customer_group_id = $this->request->get['customer_group_id'];
		} else {
			$customer_group_id = $this->config->get('config_customer_group_id');
		}

		$custom_fields = $this->model_account_custom_field->getCustomFields($customer_group_id);

		foreach ($custom_fields as $custom_field) {
			$json[] = array(
				'custom_field_id' => $custom_field['custom_field_id'],
				'required'        => $custom_field['required']
			);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function placeOrder() {
		$json = array('error' => array());
		$this->load->language('checkout/checkout');

		$input = $this->request->post;
		$json['input'] = $input;

		$store_shipping_details = json_decode(str_replace('&quot;', '"', $input['store']), true); // for double quote failure

		//check paymentMethod
		$tmpArr = array();
		foreach($this->session->data['payment_methods'] as $k => $v) {
			array_push($tmpArr, $k);
		}
		if (empty($input['paymentMethod']) || !in_array($input['paymentMethod'], $tmpArr) ) {
			$json['error']['paymentMethod'] = "Please choose a Payment Method";
		}

		//check shipping Address Id
		$this->load->model('account/address');
		if (!is_numeric($input['shippingAddressId'])) {
			$json['error']['shippingAddress'] = "Invalid Address";
		} else {
			$this->session->data['shipping_address'] = $this->session->data['shipping_addresses'][$input['shippingAddressId']];
		}

		//check every store has shipping
		foreach($store_shipping_details as $k => $ssd) {
			if (!isset($ssd['shipping_courier_id'])) {
				$json['error']['shipping'] = "Something wrong with Shipping Method";
			} else { //set 0 as weight
				$store_shipping_details[$k]['total_weight'] = 0;
				$store_shipping_details[$k]['products'] = array();
			}
		}

		$coupon = '';
		//if has coupon, check coupon
		if (!empty($input['coupon'])) {
			if ($input['coupon']['code']) {
				$this->load->model('extension/total/coupon');
				$coupon = $this->model_extension_total_coupon->getCoupon($input['coupon']['code']);

				if (!$coupon) {
					$json['error']['coupon'] = "Coupon has fully redeemed or expired";	
				}
			} else {
				$json['error']['coupon'] = "Invalid coupon";
			}
		}

		//if got input continue
		if (empty($json['error'])) {

			$redirect = '';

			// Validate minimum quantity requirements.
			$products = $this->cart->getProducts($this->session->data['checkout_cart_ids']);
			$total_product_price = 0;
			foreach ($products as $product) {
				$product_total = 0;
				if (!isset($store_shipping_details[$product['store_id']])) { //check whether the product store is in the store details, for safety
					$redirect = $this->url->link('checkout/cart');
					break;
				}

				$total_product_price+= $product['price'] * $product['quantity'];
				$store_shipping_details[$product['store_id']]['total_weight']+= $product['weight'];

				foreach ($products as $product_2) {
					if ($product_2['product_id'] == $product['product_id']) {
						$product_total += $product_2['quantity'];
					}
				}

				if ($product['minimum'] > $product_total) {
					$redirect = $this->url->link('checkout/cart');

					break;
				}
			}
			
			// Validate cart has products and has stock.
			if ((!$this->cart->hasProducts($this->session->data['checkout_cart_ids']) && empty($this->session->data['vouchers'])) || (!$this->cart->hasStock($this->session->data['checkout_cart_ids']) && !$this->config->get('config_stock_checkout'))) {
				$redirect = $this->url->link('checkout/cart');
			}

			if (!$redirect) {
				$order_data = array();
				$total_shipping_price = 0;

				//get different shipping price for each store
				$this->load->model('localisation/shipping');
				foreach($store_shipping_details as $kd => $ssd) {
					$courier = $this->model_localisation_shipping->getCourierByIdAndAddress($ssd['shipping_courier_id'], $this->session->data['shipping_address']['zone_id'], $this->session->data['shipping_address']['country_id']);
					$tmp_wp = 0;
					$ws_array = (array) json_decode($courier['weight_setting']);
					foreach($ws_array as $k => $v) {
						if ($ssd['total_weight'] == $k) {
							$tmp_wp = $v;
							break;
						} 
						else if ($ssd['total_weight'] < $k) {
							$tmp_wp = $v;
							break;
						}
						$tmp_wp = $v;
					}
					$store_shipping_details[$kd]['shipping_price'] = $tmp_wp;
					$total_shipping_price+= $tmp_wp;
				}

				//put product into stores
				foreach ($this->cart->getProducts($this->session->data['checkout_cart_ids']) as $product) {
					foreach($store_shipping_details as $k => $ssd) {
						$tmp_products = array();
						if ($ssd['store_id'] == $product['store_id']) {
							$store_shipping_details[$k]['products'][] = array(
								'product_id' => $product['product_id'],
								'name'       => $product['name'],
								'model'      => $product['model'],
								'variation'  => $product['variation'],
								'quantity'   => $product['quantity'],
								'price'      => $product['price'],
								'total'      => $product['total'],
								'reward'     => $product['reward'],
							);
						}
					}
				}

				$order_data['store_shipping_details'] = $store_shipping_details;
	 
				$this->load->language('checkout/checkout');

				$order_data['invoice_prefix'] = $this->config->get('config_invoice_prefix');
				$order_data['store_id'] = $this->config->get('config_store_id');
				$order_data['store_name'] = $this->config->get('config_name');
	
				if ($order_data['store_id']) {
					$order_data['store_url'] = $this->config->get('config_url');
				} else {
					if ($this->request->server['HTTPS']) {
						$order_data['store_url'] = HTTPS_SERVER;
					} else {
						$order_data['store_url'] = HTTP_SERVER;
					}
				}
				
				$this->load->model('account/customer');
	
				if ($this->customer->isLogged()) {
					$customer_info = $this->model_account_customer->getCustomer($this->customer->getId());
	
					$order_data['customer_id'] = $this->customer->getId();
					$order_data['customer_group_id'] = $customer_info['customer_group_id'];
					$order_data['firstname'] = $customer_info['firstname'];
					$order_data['lastname'] = $customer_info['lastname'];
					$order_data['email'] = $customer_info['email'];
					$order_data['telephone'] = $customer_info['telephone'];
					$order_data['custom_field'] = json_decode($customer_info['custom_field'], true);
				} elseif (isset($this->session->data['guest'])) {
					$order_data['customer_id'] = 0;
					$order_data['customer_group_id'] = $this->session->data['guest']['customer_group_id'];
					$order_data['firstname'] = $this->session->data['guest']['firstname'];
					$order_data['lastname'] = $this->session->data['guest']['lastname'];
					$order_data['email'] = $this->session->data['guest']['email'];
					$order_data['telephone'] = $this->session->data['guest']['telephone'];
					$order_data['custom_field'] = $this->session->data['guest']['custom_field'];
				}
	
				$order_data['payment_firstname'] = $this->session->data['shipping_address']['firstname'];
				$order_data['payment_lastname'] = $this->session->data['shipping_address']['lastname'];
				$order_data['payment_company'] = $this->session->data['shipping_address']['company'];
				$order_data['payment_address_1'] = $this->session->data['shipping_address']['address_1'];
				$order_data['payment_address_2'] = $this->session->data['shipping_address']['address_2'];
				$order_data['payment_city'] = $this->session->data['shipping_address']['city'];
				$order_data['payment_postcode'] = $this->session->data['shipping_address']['postcode'];
				$order_data['payment_zone'] = $this->session->data['shipping_address']['zone'];
				$order_data['payment_zone_id'] = $this->session->data['shipping_address']['zone_id'];
				$order_data['payment_country'] = $this->session->data['shipping_address']['country'];
				$order_data['payment_country_id'] = $this->session->data['shipping_address']['country_id'];
				$order_data['payment_address_format'] = $this->session->data['shipping_address']['address_format'];
				$order_data['payment_custom_field'] = (isset($this->session->data['shipping_address']['custom_field']) ? $this->session->data['shipping_address']['custom_field'] : array());
	
				$order_data['payment_method'] = $this->session->data['payment_methods'][$input['paymentMethod']]['title'];
				$order_data['payment_code'] = $this->session->data['payment_methods'][$input['paymentMethod']]['code'];
	
				if ($this->cart->hasShipping($this->session->data['checkout_cart_ids'])) {
					$order_data['shipping_firstname'] = $this->session->data['shipping_address']['firstname'];
					$order_data['shipping_lastname'] = $this->session->data['shipping_address']['lastname'];
					$order_data['shipping_company'] = $this->session->data['shipping_address']['company'];
					$order_data['shipping_address_1'] = $this->session->data['shipping_address']['address_1'];
					$order_data['shipping_address_2'] = $this->session->data['shipping_address']['address_2'];
					$order_data['shipping_city'] = $this->session->data['shipping_address']['city'];
					$order_data['shipping_postcode'] = $this->session->data['shipping_address']['postcode'];
					$order_data['shipping_zone'] = $this->session->data['shipping_address']['zone'];
					$order_data['shipping_zone_id'] = $this->session->data['shipping_address']['zone_id'];
					$order_data['shipping_country'] = $this->session->data['shipping_address']['country'];
					$order_data['shipping_country_id'] = $this->session->data['shipping_address']['country_id'];
					$order_data['shipping_address_format'] = $this->session->data['shipping_address']['address_format'];
					$order_data['shipping_custom_field'] = (isset($this->session->data['shipping_address']['custom_field']) ? $this->session->data['shipping_address']['custom_field'] : array());
	
				} else {
					$order_data['shipping_firstname'] = '';
					$order_data['shipping_lastname'] = '';
					$order_data['shipping_company'] = '';
					$order_data['shipping_address_1'] = '';
					$order_data['shipping_address_2'] = '';
					$order_data['shipping_city'] = '';
					$order_data['shipping_postcode'] = '';
					$order_data['shipping_zone'] = '';
					$order_data['shipping_zone_id'] = '';
					$order_data['shipping_country'] = '';
					$order_data['shipping_country_id'] = '';
					$order_data['shipping_address_format'] = '';
					$order_data['shipping_custom_field'] = array();
					$order_data['shipping_method'] = '';
					$order_data['shipping_code'] = '';
				}

				$order_data['comment'] = "";
				$order_data['product_total'] = $total_product_price;
				$order_data['shipping_total'] = $total_shipping_price;
				$grand_total = $total_product_price + $total_shipping_price; //total price for this order
				$discount = 0;
				if ($coupon) {
					//calculate coupon max amount
					if ($grand_total >= $coupon['total']) {//double check its valid
						if ($coupon['type'] == 'P') {
							$discount = $grand_total * ($coupon['discount']/100);
						} else if ($coupon['type'] == 'F') {
							$discount = $coupon['discount'];
						}

						$discount = !empty($coupon['max_discount']) && $discount > $coupon['max_discount'] ? $coupon['max_discount'] : $discount;
					} 
				}
				$order_data['discount_total'] = $discount;
				$order_data['coupon_id'] = !empty($coupon) ? $coupon['coupon_id'] : 0;

				$order_data['total'] = $grand_total - $discount;
	
				//extra rubbish
				$order_data['affiliate_id'] = 0;
				$order_data['commission'] = 0;
				$order_data['marketing_id'] = 0;
				$order_data['tracking'] = '';
	
				$order_data['language_id'] = $this->config->get('config_language_id');
				$order_data['currency_id'] = $this->currency->getId($this->session->data['currency']);
				$order_data['currency_code'] = $this->session->data['currency'];
				$order_data['currency_value'] = $this->currency->getValue($this->session->data['currency']);
				$order_data['ip'] = $this->request->server['REMOTE_ADDR'];
	
				if (!empty($this->request->server['HTTP_X_FORWARDED_FOR'])) {
					$order_data['forwarded_ip'] = $this->request->server['HTTP_X_FORWARDED_FOR'];
				} elseif (!empty($this->request->server['HTTP_CLIENT_IP'])) {
					$order_data['forwarded_ip'] = $this->request->server['HTTP_CLIENT_IP'];
				} else {
					$order_data['forwarded_ip'] = '';
				}
	
				if (isset($this->request->server['HTTP_USER_AGENT'])) {
					$order_data['user_agent'] = $this->request->server['HTTP_USER_AGENT'];
				} else {
					$order_data['user_agent'] = '';
				}
	
				if (isset($this->request->server['HTTP_ACCEPT_LANGUAGE'])) {
					$order_data['accept_language'] = $this->request->server['HTTP_ACCEPT_LANGUAGE'];
				} else {
					$order_data['accept_language'] = '';
				}
	
				$this->load->model('checkout/order');
				
				$addOrderId = $this->model_checkout_order->addOrder($order_data);

				if (!empty($addOrderId)) {
					$this->session->data['order_id'] = $addOrderId;

					$json['redirect'] = $this->url->link('checkout/success&order_id='.$addOrderId);

					foreach($this->session->data['checkout_cart_ids'] as $cid) {
						$this->cart->remove($cid);
					}

					unset($this->session->data['checkout_cart_ids']);
					unset($this->session->data['shipping_address']);
					unset($this->session->data['payment_methods']);
				} 
			} else {
				$json['redirect'] = $redirect;
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function coupon() {
		$json = array();
		$this->load->language('checkout/checkout');
		$this->load->model('extension/total/coupon');

		if (!empty($this->request->post['coupon'])) {
			$coupon = $this->model_extension_total_coupon->getCoupon($this->request->post['coupon']);
			
			if ($coupon) {
				$json['coupon'] = array(
					'name'          => $coupon['name'],
					'code'			=> $coupon['code'],
					'type'          => $coupon['type'],
					'discount'      => $coupon['discount'],
					'max_discount'	=> $coupon['max_discount'],
					'shipping'      => $coupon['shipping'],
					'total'         => $coupon['total'],	
				);
			} else {
				$json['error'] = 'Coupon not valid';	
			}
		} else {
			$json['error'] = 'No coupon keyed in';
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}