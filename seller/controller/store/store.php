<?php
class ControllerStoreStore extends Controller {
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

	public function save() {
		$json = array();
		$this->load->language('catalog/store');

		$json['error'] = array(); // start form empty

		if (!$this->seller->isLogged()) {
			$json['error']['access']= "Invalid Access \r\n";
		}

		$storeName = trim($this->request->post['name']);
		$description = trim($this->request->post['description']);
		$address = trim($this->request->post['address']);
		$status = $this->request->post['status'];
		$fileDirectory = "";

		if (empty($storeName) || utf8_strlen($storeName) < 4 || utf8_strlen($storeName) > 20) {
			$json['error']['name']= "Invalid Store Name. Length Must be within 3 to 20 characters \n ";
		}

		if (empty($description) || utf8_strlen($description) < 20 || utf8_strlen($description) > 200) {
			$json['error']['description']= "Invalid Description. Length Must be within 20 to 200 characters \n ";
		}

		if (empty($address)) {
			$json['error']['address']= "Invalid Address. \r\n ";
		}

		if ($status != 0 && $status != 1) {
			$status = 0;
		}

		if (isset($this->request->files['image']) && empty($json['error'])) {
			$file = $this->request->files['image'];
			$directory = rtrim(DIR_IMAGE . 'seller/' . $this->seller->getId(), '/');

			if (!is_dir($directory)) {
				mkdir($directory , 0777, true);
				chmod($directory , 0777);
			}

			if (is_dir($directory)) {
				if (is_file($file['tmp_name'])) {
					$fileType = explode(".", $file['name'])[1];
					// Sanitize the filename
					$filename = 'store_img.'.$fileType;

					// Allowed file extension types
					$allowed = array(
						'jpg',
						'jpeg',
						'gif',
						'png'
					);

					if (!in_array(utf8_strtolower(utf8_substr(strrchr($filename, '.'), 1)), $allowed)) {
						$json['error'] = $this->language->get('error_filetype');
					}

					// Allowed file mime types
					$allowed2 = array(
						'image/jpeg',
						'image/pjpeg',
						'image/png',
						'image/x-png',
						'image/gif'
					);

					if (!in_array($file['type'], $allowed2)) {
						$json['error']['filetype'] = $this->language->get('error_filetype');
					}

					// Return any upload error
					if ($file['error'] != UPLOAD_ERR_OK) {
						$json['error']['uploadError'] = $this->language->get('error_upload_' . $file['error']);
					}

					if (empty($json['error'])) {
						//if have same file name delete it
						$tmpName = explode('.', $filename);
						foreach($allowed as $a) {
							if (file_exists($directory . '/store_img'.'.'.$a)) {
								unlink($directory . '/' .'store_img'.'.'.$a);
								clearstatcache(); //if not will get back the old image
							}
						}
						
						
						move_uploaded_file($file['tmp_name'], $directory . '/' . $filename);
						touch($directory . '/' . $filename);

						$fileDirectory = rtrim(HTTPS_CATALOG . 'image/seller/' . $this->seller->getId().'/'. $filename, '/');
					}
				} else {
					$json['error']['uploadError']= "\r\n".$this->language->get('error_upload');
				}
			}

		}

		if (empty($json['error'])) {
			$this->load->model('catalog/store');

			$data = array(
				'name' => $storeName,
				'description' => $description,
				'address' => $address,
				'status' => $status,
				'seller_id' => $this->seller->getId(),
				'image' => $fileDirectory
			);
			$this->model_catalog_store->saveStore($data);

			$json['success'] = "Successfully Updated Store";
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
}