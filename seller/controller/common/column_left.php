<?php
class ControllerCommonColumnLeft extends Controller {
	public function index() {
		if (isset($this->request->get['user_token']) && isset($this->session->data['user_token']) && ($this->request->get['user_token'] == $this->session->data['user_token'])) {
			$this->load->language('common/column_left');

			// Create a 3 level menu array
			// Level 2 can not have children
			
			// Menu
			// $data['menus'][] = array(
			// 	'id'       => 'menu-dashboard',
			// 	'icon'	   => 'fa-dashboard',
			// 	'name'	   => $this->language->get('text_dashboard'),
			// 	'href'     => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true),
			// 	'children' => array()
			// );
			$data['menus'][] = array(
				'id'       => 'menu-store',
				'icon'	   => 'fa-home',
				'name'	   => $this->language->get('text_store'),
				'href'     => $this->url->link('store/store', 'user_token=' . $this->session->data['user_token'], true),
				'children' => array()
			);
			
			// Catalog
			$catalog = array();

			if ($this->seller->getStoreId() != 0) {
				$catalog[] = array(
					'name'	   => $this->language->get('text_store_category'),
					'href'     => $this->url->link('catalog/store_category', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			if ($this->seller->getStoreId() != 0) { 

				$catalog[] = array(
					'name'	   => $this->language->get('text_product'),
					'href'     => $this->url->link('catalog/product', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()		
				);
	
				// $catalog[] = array(
				// 	'name'	   => $this->language->get('text_review'),
				// 	'href'     => $this->url->link('catalog/review', 'user_token=' . $this->session->data['user_token'], true),
				// 	'children' => array()		
				// );
				
				if ($catalog) {
					$data['menus'][] = array(
						'id'       => 'menu-catalog',
						'icon'	   => 'fa-tags', 
						'name'	   => $this->language->get('text_catalog'),
						'href'     => '',
						'children' => $catalog
					);		
				}
				
				// Sales
				$sale = array();
	
				$sale[] = array(
					'name'	   => $this->language->get('text_order'),
					'href'     => $this->url->link('sale/order', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()		
				);
				
				$sale[] = array(
					'name'	   => $this->language->get('text_return'),
					'href'     => $this->url->link('sale/return', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()		
				);	
				
				if ($sale) {
					$data['menus'][] = array(
						'id'       => 'menu-sale',
						'icon'	   => 'fa-shopping-cart', 
						'name'	   => $this->language->get('text_sale'),
						'href'     => '',
						'children' => $sale
					);
				}
				
				// Logistic
				$logistic = array();
	
				$logistic[] = array(
					'name'	   => $this->language->get('text_shipping_courier'),
					'href'     => $this->url->link('logistic/shipping_courier', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
				
				$logistic[] = array(
					'name'	   => $this->language->get('text_shipping_location'),
					'href'     => $this->url->link('logistic/shipping_location', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);		
				
				if ($logistic) {
					$data['menus'][] = array(
						'id'       => 'menu-logistic',
						'icon'	   => 'fa-truck', 
						'name'	   => $this->language->get('text_logistic'),
						'href'     => '',
						'children' => $logistic
					);	
				}
			}
			
			// Stats
			$this->load->model('sale/order');
	
			$order_total = $this->model_sale_order->getTotalOrders();
			
			$this->load->model('report/statistics');
			
			$complete_total = $this->model_report_statistics->getValue('order_complete');
			
			if ((float)$complete_total && $order_total) {
				$data['complete_status'] = round(($complete_total / $order_total) * 100);
			} else {
				$data['complete_status'] = 0;
			}

			$processing_total = $this->model_report_statistics->getValue('order_processing');
	
			if ((float)$processing_total && $order_total) {
				$data['processing_status'] = round(($processing_total / $order_total) * 100);
			} else {
				$data['processing_status'] = 0;
			}
	
			$other_total = $this->model_report_statistics->getValue('order_other');
	
			if ((float)$other_total && $order_total) {
				$data['other_status'] = round(($other_total / $order_total) * 100);
			} else {
				$data['other_status'] = 0;
			}

			return $this->load->view('common/column_left', $data);
		}
	}
}