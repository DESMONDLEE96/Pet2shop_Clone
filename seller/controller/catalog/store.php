<?php
class ControllerCatalogStore extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('catalog/store');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/store');

		$data = array();

		$store = $this->model_catalog_store->getStoreBySellerId($this->seller->getId());
	
		if (!empty($store)) {
			$data['name'] = $store['name'];
			$data['description'] = $store['description'];
			$data['address'] = $store['address'];
			$data['status'] = $store['status'];
			$data['image'] = $store['image'];

			$tmp_dt = new DateTime($store['created_date']);
			$data['date_joined'] = $tmp_dt->format('d F Y');
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/store', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['user_token'] = $this->session->data['user_token'];
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/store', $data));
	}
	
}