<?php
class ControllerCatalogStoreCategory extends Controller {
	private $error = array();

	public function index() {

		$this->load->language('catalog/store_category');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/store_category');

		$data = array();

		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/store_category', 'user_token=' . $this->session->data['user_token'], true)
		);

		$store_categories = $this->model_catalog_store_category->getStoreCategoryByStoreId($this->seller->getStoreId());
		foreach($store_categories as $k => $v) {
			$store_categories[$k]['edit'] = $this->url->link('catalog/store_category/edit', 'user_token=' . $this->session->data['user_token'] . '&store_category_id=' . $v['store_category_id'], true);
		}

		$data['store_categories'] = $store_categories;
		$data['store_id'] = $this->seller->getStoreId();

		$data['user_token'] = $this->session->data['user_token'];
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/store_category_list', $data));
	}

	public function edit() {
		$this->load->language('catalog/store_category');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/store_category');

		$data = array();
		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/store_category', 'user_token=' . $this->session->data['user_token'], true)
		);

		$category = $this->model_catalog_store_category->getStoreCategory($this->seller->getStoreId(), $this->request->get['store_category_id']);
		$products = $this->model_catalog_store_category->getStoreCategoryProducts($this->request->get['store_category_id']);

		$data['products'] = array();
		foreach($products as $p) {
			$data['products'][] = array(
				'product_id' => $p['product_id'],
				'name' => $p['name'],
				'image' => $p['image'],
				'price' => $p['price'],
				'status' => $p['status'],
				'date_added' => $p['date_added'],
				'quantity' => $p['quantity']
			);
 		}

		$data['store_category_id'] = $this->request->get['store_category_id'];
		$data['category_name'] = $category['category_name'];
		$data['status'] = $category['status'];

		$data['user_token'] = $this->session->data['user_token'];
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/store_category_form', $data));
	}

	public function add() {
		$json = array();
		$this->load->language('catalog/store_category');

		$json['error'] = '';
		if (!$this->seller->isLogged()) {
			$json['error'].= "Invalid Access \r\n";
		}

		if (empty($json['error'])) {
			$this->load->model('catalog/store_category');
			$category_name = trim($this->request->post['category_name']);

			//check category name
			if (!empty($category_name) && strlen($category_name) > 2) {

				$data = array(
					'category_name' => $category_name,
					'store_id' => $this->seller->getStoreId(),
				);
				//check is the name repeated
				$repeated = $this->model_catalog_store_category->checkStoreCategoryName($data); //check repeated category name
				if ($repeated) {
					$json['error'] = $this->language->get('error_name_repeated');
				} else {
					$this->model_catalog_store_category->addStoreCategory($data);
					$json['success'] = $this->language->get('text_added_new_category');
				}
			} else {
				$json['error'] = $this->language->get('error_category_name');
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function getNotCategoryProduct() {
		$json = array();
		$this->load->language('catalog/store_category');

		$json['error'] = ''; // start form empty

		if (!$this->seller->isLogged()) {
			$json['error'].= "Invalid Access \r\n";
		}

		if (empty($json['error'])) {
			$this->load->model('catalog/store_category');
			$store_category_id = $this->request->post['store_category_id'];

			$products = $this->model_catalog_store_category->getNotCategoryProducts($this->seller->getStoreId(), $store_category_id);
			$total = $this->model_catalog_store_category->getNotCategoryProductsTotal($this->seller->getStoreId(), $store_category_id);

			$json['products'] = $products;
			$json['total'] = $total;
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function addStoreCategoryProduct() {
		$json = array();
		$this->load->language('catalog/store_category');

		$json['error'] = ''; // start form empty

		if (!$this->seller->isLogged()) {
			$json['error'].= "Invalid Access \r\n";
		}

		$product_ids = $this->request->post['product_ids'];

		if (empty($json['error']) && !empty($product_ids)) {
			$this->load->model('catalog/store_category');

			foreach($product_ids as $p) {
				$this->model_catalog_store_category->addCategoryProduct($this->request->post['store_category_id'], $p);
			}

			$json['success'] = "Succesfully Added";
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function deleteStoreCategoryProduct() {
		$json = array();
		$this->load->language('catalog/store_category');

		$json['error'] = ''; // start form empty

		if (!$this->seller->isLogged()) {
			$json['error'].= "Invalid Access \r\n";
		}

		$product_ids = $this->request->post['product_ids'];

		if (empty($json['error']) && !empty($product_ids)) {
			$this->load->model('catalog/store_category');

			foreach($product_ids as $p) {
				$this->model_catalog_store_category->deleteCategoryProduct($this->request->post['store_category_id'], $p);
			}

			$json['success'] = "Succesfully Deleted";
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}