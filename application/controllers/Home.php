<?php
defined('BASEPATH') OR exit('Přímý přístup k tomuto skriptu není povolen.');

class Home extends MY_Controller {
    public function __construct() {
		parent::__construct();
		$this->load->database();
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

		$this->load->view('front/layouts/header');
		$this->parser->parse('front/home', $data);
		$this->load->view('front/layouts/footer');
	}

	public function category($categoria)
	{
		// $query = $this->db->get('product')->where('category_id', $categoria)->result();

		$products = $this->db->get_where('product', array('category_id' => $categoria))->result();
		
		// return $products->result();

		// var_dump($query);

		$page = $this->Model->getRow('pages', 1); 
		$settings = $this->Model->getRow('settings', 1); 
		// $products = $this->Model->set_primary_key('product');
		$data = array(
			'page_title' => $page->title,
			'page_description' => $page->description, 
			'facebook_url' => $settings->facebook,
			'instagram_url' => $settings->instagram,
			'whatsapp_number' => $settings->whatsapp,
			 'products' => $products
		);

		$this->load->view('front/layouts/header');
		$this->parser->parse('front/category', $data);
		$this->load->view('front/layouts/footer');
	}
	public function contact()
	{
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

		$this->load->view('front/layouts/header');
		$this->parser->parse('front/contact',$data);
		$this->load->view('front/layouts/footer');
	}

	public function detail($url)
	{
		$page = $this->Model->getRow('pages', 1); 
		$settings = $this->Model->getRow('settings', 1);
		$products = $this->db->get_where('product', array('url' => $url))->result();

		$id_product;
		foreach ($products as $data) {
			$id_product=$data->id;
		}

		$image = $this->db->get_where('image', array('product_id' => $id_product))->result();
		

		$data = array(
			'page_title' => $page->title,
			'page_description' => $page->description, 
			'facebook_url' => $settings->facebook,
			'instagram_url' => $settings->instagram,
			'whatsapp_number' => $settings->whatsapp,
			'products' => $products,
			'image' =>$image
		);



		$this->load->view('front/layouts/header');
		$this->parser->parse('front/detail',$data);
		$this->load->view('front/layouts/footer');
	}
	
}		