<?php
defined('BASEPATH') OR exit('Přímý přístup k tomuto skriptu není povolen.');

// Class 'Admin'
class Admin extends MY_Controller {
	// Construct method
    public function __construct() {
        parent::__construct();
        $this->config->set_item('language', 'czech'); 
	}

	// Index method
	public function index() {
		// Parameters for views
		$attributes = array('id' => 'form-admin');
		$form = form_open('admin/validation', $attributes);
		$msg = '';
		if ( $this->session->flashdata('alertMessage') ) {
			$msg = '<div class="alert alert-' . $this->session->flashdata('alertType') . ' alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>' . $this->session->flashdata('alertMessage') . '</div>';
		}
		$recaptcha = '';
		if (ENVIRONMENT === 'production2') {
			$recaptcha = '<center><div class="g-recaptcha" data-sitekey="' . $this->config->item('recaptcha_sitekey') . '"></div><br></center>';
		}
		$data = array(
			'msg' => $msg,
			'form' => $form,
			'recaptcha' => $recaptcha
		);

		// Views
		$this->parser->parse('admin/admin', $data);
	}

	// Validation method
	public function validation() {
		$post = $this->input->post(NULL, TRUE);
		if (!empty($post)) {
			foreach ($post as $key => $value) {
				$post[$key] = $this->security->xss_clean($value);
			}

			if (ENVIRONMENT === 'production2') {
				$recaptcha = $post['g-recaptcha-response'];
				if ($recaptcha != '') {
					$secret = $this->config->item('recaptcha_secret');
					$ip = $this->input->ip_address();
					$var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha&remoteip=$ip");
					$array = json_decode($var, true);
				}
			} else {
				$recaptcha = 'kilo';
				$array['success'] = true;
			}

			if ($recaptcha != '') {
				if ($array['success']) {

					$this->form_validation->set_rules('email', 'Email', 'max_length[70]|valid_email|required|trim|xss_clean');
					$this->form_validation->set_rules('pwd', 'Heslo', 'min_length[7]|max_length[20]|required|trim|xss_clean');

					if ($this->form_validation->run() == FALSE) {
						// Error. Please try again
						$this->session->set_flashdata('alertMessage', '<h4><i class="icon fa fa-ban"></i> Chyba </h4>'.validation_errors(). 'Prosím zkuste to znovu');
						$this->session->set_flashdata('alertType', 'danger'); // success, info, warning, danger
						redirect('admin');           
					} else {
						if ( $post['email'] == 'solucionaticos@gmail.com') {
							if ($post['pwd'] === '123456789') {
								$this->credentials();
							} else {
								// Error. Invalid password. Please try again
								$this->session->set_flashdata('alertMessage', '<h4><i class="icon fa fa-ban"></i> Chyba </h4>Neplatné heslo<br>Prosím zkuste to znovu');
								$this->session->set_flashdata('alertType', 'danger'); // success, info, warning, danger
								redirect('admin');    
							}
						} else {
							// Error. Invalid email. Please try again
							$this->session->set_flashdata('alertMessage', '<h4><i class="icon fa fa-ban"></i> Chyba </h4>Neplatný e-mail<br>Prosím zkuste to znovu');
							$this->session->set_flashdata('alertType', 'danger'); // success, info, warning, danger
							redirect('admin');    
						}

					}

				} else {
					// Error. You are a robot. Please try again
					$this->session->set_flashdata('alertMessage', '<h4><i class="icon fa fa-ban"></i> Chyba </h4>Jste robot');
					$this->session->set_flashdata('alertType', 'danger'); // success, info, warning, danger
					redirect('admin');    
				}
			} else {
				// Error. You must indicate that you are not a robot. Please try again
				$this->session->set_flashdata('alertMessage', '<h4><i class="icon fa fa-ban"></i> Chyba </h4>Musíte uvést, že nejste robot.<br>Prosím zkuste to znovu');
				$this->session->set_flashdata('alertType', 'danger'); // success, info, warning, danger
				redirect('admin');    
			}
		} else {
			echo "kilo";
		}
	}

	// Credentials method 
	public function credentials() {
		$this->session->set_userdata('be_user_id', 1);
		$this->session->set_userdata('be_user_name', 'Administrator');
		redirect(base_url() . "backend/product");
	}

	// Log out method 
	public function odhlasit_se() {
		$this->session->unset_userdata('be_user_id');
		$this->session->unset_userdata('be_user_name');
		redirect('admin');
	}

	public function destroy() {
		$this->session->sess_destroy();
		redirect('');
	}


}
