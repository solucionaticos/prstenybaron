<?php
defined('BASEPATH') OR exit('Přímý přístup k tomuto skriptu není povolen.');

class Home extends MY_Controller {

    public function __construct() {
		parent::__construct();
	}

	public function index() {

		$page = $this->Model->getRow('pages', 'uvod', 'code'); 

		$nav = array(
			'class_header' => 'nav_header_home',
			'value_header' => 'nav-link-active',
			'class_footer' => 'nav_footer_home',
			'value_footer' => 'active'
		);

		$this->_load_work_area_general('front/home', $nav, $page->title, $page->description);

	}

	public function about_us() {

		$page = $this->Model->getRow('pages', 'o_nas', 'code'); 

		$nav = array(
			'class_header' => 'nav_header_about_us',
			'value_header' => 'nav-link-active',
			'class_footer' => 'nav_footer_about_us',
			'value_footer' => 'active'
		);

		$this->_load_work_area_general('front/home', $nav, $page->title, $page->description);

	}


	public function gold() {

		$page = $this->Model->getRow('pages', 'zlato', 'code'); 

		$nav = array(
			'class_header' => 'nav_header_gold',
			'value_header' => 'nav-link-active',
			'class_footer' => 'nav_footer_gold',
			'value_footer' => 'active'
		);

		$this->_load_work_area_general('front/home', $nav, $page->title, $page->description);

	}

	public function stones() {

		$page = $this->Model->getRow('pages', 'kameny', 'code'); 

		$nav = array(
			'class_header' => 'nav_header_stones',
			'value_header' => 'nav-link-active',
			'class_footer' => 'nav_footer_stones',
			'value_footer' => 'active'
		);

		$this->_load_work_area_general('front/home', $nav, $page->title, $page->description);

	}

	public function important_information() {

		$page = $this->Model->getRow('pages', 'dulezite_informace', 'code'); 

		$nav = array(
			'class_header' => 'nav_header_important_information',
			'value_header' => 'nav-link-active',
			'class_footer' => 'nav_footer_important_information',
			'value_footer' => 'active'
		);

		$this->_load_work_area_general('front/home', $nav, $page->title, $page->description);

	}

	function _load_work_area_general($template, $nav, $title = '', $description = '') {

		$settings = $this->Model->getRow('settings', 1); 
		$products = $this->Model->getRowsJoin('product');
		foreach ($products as $key => $value) $products[$key]['base_url'] = base_url();
		$data = array(
			'base_url' => base_url(),
			'page_title' => $title, 
			'page_description' => $description,
			'facebook_url' => $settings->facebook,
			'instagram_url' => $settings->instagram,
			'whatsapp_number' => $settings->whatsapp,
			'products' => $products,
			$nav['class_header'] => $nav['value_header'],
			$nav['class_footer'] => $nav['value_footer']
		);

		$this->_load_layout('front/home', $data);

	}

	public function category($id) {

 		$products = $this->Model->getRowsJoin('product', '', array(), array('category_id'=> $id));
		foreach ($products as $key => $value) $products[$key]['base_url'] = base_url();

 		switch ($id) {
 			case '1':
 				$title = 'Bílé zlato';
 				break;
 			case '2':
 				$title = 'Kombinované zlato';
 				break;
 			case '3':
 				$title = 'Žluté zlato';
 				break;
 			case '4':
 				$title = 'Červené zlato';
 				break;
 		}

		$nav = array(
			'class_header' => 'nav_header_category_' . $id,
			'value_header' => 'dropdown-item-active',
			'class_footer' => 'nav_footer_category_' . $id,
			'value_footer' => 'active'
		);

		$this->_load_work_area_category('front/home', $nav, $title, $products);

	}

	function _load_work_area_category($template, $nav, $title, $products) {

		$settings = $this->Model->getRow('settings', 1); 
		$data = array(
			'base_url' => base_url(),
			'page_title' => $title, 
			'page_description' => '',
			'facebook_url' => $settings->facebook,
			'instagram_url' => $settings->instagram,
			'whatsapp_number' => $settings->whatsapp,
			'products' => $products,
			$nav['class_header'] => $nav['value_header'],
			$nav['class_footer'] => $nav['value_footer']
		);

		$this->_load_layout('front/home', $data);

	}


	public function contact() {
		$page = $this->Model->getRow('pages', 1); 
		$settings = $this->Model->getRow('settings', 1); 
		$products = $this->Model->getRowsJoin('product');
		$data = array(
			'base_url' => base_url(),
			'page_title' => $page->title,
			'page_description' => $page->description, 
			'facebook_url' => $settings->facebook,
			'instagram_url' => $settings->instagram,
			'whatsapp_number' => $settings->whatsapp,
			'contact_name' => $settings->contact_name,
			'contact_identification' => $settings->contact_identification,
			'telephone' => $settings->telephone,
			'email' => $settings->email,
			'address_1' => $settings->address_1,
			'address_2' => $settings->address_2,
			'zip_code' => $settings->zip_code,
			'city' => $settings->city,
			'products' => $products,
			'nav_header_contact' => 'nav-link-active',
			'nav_footer_contact' => 'active'
		);

		$this->_load_layout('front/contact', $data);
	}

	public function detail($url) {
		$settings = $this->Model->getRow('settings', 1);

		$product = $this->Model->getRow('product', $url, 'url');

		$images = $this->Model->getRowsJoin('image', 'image', array(), array('product_id'=> $product->id));
		foreach ($images as $key => $value) {
			$images[$key]['base_url'] = base_url();
			$images[$key]['path'] = 'images';
			$images[$key]['class'] = '';
			$images[$key]['slide'] = '<li data-target="#demo" data-slide-to="'.($key + 1).'"></li>';
		}
		$images[-1]['base_url'] = base_url();
		$images[-1]['image'] = $product->image;
		$images[-1]['path'] = 'products';
		$images[-1]['class'] = 'active';
		$images[-1]['slide'] = '<li data-target="#demo" data-slide-to="0" class="active"></li>';
		ksort($images); 

        $related_products = $this->Model->getRowsJoin(
        	'related_product rp', 
        	'p.name, p.image, p.url', 
        	array('product p' => array('p.id = rp.product_related','')), 
        	array('rp.product_id'=> $product->id), '', '', array(), 4);
        foreach ($related_products as $key => $value) $related_products[$key]['base_url'] = base_url();

		$data = array(
			'base_url' => base_url(),
			'facebook_url' => $settings->facebook,
			'instagram_url' => $settings->instagram,
			'whatsapp_number' => $settings->whatsapp,

			'name' => $product->name,
			'url' => $product->url,
			'description' => $product->description,
			'category_id' => $product->category_id,
			'image' => $product->image,
			'material' => $product->material,
			'width' => $product->width,
			'price_size' => $product->price_size,
			'price_brillants' => $product->price_brillants,
			'meta_keywords' => $product->meta_keywords,
			'meta_description' => $product->meta_description,
			'meta_image' => $product->meta_image,

			'images' =>$images,
			'related_products' =>$related_products
		);

		$this->_load_layout('front/detail', $data);

	}

	function _load_layout($template, $data) {
		$this->parser->parse('front/layouts/header', $data);
		$this->parser->parse($template, $data);
		$this->parser->parse('front/layouts/footer', $data);
	}

	
}		