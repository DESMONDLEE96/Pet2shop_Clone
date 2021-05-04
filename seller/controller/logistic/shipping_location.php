<?php
class ControllerLogisticShippingLocation extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('logistic/shipping_location');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('logistic/shipping');

		$this->getList();
	}

	public function add() {
		$this->load->language('logistic/shipping_location');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('logistic/shipping');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {

			$this->model_logistic_shipping->addOrEditShippingLocation($this->request->post);

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

			$this->response->redirect($this->url->link('logistic/shipping_location', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('logistic/shipping_location');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('logistic/shipping');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_logistic_shipping->addOrEditShippingLocation($this->request->post, $this->request->get['shipping_location_id']);

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

			$this->response->redirect($this->url->link('logistic/shipping_location', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('logistic/shipping_location');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('logistic/shipping_location');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $shipping_location_id) {
				$this->model_logistic_shipping->deleteCourier($shipping_location_id);
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

			$this->response->redirect($this->url->link('logistic/shipping_location', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}

	protected function getList() {
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = '';
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
			'href' => $this->url->link('logistic/shipping_location', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		$data['add'] = $this->url->link('logistic/shipping_location/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['delete'] = $this->url->link('logistic/shipping_location/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$data['shipping_location'] = array();

		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);

		$courier_total = $this->model_logistic_shipping->getTotalShippingLocations();

		$results = $this->model_logistic_shipping->getShippingLocations($filter_data);

		foreach ($results as $result) {
			$data['couriers'][] = array(
				'shipping_location_id' 	=> $result['id'],
				'shipping_courier_name'   => $result['shipping_courier_name'],
				'shipping_courier_code'   => $result['shipping_courier_code'],
				'country_id'       		=> $result['country_id'],
				'geo_zone_id'			=> $result['geo_zone_id'],
				'location_name'			=> $result['location_name'],
				'status'				=> $result['status'],
				'weight_setting'		=> json_decode($result['weight_setting']),
				'edit'       			=> $this->url->link('logistic/shipping_location/edit', 'user_token=' . $this->session->data['user_token'] . '&shipping_location_id=' . $result['id'] . $url, true)
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

		$data['sort_courier_name'] = $this->url->link('logistic/shipping_location', 'user_token=' . $this->session->data['user_token'] . '&sort=shipping_location_name' . $url, true);
		$data['sort_courier_code'] = $this->url->link('logistic/shipping_location', 'user_token=' . $this->session->data['user_token'] . '&sort=shipping_location_code' . $url, true);

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
		$pagination->url = $this->url->link('logistic/shipping_location', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($courier_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($courier_total - $this->config->get('config_limit_admin'))) ? $courier_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $courier_total, ceil($courier_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('logistic/shipping_location_list', $data));
	}

	protected function getForm() {
		$data['text_form'] = !isset($this->request->get['shipping_location_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['location_name'])) {
			$data['error_location_name'] = $this->error['location_name'];
		} else {
			$data['error_location_name'] = '';
		}

		if (isset($this->error['repeated_location'])) {
			$data['error_repeated_location'] = $this->error['repeated_location'];
		} else {
			$data['error_repeated_location'] = '';
		}

		if (isset($this->error['weight_setting'])) {
			$data['error_weight_setting'] = $this->error['weight_setting'];
		} else {
			$data['error_weight_setting'] = '';
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
			'href' => $this->url->link('logistic/shipping_location', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		$data['courier_lists'] = $this->model_logistic_shipping->getShippingCouriers();
		$ship_locations = $this->model_logistic_shipping->getShippingLocationSelections();
		$data['country_lists'] = $ship_locations['countries'];
		$data['geo_zone_lists'] = $ship_locations['geo_zones'];

		if (!isset($this->request->get['shipping_location_id'])) {
			$data['action'] = $this->url->link('logistic/shipping_location/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		} else {
			$data['action'] = $this->url->link('logistic/shipping_location/edit', 'user_token=' . $this->session->data['user_token'] . '&shipping_location_id=' . $this->request->get['shipping_location_id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('logistic/shipping_location', 'user_token=' . $this->session->data['user_token'] . $url, true);

		if (isset($this->request->get['shipping_location_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$shipping_location_info = $this->model_logistic_shipping->getShippingLocation($this->request->get['shipping_location_id']);

			if (!empty($shipping_location_info['country_id'])) {
				$data['location_type'] = 'country';
				$data['location_id']   = $shipping_location_info['country_id'];
			} else if (!empty($shipping_location_info['geo_zone_id'])) {
				$data['location_type'] = 'geozone';
				$data['location_id']   = $shipping_location_info['geo_zone_id'];
			}
		} else {
			$data['location_type'] = '';
			$data['location_id']   = '';
		}

		if (isset($this->request->post['shipping_courier_id'])) {
			$data['shipping_courier_id'] = $this->request->post['shipping_courier_id'];
		} elseif (!empty($shipping_location_info)) {
			$data['shipping_courier_id'] = $shipping_location_info['shipping_courier_id'];
		} else {
			$data['shipping_courier_id'] = '';
		}

		if (isset($this->request->post['weight_setting'])) {
			$data['weight_setting'] = $this->request->post['weight_setting'];
		} elseif (!empty($shipping_location_info)) {
			$data['weight_setting'] = (array) json_decode($shipping_location_info['weight_setting']);
		} else {
			$data['weight_setting'] = '';
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($shipping_location_info)) {
			$data['status'] = $shipping_location_info['status'];
		} else {
			$data['status'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('logistic/shipping_location_form', $data));
	}

	protected function validateForm() {

		if (!isset($this->request->post['location_name']) || $this->request->post['location_name'] == "") {
			$this->error['location_name'] = $this->language->get('error_location_name');
		} else {
			$shipping_location_id = !empty($this->request->get['shipping_location_id']) ? $this->request->get['shipping_location_id'] : 0;
			$notRepeat = $this->model_logistic_shipping->checkNotRepeatLocation($shipping_location_id, $this->request->post['shipping_courier_id'], $this->request->post['location_name']);
			if ($notRepeat == false) {
				$this->error['repeated_location'] = $this->language->get('error_repeated_location');
			}
			
		}

		$weight = html_entity_decode($this->request->post['weight_setting']);
		if (!empty($weight)) {
			$weight = json_decode($weight, true);
			ksort($weight);
			foreach($weight as $k => $v) {
				if (!is_numeric($k) || !is_numeric($v)) {
					$this->error['weight_setting'] = $this->language->get('error_weight_setting');
					break;
				}
			}
			$this->request->post['weight_setting'] = json_encode($weight);
		}

		return !$this->error;
	}

	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'logistic/shipping_location')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

}