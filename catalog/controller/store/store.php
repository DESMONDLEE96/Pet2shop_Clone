<?php
class ControllerStoreStore extends Controller {
	public function index() {
		$this->load->language('store/store');

		$this->load->model('store/store');
		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		if (!isset($this->request->get['store_id'])) {
			$this->response->redirect($this->url->link('common/home'));
		}

		$store = $this->model_store_store->getStore($this->request->get['store_id']);

		if (empty($store)) {
			$this->response->redirect($this->url->link('common/home'));
		}

		$this->document->setTitle('Store: '.$store['name']);

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get($store['name']),
			'href' => $this->url->link('store/store&store_id='.$this->request->get['store_id'])
		);

		$data['store'] = $store;
		$store_category = $this->model_store_store->getStoreCategory($this->request->get['store_id']);
		foreach($store_category as $k => $v) {
			$store_category[$k]['link'] = $this->url->link('store/store&store_id='.$this->request->get['store_id'].'&store_category_id='.$v['store_category_id']);
			if(isset($this->request->get['store_category_id']) && $v['store_category_id'] == $this->request->get['store_category_id']) {
				$data['store_category_name'] = $v['category_name'];
			} else {
				$data['store_category_name'] = 'All Products';
			}
		}

		$data['store_category'] = $store_category;
		$data['current_url'] = $this->url->link('store/store&store_id='.$this->request->get['store_id']);

		$data['products'] = array();
		$filter = array('store_id' => $this->request->get['store_id']);
		if (isset($this->request->get['store_category_id'])) {
			$filter['store_category_id'] = $this->request->get['store_category_id'];
		}

		$products = $this->model_catalog_product->getProducts($filter);

		foreach ($products as $result) {
			if ($result['image']) {
				$image = $result['image'];
			} else {
				$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
			}

			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$price = $this->currency->format($result['price'], $this->session->data['currency']);
			} else {
				$price = false;
			}

			if ((float)$result['special']) {
				$special = $this->currency->format($result['special'], $this->session->data['currency']);
			} else {
				$special = false;
			}

			if ($this->config->get('config_review_status')) {
				$rating = (int)$result['rating'];
			} else {
				$rating = false;
			}

			$data['products'][] = array(
				'product_id'  => $result['product_id'],
				'thumb'       => $image,
				'name'        => $result['name'],
				'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
				'price'       => $price,
				'special'     => $special,
				'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
				'rating'      => $result['rating'],
				'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
			);
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('store/store', $data));
	}
}