<?php
defined('BASEPATH') OR exit('Přímý přístup k tomuto skriptu není povolen.');

class Home extends MY_Controller {
    public function __construct() {
        parent::__construct();
	}

	public function index() {

		$page = $this->Model->getRow('pages', 1); 
		$settings = $this->Model->getRow('settings', 1); 
		$products = $this->Model->getRowsJoin('product');
		$data = array(
			'page_title' => $page->title,
			'page_description' => $page->description, 
			'facebook_url' => $settings->facebook,
			'instagram_url' => $settings->instagram,
			'whatsapp_number' => $settings->whatsapp,
			'products' => $products
		);		

		$this->parser->parse('front/home', $data);
	}
}		