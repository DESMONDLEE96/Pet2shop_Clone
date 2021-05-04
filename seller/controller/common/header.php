<?php
class ControllerCommonHeader extends Controller {
	public function index() {
		$data['title'] = $this->document->getTitle();

		if ($this->request->server['HTTPS']) {
			$data['base'] = HTTPS_SERVER;
		} else {
			$data['base'] = HTTP_SERVER;
		}

		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts();
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$this->load->language('common/header');
		
		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->seller->getUserName());

		if (!isset($this->request->get['user_token']) || !isset($this->session->data['user_token']) || ($this->request->get['user_token'] != $this->session->data['user_token'])) {
			$data['logged'] = '';

			$data['home'] = $this->url->link('store/store', '', true);
		} else {
			$data['logged'] = true;

			$data['home'] = $this->url->link('store/store', 'user_token=' . $this->session->data['user_token'], true);
			$data['logout'] = $this->url->link('common/logout', 'user_token=' . $this->session->data['user_token'], true);
			$data['profile'] = $this->url->link('common/profile', 'user_token=' . $this->session->data['user_token'], true);
		
			$this->load->model('seller/seller');
	
			$this->load->model('tool/image');
	
			$seller_info = $this->model_seller_seller->getSeller($this->seller->getId());
	
			if ($seller_info) {
				$data['firstname'] = $seller_info['firstname'];
				$data['lastname'] = $seller_info['lastname'];
	
				$data['image'] = $this->model_tool_image->resize('profile.png', 45, 45);
				
			} else {
				$data['firstname'] = '';
				$data['lastname'] = '';
				$data['image'] = '';
			}			

		}

		return $this->load->view('common/header', $data);
	}
}