<?php
class ControllerLogisticShippingCourier extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('logistic/shipping_courier');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('logistic/shipping');

		$this->getList();
	}

	public function add() {
		$this->load->language('logistic/shipping_courier');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('logistic/shipping');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_logistic_shipping->addShippingCourier($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('logistic/shipping_courier', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('logistic/shipping_courier');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('logistic/shipping');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_logistic_shipping->editShippingCourier($this->request->get['shipping_courier_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('logistic/shipping_courier', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('logistic/shipping_courier');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('logistic/shipping');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $shipping_courier_id) {
				print_r($shipping_courier_id);
				$this->model_logistic_shipping->deleteShippingCourier($shipping_courier_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('logistic/shipping_courier', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}

	protected function getList() {
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'shipping_courier_name';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('logistic/shipping_courier', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		$data['add'] = $this->url->link('logistic/shipping_courier/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['delete'] = $this->url->link('logistic/shipping_courier/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$data['shipping_courier'] = array();

		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);

		$courier_total = $this->model_logistic_shipping->getTotalShippingCouriers();

		$results = $this->model_logistic_shipping->getShippingCouriers($filter_data);

		foreach ($results as $result) {
			$data['couriers'][] = array(
				'shipping_courier_id' => $result['shipping_courier_id'],
				'name'       => $result['shipping_courier_name'],
				'code'       => $result['shipping_courier_code'],
				'edit'       => $this->url->link('logistic/shipping_courier/edit', 'user_token=' . $this->session->data['user_token'] . '&shipping_courier_id=' . $result['shipping_courier_id'] . $url, true)
			);
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_courier_name'] = $this->url->link('logistic/shipping_courier', 'user_token=' . $this->session->data['user_token'] . '&sort=shipping_courier_name' . $url, true);
		$data['sort_courier_code'] = $this->url->link('logistic/shipping_courier', 'user_token=' . $this->session->data['user_token'] . '&sort=shipping_courier_code' . $url, true);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $courier_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('logistic/shipping_courier', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($courier_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($courier_total - $this->config->get('config_limit_admin'))) ? $courier_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $courier_total, ceil($courier_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('logistic/shipping_courier_list', $data));
	}

	protected function getForm() {
		$data['text_form'] = !isset($this->request->get['shipping_courier_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('logistic/coushipping_courierntry', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		if (!isset($this->request->get['shipping_courier_id'])) {
			$data['action'] = $this->url->link('logistic/shipping_courier/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		} else {
			$data['action'] = $this->url->link('logistic/shipping_courier/edit', 'user_token=' . $this->session->data['user_token'] . '&shipping_courier_id=' . $this->request->get['shipping_courier_id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('logistic/shipping_courier', 'user_token=' . $this->session->data['user_token'] . $url, true);

		if (isset($this->request->get['shipping_courier_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$shipping_courier_info = $this->model_logistic_shipping->getShippingCourier($this->request->get['shipping_courier_id']);
		}

		if (isset($this->request->post['shipping_courier_name'])) {
			$data['shipping_courier_name'] = $this->request->post['shipping_courier_name'];
		} elseif (!empty($shipping_courier_info)) {
			$data['shipping_courier_name'] = $shipping_courier_info['shipping_courier_name'];
		} else {
			$data['shipping_courier_name'] = '';
		}

		if (isset($this->request->post['shipping_courier_code'])) {
			$data['shipping_courier_code'] = $this->request->post['shipping_courier_code'];
		} elseif (!empty($shipping_courier_info)) {
			$data['shipping_courier_code'] = $shipping_courier_info['shipping_courier_code'];
		} else {
			$data['shipping_courier_code'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('logistic/shipping_courier_form', $data));
	}

	protected function validateForm() {

		if ((utf8_strlen($this->request->post['shipping_courier_name']) < 1) || (utf8_strlen($this->request->post['shipping_courier_name']) > 128)) {
			$this->error['shipping_courier_name'] = $this->language->get('error_shipping_courier_name');
		}

		if ((utf8_strlen($this->request->post['shipping_courier_code']) < 1) || (utf8_strlen($this->request->post['shipping_courier_code']) > 128)) {
			$this->error['shipping_courier_code'] = $this->language->get('shipping_courier_code');
		}

		return !$this->error;
	}

	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'logistic/shipping_courier')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

}